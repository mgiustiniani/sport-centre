<?php

namespace spec\Manticora\Location\Domain\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\Location\Domain\Model
 * @mixin \Manticora\Location\Domain\Model\Zone
 */
class ZoneSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\Location\Domain\Model\Zone');
    }
}

