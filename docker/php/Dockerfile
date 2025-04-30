FROM php:8.3-cli

WORKDIR /var/www/symfony

RUN apt-get update && apt-get install -y \
    unzip zip git curl libzip-dev libicu-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/symfony

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]