FROM webdevops/php-apache:7.4

WORKDIR /app
COPY . /app
COPY .env.example .env

RUN composer clearcache && \
    composer install && \
    php artisan key:generate

EXPOSE 80
