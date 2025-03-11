
setup: install prepare

setup-run: setup run

install:
	cp .env.example .env
	composer install
	npm i

prepare:
	php artisan key:generate
	touch database/database.sqlite
	php artisan migrate
	make seed

seed:
	php artisan db:seed

run:
	composer run dev
