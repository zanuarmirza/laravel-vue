# Vue App inside Laravel 

simple step to run this project
make .env for laravel project
```
cp .env.example .env
```
generate key for laravel app
```
php artisan key:generate
```
then install dependencies
```
composer install
php artisan serve
```

## Dev

install node dependency on the root of project 
dir: {root} / root project laravel
```
npm install
```
___
to serve vue app using dev server
first, change dir to `client`
```
cd client
```
install node dependency
```
npm install
```
make .env for vue project
```
cp .env.example .env
```
to serve vue app
```
npm run serve
```

to build production
```
npm run build
```


