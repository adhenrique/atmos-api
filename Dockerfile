FROM webdevops/php-nginx:7.4

WORKDIR /app
COPY . /app
COPY .env.example .env

RUN composer clearcache && \
    composer install && \
    php artisan key:generate

RUN chown -R application:application /app && \
    find /app -type f -exec chmod 644 {} \; && \
    find /app -type d -exec chmod 755 {} \; && \
    chgrp -R application /app/storage /app/bootstrap/cache && \
    chmod -R ug+rwx /app/storage /app/bootstrap/cache

EXPOSE 80 443
