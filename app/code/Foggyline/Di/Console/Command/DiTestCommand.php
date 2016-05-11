<?php

namespace Foggyline\Di\Console\Command;

use Foggyline\Di\Model\Image;
use Foggyline\Di\Model\User;
use Magento\Framework\ObjectManager\ObjectManager;

class DiTestCommand extends \Symfony\Component\Console\Command\Command
{
    protected $myArg1;
    protected $myArg2;

    public function __construct(
        User $myArg1,
        Image $myArg2,
        //ObjectManager $objectManager,
        $name = null
    )
    {
        var_dump($myArg1);
        var_dump($myArg2);
        //var_dump($objectManager);

        $this->myArg1 = $myArg1;
        $this->myArg2 = $myArg2;

        return parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('foggy:di');
        $this->setDescription('Sample playground for Foggyline_Di module');
        parent::configure();
    }

    /**
     * Command "php bin/magento foggy:di" would trigger code in this method
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int
     */
    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    )
    {

//        var_dump($this->myArg1);
//        var_dump($this->myArg2);
//
//        var_dump($this->myArg1["instance"]);
//        var_dump($this->myArg2["instance"]);

        return 0;
    }

}
