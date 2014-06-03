<?php

namespace spec\Manticora\SportCentre\Domain\Model\Sport;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Domain\Model\Sport
 * @mixin \Manticora\SportCentre\Domain\Model\Sport\Sport
 */
class SportSpec extends ObjectBehavior
{
    public function let($name) {
        $this->beConstructedWith('Soccer');
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Manticora\SportCentre\Domain\Model\Sport\Sport');
    }
    function it_getName_method_should_return_soccer()
    {
        $this->getName()->shouldReturn('Soccer');
    }
}

