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
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id =  $id;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}
