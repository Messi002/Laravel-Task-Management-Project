

install registration and logging functionality by Breeze
composer require laravel/breeze --dev

then install breeze
php artisan breeze:install


php artisan serve  --> serve
npm run dev        --> react
php artisan tinker --> tinker
                   --> artisan

add mustverify to user.php

then create migration files
then configure factories for fake data structure(how it will look like) 

next database seeders
where we now instantiate for fake data
php artisan migrate:refresh --seed

next project controllers
php artisan make:controller ProjectController --model=Project --requests --resource

modify routes
php artisan route:list

next create projectresource and modify controller
php artisan make:resource ProjectResource









   