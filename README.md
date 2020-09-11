

# PHP Light FRAMEWORK 

PHP Version > 7.2
Light Framework based on Symfony 5 component



# RUN Server 
``
php -S localhost:8000 
``
or 
``
symfony server:start --port=4321 --passthru=front.php
``

## disable/enable xdebug 

``
php -dxdebug.remote_enable=1 -S 127.0.0.1:8888 -t web/ -c /etc/php/7.4/cli/php.ini
``


# Step 1: Authenticate
$ cat ~/GH_TOKEN.txt | docker login docker.pkg.github.com -u nfouka --password-stdin

# Step 2: Tag
$ docker tag IMAGE_ID docker.pkg.github.com/nfouka/php_light_fmk/IMAGE_NAME:VERSION

# Step 3: Publish
$ docker push docker.pkg.github.com/nfouka/php_light_fmk/IMAGE_NAME:VERSION



## DEMO 

``
URL :  https://127.0.0.1:4322/is_leap_year/2020
``

# REFERENCE DOCUMENTATION 
<a href='https://symfony.com/doc/current/create_framework'>  Create framework with symfony component </a>


