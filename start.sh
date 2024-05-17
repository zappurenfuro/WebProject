#!/bin/sh

# Run Laravel database migrations
php artisan migrate --force

# Cache the configuration
php artisan config:cache

# Cache the routes
php artisan route:cache

# Start the PHP-FPM server
php-fpm
