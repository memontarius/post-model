

Подготовить
```sh
cp .env.example .env
composer install
npm i
php artisan key:generate
php artisan migrate
php artisan db:seed
composer run dev
```
Запустить
```sh
composer run dev
```

или 
```sh
make setup
make run
```
