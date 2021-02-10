source $PWD/.env

$PHP_EXECUTOR composer.phar install --no-dev --no-progress
$PHP_EXECUTOR composer.phar dump-autoload --optimize
$PHP_EXECUTOR artisan migrate --force
$PHP_EXECUTOR artisan db:seed --force
$PHP_EXECUTOR artisan config:clear
$PHP_EXECUTOR artisan cache:clear
