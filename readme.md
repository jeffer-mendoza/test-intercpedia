## Install

## Settings
```
docker exec -ti app /bin/bash
```

### Dependency Installation
```
composer install 
cp .env.example .env
php artisan key:generate
```

### Permissions
```
mkdir storage
mkdir storage/framework
mkdir storage/framework/{views,cache,sessions}
mkdir storage/app/public
chown www-data:www-data storage/ -R
php artisan config:cache
php artisan storage:link
```

### Database migrations and seeds
```
php artisan migrate
php artisan db:seed
```
## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
