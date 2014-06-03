<?php
/**
 * User: Mario Giustiniani
 * Date: 03/06/14
 * Time: 22.48
 */

namespace Manticora\SportCentre\Domain\Model\Sport;

/**
 * Interface SportQueryRepository
 * @package Manticora\SportCentre\Domain\Model\Sport
 */
interface SportQueryRepository {
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @param $name
     * @return mixed
     */
    public function findByName($name);

} 