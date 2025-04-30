<?php

namespace Service;

use App\DTO\WeatherData;
use PHPUnit\Framework\TestCase;
use App\Service\WeatherService;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Psr\Log\NullLogger;

class WeatherServiceTest extends TestCase
{
    public function testGetWeatherSuccess()
    {
        // Мокируем ответ от HTTP клиента
        $mockResponse = $this->createMock(ResponseInterface::class);
        $mockResponse->method('toArray')->willReturn([
            'location' => [
                "name" => "London",
                "region" => "City of London, Greater London",
                "country" => "United Kingdom",
                "lat" => 51.5171,
                "lon" => -0.1062,
                "tz_id" => "Europe/London",
                "localtime_epoch" => 1746003855,
                "localtime" => "2025-04-30 10:04"
            ],
            'current' => [
                "temp_c" => 18.0,
                "temp_f" => 64.4,
                "is_day" => 1,
                'condition' => [
                    "text" => "Солнечно",
                    "icon" => "//cdn.weatherapi.com/weather/64x64/day/113.png",
                    "code" => 1000
                ],
                'humidity' => 60,
                'wind_kph' => 6.8,
                'last_updated' => '2025-04-30 10:00',
            ],
        ]);

        // Мокируем сам HttpClient
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient->method('request')->willReturn($mockResponse);

        // Создаем объект WeatherService
        $service = new WeatherService('fake-key', $httpClient, new NullLogger());
        $result = $service->getWeather('London');

        // Проверяем, что результат - объект WeatherData
        $this->assertInstanceOf(WeatherData::class, $result);
        $this->assertSame('London', $result->city);
        $this->assertEquals(18.0, $result->temperature);
    }
}