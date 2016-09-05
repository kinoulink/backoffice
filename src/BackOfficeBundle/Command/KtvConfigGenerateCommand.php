<?php

namespace BackOfficeBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class KtvConfigGenerateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('ktv:config:generate')
            ->setDescription('Generate JSON configuration files.')
            ->addArgument('dest', InputArgument::REQUIRED, 'Destination directory')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dest = $input->getArgument('dest');



        $output->writeln('Command result.');
    }

}
