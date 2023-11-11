#!/bin/bash

if [ ! -f /var/www/html/.env ]; then
    cp /var/www/html/.env.example /var/www/html/.env
fi

if [ -f /var/www/html/composer.json ]; then
    if [ ! -d /var/www/html/vendor ]; then
        composer update
    fi
fi

if [ -f /var/www/html/package.json ]; then
    if [ ! -d /var/www/html/node_modules ]; then
        npm install
    fi
fi

chmod -R 777 /var/www/html/storage
chmod -R 777 /var/www/html/bootstrap/cache

cd /var/www/html/ && npm run build

php-fpm82

nginx -g "daemon off;"

