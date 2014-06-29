<?php

namespace spec\Manticora\SportCentre\Infrastucture\Persistence;

use Manticora\SportCentre\Domain\Model\Sport\Sport;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SportSpec
 * @package spec\Manticora\SportCentre\Infrastucture\Persistence
 * @mixin \Manticora\SportCentre\Infrastucture\Persistence\InMemorySportQueryRepository
 */
class InMemorySportQueryRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {

        $this->shouldHaveType('Manticora\SportCentre\Infrastucture\Persistence\InMemorySportQueryRepository');
    }

    function it_implement_sport_query_repository_contract()
    {
        $this->shouldImplement('Manticora\SportCentre\Domain\Model\Sport\SportQueryRepository');
    }

   function it_return_a_collection_of_all_sports()
   {
       $this->findAll()->shouldBeArray();
   }

   function it_return_a_sport_element_by_id()
   {
       $this->findById('1')->shouldHaveType('Manticora\SportCentre\Domain\Model\Sport\Sport');
       $this->findById('1')->getId()->shouldBeEqualTo("1");
   }

   function it_return_a_null_when_find_unexistent_id()
    {
        $this->findById('3')->shouldBeNull();
    }
}

