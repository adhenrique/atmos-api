FROM webdevops/php-nginx:7.4

WORKDIR /app
COPY . /app
COPY .env.example .env

ARG RDS_PASSWORD
ARG RDS_DB_NAME
ARG RDS_PORT
ARG RDS_HOSTNAME
ARG RDS_USERNAME

RUN echo ${RDS_PASSWORD} >> .env && \
    echo ${RDS_DB_NAME} >> .env && \
    echo ${RDS_PORT} >> .env && \
    echo ${RDS_HOSTNAME} >> .env && \
    echo ${RDS_USERNAME} >> .env

RUN composer clearcache && \
    composer install && \
    php artisan key:generate

RUN chown -R application:application /app && \
    find /app -type f -exec chmod 644 {} \; && \
    find /app -type d -exec chmod 755 {} \; && \
    chgrp -R application /app/storage /app/bootstrap/cache && \
    chmod -R ug+rwx /app/storage /app/bootstrap/cache

EXPOSE 80 443
