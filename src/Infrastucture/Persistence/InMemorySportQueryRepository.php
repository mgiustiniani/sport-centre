<?php

namespace Manticora\SportCentre\Infrastucture\Persistence;

use Manticora\SportCentre\Domain\Model\Sport\Sport;
use Manticora\SportCentre\Domain\Model\Sport\SportQueryRepository;

/**
 * Class InMemorySportQueryRepository
 * @package Manticora\SportCentre\Infrastucture\Persistence
 */
class InMemorySportQueryRepository implements SportQueryRepository
{
    /**
     * @var Sport
     */
    private $elements = array();

    public function __construct()
    {
        $this->elements[] = new Sport("1", "Soccer");
        $this->elements[] = new Sport("2", "Tennis");
    }

    /**
     * @return array
     */
    public function findAll()
    {
        return $this->elements;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function findById($id)
    {
        foreach ( $this->elements as $element) {
            if ($element->getId() == $id) {
                return $element;
            }
        }
    }
}
