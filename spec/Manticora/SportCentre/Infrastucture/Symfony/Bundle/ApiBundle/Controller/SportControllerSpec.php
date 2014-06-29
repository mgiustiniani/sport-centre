<?php

namespace spec\Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Controller
 * @mixin \Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Controller\SportController
 */
class SportControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Controller\SportController');
    }

    function it_have_a_collection_representation()
    {
        $response = $this->cgetAction();
    }

    function it_have_a_sport_detail($id)
    {
        $response = $this->getAction();
    }
}

