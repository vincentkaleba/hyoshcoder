#!/bin/bash
set -e

echo "Running migrations and seeders..."
php artisan migrate --seed --force

echo "Clearing caches..."
php artisan optimize:clear

chown www-data:www-data /var/www/html/database/database.sqlite
chown www-data:www-data /var/www/html/database

echo "Starting Apache..."
exec apache2-foreground
