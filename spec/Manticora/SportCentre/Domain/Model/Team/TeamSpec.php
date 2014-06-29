<?php

namespace spec\Manticora\SportCentre\Domain\Model\Team;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Domain\Model\Team
 * @mixin \Manticora\SportCentre\Domain\Model\Team\Team
 */
class TeamSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Domain\Model\Team\Team');
    }
}

