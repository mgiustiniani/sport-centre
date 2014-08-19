<?php

namespace Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Controller;

use Hateoas\Representation\CollectionRepresentation;
use Hateoas\Representation\PaginatedRepresentation;
use Manticora\SportCentre\Infrastucture\Persistence\InMemorySportQueryRepository;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
/**
 * Class SportController
 * @package Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Controller
 *
 * @Rest\RouteResource("Sport")
 */
class SportController
{
    /**
     * @Rest\View(statusCode=200)
     * @return Response
     */
    public function cgetAction()
    {
        $repository = new InMemorySportQueryRepository();


          $coll=    new CollectionRepresentation(
                  $repository->findAll(),
                  'sports',
                  'sports'
                   );

        return $coll;
    }

    /**
     * @return Response
     */
    public function getAction()
    {
         return new Response();
    }
}
