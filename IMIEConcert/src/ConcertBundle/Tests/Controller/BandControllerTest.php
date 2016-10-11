<?php

namespace ConcertBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BandControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bands/');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bands/del/{id}');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bands/add');
    }

    public function testPlanning()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bands/{id}');
    }

}
