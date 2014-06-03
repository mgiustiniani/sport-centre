<?php

namespace Manticora\SportCentre\Domain\Model\Sport;
/**
 * Class Sport
 * @package Manticora\SportCentre\Domain\Model\Sport
 */
class Sport
{


    /**
     * @var string
     */
    private $name;

    /**
     * @param $name string
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
