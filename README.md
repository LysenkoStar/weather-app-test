# Symfony Weather App 🌤️

Простое приложение на Symfony для отображения текущей погоды в указанном городе. Данные получаются с помощью [WeatherAPI](https://www.weatherapi.com/).

---

## ⚙️ Установка и настройка

```bash
git clone https://github.com/LysenkoStar/weather-app-test

cd weatherapp/application

composer install

.env указать правильный WEATHER_API_KEY

docker-compose up --build -d     - собрать и запустить контейнеры

php bin/phpunit - запустить тест кейсы
```

Приложение [WeatherApp](http://localhost:8000/)

## 📦 Структура

1. WeatherService — сервис для получения данных с API и логирования;

2. WeatherController — контроллер для отображения формы и результата;

3. DTO/WeatherData.php — объект передачи данных (DTO) вместо массива;

4. templates/weather/index.html.twig — форма ввода города;

5. templates/weather/show.html.twig — отображение данных о погоде.

6. tests/Service/WeatherServiceTest.php - тест метода для получения данных о погоде в сервисе WeatherService

## 💡 Описание
DTO (Data Transfer Object)
Вместо возврата массива сервис возвращает строго типизированный объект WeatherData

Обработка ошибок
Все ошибки (например, если город не найден) перехватываются и показываются пользователю;
Ошибки логируются через Monolog, уровень error.

Twig и TailwindCSS
Используется базовый шаблон base.html.twig с TailwindCSS;
