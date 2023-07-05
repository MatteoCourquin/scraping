<?php

use MatteoCourquin\Airbnb\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
  public function testGetAirbnbName()
  {
    $api = new Api();
    $this->assertEquals('Locations de vacances, logements, expériences et lieux - Airbnb', $api->getAirbnbName());
  }
}
