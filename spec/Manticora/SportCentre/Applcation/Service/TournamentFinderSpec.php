<?php

namespace spec\Manticora\SportCentre\Applcation\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Applcation\Service
 * @mixin \Manticora\SportCentre\Applcation\Service\TournamentFinder
 */
class TournamentFinderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Applcation\Service\TournamentFinder');
    }
}
