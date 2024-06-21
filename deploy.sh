php artisan optimize:clear
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
composer install --optimize-autoloader
ln -s ../storage/app/public public/storage
