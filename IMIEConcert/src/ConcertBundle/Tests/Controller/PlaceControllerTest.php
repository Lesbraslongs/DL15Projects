<?php

namespace ConcertBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlaceControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/places/');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/places/add');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/places/add');
    }

    public function testPlanning()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/places/{id}');
    }

}
