
Подготовить
```sh
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
```
Запустить
```sh
php artisan serve
```

Или
```sh
make setup
make run
```
