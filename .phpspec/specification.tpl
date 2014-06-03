<?php

namespace %namespace%;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package %namespace%
 * @mixin \%subject%
 */
class %name% extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('%subject%');
    }
}

