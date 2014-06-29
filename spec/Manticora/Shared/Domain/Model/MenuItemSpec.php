<?php

namespace spec\Manticora\Shared\Domain\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\Shared\Domain\Model
 * @mixin \Manticora\Shared\Domain\Model\MenuItem
 */
class MenuItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\Shared\Domain\Model\MenuItem');
    }
}

