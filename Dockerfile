# Robado de
# https://medium.com/geekculture/the-easiest-way-to-dockerize-your-laravel-application-94977fe2ed6d

FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer​ | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app



# COPY . .
# RUN composer install