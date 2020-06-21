## Barebones Laravel 7 w/ JWT Auth

#### Repo Description
This repo contains a bare laravel installation with a few minor adjustments, along with Tymon's JWT v1.0 package installed and configured.
This will allow you to get up and running with a barebones API.

#### Installation Steps
!) composer install

2) php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
   - Generates the JWT config file needed by the JWT auth package
   
3) php artisan jwt:secret
   - Initializes the JWT secret key

##### Note: See [https://jwt-auth.readthedocs.io/en/develop/laravel-installation/](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/) for more info regarding the JWT Auth package
