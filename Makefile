
setup: install prepare

install:
	cp .env.example .env
	composer install

prepare:
	php artisan key:generate
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed

run:
	php artisan serve
