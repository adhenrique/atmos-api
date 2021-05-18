#!/bin/bash
if [ ! -f /var/www/html/.env ] ; then
    cp /var/www/html/.env.example /var/www/html/.env
else
   OUTPUT="$(egrep "^APP_KEY=(.+)$" /var/www/html/.env)"
   if [ -z "$OUTPUT" ]; then
        php  /var/www/html/artisan key:generate
    fi
fi
OUTPUT_BASE="$(egrep "^RDS_=(.+)$" /var/www/html/.env)"
if [ -z "$OUTPUT_BASE" ]; then
    cat /opt/elasticbeanstalk/deployment/env | grep RDS_ >> /var/www/html/.env
fi
