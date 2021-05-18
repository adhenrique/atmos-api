#!/bin/bash

OUTPUT_BASE="$(egrep "^RDS_=(.+)$" /var/www/html/.env)"
if [ -z "OUTPUT_BASE" ]; then
    cat /opt/elasticbeanstalk/deployment/env | grep RDS_ >> /var/www/html/.env
fi
