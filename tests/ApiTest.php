<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use MatteoCourquin\Airbnb\Api;

class ApiTest extends TestCase
{
    public function testGetH2Elements(): void
    {
        $api = new Api();
        $h2Elements = $api->getH2Elements();

        $this->assertIsArray($h2Elements);
        $this->assertNotEmpty($h2Elements);
    }
}
