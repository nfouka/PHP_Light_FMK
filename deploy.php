<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'var/www/html');

// Project repository
set('repository', 'https://github.com/nfouka/PHP_Light_FMK');

// [Optional] Allocate tty for git clone. Default value is false.
// set('git_tty', true); 

// Shared files/dirs between deploys 
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server 
set('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('127.0.0.1')
    ->stage('develop')
    ->user('nadir')
    ->identityFile('~/.ssh/id_rsa')
    ->set('branch', 'develop')
    ->set('deploy_path', '/var/www/html/develop'); 


host('176.149.71.189')
    ->stage('production')
    ->user('nadir')
    ->identityFile('id_rsa')
    ->set('branch', 'master')
    ->set('deploy_path', '/var/www/html/prod'); 
    


task('nadir', function () {
   $redis = new \Redis();
   $redis->connect('127.0.0.1', 6379);
   $redis->set("branch", "{{branch}}");
   writeln("<error>branch : </error>".$redis->get('branch')) ; 

}) ; 


// Tasks

task('create:ssh', function () {
    //run("eval `ssh-agent -s`");   // sign_and_send_pubkey: signing failed: agent refused operation
    //run("ssh-add");
    
    writeln("SSH Eval updated! ".\Deployer\Task\Context::get()->getHost()->getHostname() );

});


task('create:release', function () {
    $i = 0;

    do {
        $releasePath = '{{deploy_path}}/releases/' . time()  ;
    } while (run("if [ -d $releasePath ]; then echo exists; fi;") == 'exists');

    run("mkdir $releasePath");
    set('release_path', $releasePath);

    writeln("Release path: $releasePath");
});

task('deploy:symlink', function () {
    run('ln -nfs {{release_path}} {{deploy_path}}/current');
});

desc('Deploy your project');
task('deploy', [
    'create:ssh',
    'deploy:info',
    'deploy:prepare',
    'create:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'cleanup',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
//after('deploy:failed', 'deploy:unlock');
