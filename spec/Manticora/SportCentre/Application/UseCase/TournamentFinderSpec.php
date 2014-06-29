<?php

namespace spec\Manticora\SportCentre\Application\UseCase;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Application\UseCase
 * @mixin \Manticora\SportCentre\Application\UseCase\TournamentFinder
 */
class TournamentFinderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Application\UseCase\TournamentFinder');
    }
}

