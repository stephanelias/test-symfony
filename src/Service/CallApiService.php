<?php

use Symfony\Component\HttpClient\HttpClient;

class CallApiService {


    /**
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     */
    public function getTitleName() {

        $client = HttpClient::create();
        $response = $client->request('GET', 'https://api.github.com/repos/symfony/symfony-docs');

        $statusCode = $response->getStatusCode();
// $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
// $contentType = 'application/json'
        $content = $response->getContent();
// $content = '{"id":521583, "name":"symfony-docs", ...}'

    }
}