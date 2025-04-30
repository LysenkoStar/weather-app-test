<?php

namespace App\DTO;

class WeatherData
{
    public function __construct(
        public readonly string $city,
        public readonly string $country,
        public readonly float $temperature,
        public readonly string $condition,
        public readonly int $humidity,
        public readonly float $windSpeed,
        public readonly string $lastUpdated,
    ) {}
}