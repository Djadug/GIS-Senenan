#!/bin/bash
set -e

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Cache config and routes
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache
echo "Starting Apache..."
apache2-foreground
