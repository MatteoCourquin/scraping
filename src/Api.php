<?php

namespace MatteoCourquin\Airbnb;

class Api
{
    public function getAirbnbName()
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://www.airbnb.fr/');
        $html = $response->getContent();

        $crawler = new Crawler($html);
        $title = $crawler->filter('title')->text();

        return $title;
    }
}

?>