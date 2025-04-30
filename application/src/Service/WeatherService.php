<?php

namespace App\Service;

use App\DTO\WeatherData;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;
use App\Exception\WeatherApiException;

class WeatherService
{
    private string $apiKey;
    private HttpClientInterface $httpClient;
    private LoggerInterface $logger;

    public function __construct(string $apiKey, HttpClientInterface $httpClient, LoggerInterface $logger)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
        $this->logger = $logger;
    }

    public function getWeather(string $city): WeatherData
    {
        $url = 'https://api.weatherapi.com/v1/current.json';

        try {
            $response = $this->httpClient->request('GET', $url, [
                'query' => [
                    'key' => $this->apiKey,
                    'q' => $city,
                    'lang' => 'ru'
                ]
            ]);

            $data = $response->toArray();

            if (isset($data['error'])) {
                throw new WeatherApiException($data['error']['message']);
            }

            $weather = new WeatherData(
                city: $data['location']['name'],
                country: $data['location']['country'],
                temperature: $data['current']['temp_c'],
                condition: $data['current']['condition']['text'],
                humidity: $data['current']['humidity'],
                windSpeed: $data['current']['wind_kph'],
                lastUpdated: $data['current']['last_updated'],
            );

            $this->logger->info('Weather retrieved', get_object_vars($weather));

            return $weather;
        } catch (\Exception $e) {
            $this->logger->error('Weather API error: ' . $e->getMessage());
            throw new WeatherApiException('Could not fetch weather data.');
        }
    }
}