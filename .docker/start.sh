#!/bin/bash
set -e

echo "Running migrations and seeders..."
php artisan migrate --seed --force

echo "Clearing caches..."
php artisan optimize:clear

echo "Starting Apache..."
exec apache2-foreground
