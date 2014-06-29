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

    public function let($name)
    {
        $this->beConstructedWith('1', 'Soccer');
    }

    function it_is_initializable_with_sport_id_and_sport_name()
    {
        $this->shouldHaveType('Manticora\SportCentre\Domain\Model\Sport\Sport');
    }

    function it_get_name_method_should_return_soccer()
    {
        $this->getName()->shouldReturn('Soccer');
    }

    function it_get_id_method_should_return_soccer_id()
    {
        $this->getId()->shouldReturn('1');
    }

}

