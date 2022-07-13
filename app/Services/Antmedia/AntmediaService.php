<?php


namespace App\Services\Antmedia;


use App\Data\BroadcastData;
use App\Data\BroadcastDataBody;
use GuzzleHttp\Client;

class AntmediaService
{
    public function __construct(
        private Client $client,
    ) {}

    public function createBroadcast(BroadcastData $broadcastData)
    {
        $response = $this->client->post('/WebRTCApp/rest/v2/broadcasts/create', [
            'body' => $broadcastData->body->only('name', 'description')->toJson(),
        ]);

        return BroadcastDataBody::from(json_decode($response->getBody()->getContents()));
    }

    public function getPaginatedBroadcastList($offset, $size)
    {
        $response = $this->client->get("/WebRTCApp/rest/v2/broadcasts/list/{$offset}/{$size}");

        return BroadcastDataBody::collection(json_decode($response->getBody()->getContents(), true));
    }

    public function getBroadcast($streamId)
    {
        $response = $this->client->get("/WebRTCApp/rest/v2/broadcasts/{$streamId}");

        return BroadcastDataBody::from(json_decode($response->getBody()->getContents(), true));
    }

    public static function getKey(string $url)
    {
        $re = '/\/(\w+)$/m';

        preg_match_all($re, $url, $matches, PREG_SET_ORDER, 0);

        return $matches[0][1];
    }

    public static function getUrlWithoutKey(string $url)
    {
        $re = '/^(\w+\S+)\//m';

        preg_match_all($re, $url, $matches, PREG_SET_ORDER, 0);

        return $matches[0][0];
    }
}
