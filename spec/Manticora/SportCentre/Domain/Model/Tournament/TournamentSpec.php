<?php

namespace spec\Manticora\SportCentre\Domain\Model\Tournament;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Domain\Model\Tournament
 * @mixin \Manticora\SportCentre\Domain\Model\Tournament\Tournament
 */
class TournamentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Domain\Model\Tournament\Tournament');
    }
}

