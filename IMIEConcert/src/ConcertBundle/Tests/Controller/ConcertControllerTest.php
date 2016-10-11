<?php

namespace ConcertBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConcertControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/concerts/add');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/concerts');
    }

    public function testCancel()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/concerts/cancel/{id}');
    }

    public function testActive()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/concerts/active/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/concerts/del/{id}');
    }

}
