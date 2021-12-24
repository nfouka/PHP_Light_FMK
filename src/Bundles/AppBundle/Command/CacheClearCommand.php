<?php

namespace Bundles\AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class CacheClearCommand extends Command
{

    protected static $defaultName = 'cache:clear';
    protected static $defaultDescription = 'Clear the cache';
    protected function configure(): void
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $realCacheDir = __DIR__."/../../../../cache/" ;
        $fs = new Filesystem();
        $fs->remove($realCacheDir);
        $fs->mkdir($realCacheDir);
        return Command::SUCCESS;

    }
}