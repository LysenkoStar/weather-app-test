<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\WeatherService;

class WeatherController extends AbstractController
{
    #[Route('/', name: 'weather_index')]
    public function index(): Response
    {
        return $this->render('weather/index.html.twig');
    }


    #[Route('/weather', name: 'weather_show')]
    public function show(Request $request, WeatherService $weatherService): Response
    {
        $city = $request->query->get('city', 'London');

        try {
            $weather = $weatherService->getWeather($city);

            return $this->render('weather/show.html.twig', ['weather' => $weather, 'error' => null]);
        } catch (\Throwable $e) {
            return $this->render('weather/show.html.twig', ['weather' => null, 'error' => $e->getMessage()]);
        }
    }
}