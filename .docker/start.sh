#!/bin/bash
set -e

echo "Running migrations..."
php artisan migrate --force

echo "Clearing caches..."
php artisan optimize:clear

echo "Starting Apache..."
exec apache2-foreground
