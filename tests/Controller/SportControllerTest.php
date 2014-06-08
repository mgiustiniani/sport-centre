<?php
/**
 * User: Mario Giustiniani
 * Date: 07/06/14
 * Time: 22.46
 */
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SportControllerTest extends WebTestCase{

    public function testCollectionSport()
    {
        $client = static::createClient();

        $client->request('GET', '/sports');
        $this->assertEquals('200',$client->getResponse()->getStatusCode());

    }

} 