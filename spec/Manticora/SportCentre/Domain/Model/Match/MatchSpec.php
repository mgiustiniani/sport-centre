<?php

namespace spec\Manticora\SportCentre\Domain\Model\Match;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Domain\Model\Match
 * @mixin \Manticora\SportCentre\Domain\Model\Match\Match
 */
class MatchSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Domain\Model\Match\Match');
    }
}

