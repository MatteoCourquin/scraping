<?php

declare(strict_types=1);

namespace MatteoCourquin\Airbnb;

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class Api
{
    public function getH2Elements(): array
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://www.teamaxe.com/fr/11-casque-integral-moto');
        $html = $response->getContent();

        $crawler = new Crawler($html);
        $h2Elements = $crawler->filter('h2');

        $h2Array = [];
        foreach ($h2Elements as $h2Element) {
            $text = $h2Element->textContent;
            $h2Array[] = $text;
        }

        return $h2Array;
    }
}

$api = new Api();
$h2Elements = $api->getH2Elements();

foreach ($h2Elements as $h2Element) {
    echo $h2Element . "\n";
}
