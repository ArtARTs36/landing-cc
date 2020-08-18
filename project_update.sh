git pull
php7.3 composer.phar install --no-dev --no-progress
php7.3 composer.phar dump-autoload --optimize
php7.3 artisan migrate --force
php7.3 artisan config:clear
php7.3 artisan cache:clear
