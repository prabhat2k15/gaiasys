<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## How to Setup
- Git clone the repo and go to that directory
- Change R/W permission of storage and bootstrap folder
    ``` sudo chmod -R 777 storage bootstrap ```
- Copy the .env.example to .env and change your DB credentials
- Migrate the migrations ``` php artisan migrate ```
- Run the Db Seeder to insert some random data for testing ``` php artisan db:seed ```
- Run the server ``` php artisan serve ```

## Flow of Project
You can run the project on the browser by typing ``` http://localhost:8000 ``` and register yourself as user and use the same ceredentials for getting the token via api.

## APIs
Postman collection along with the enviroment of the api is attached in the repo. Please find it as
- gaiasys.postman_collection.json
- gaiasys.postman_environment.json
Import the json file and enviroment file in postman and test the api. First hit the token api by providing credentials(You dint need to set the api token in the enviroment. It will be automatically set in the enviroment.). You can use the following credentials for fetching api token.
``` 
    username : admin1@gmail.com
    password : password

    username : admin2@gmail.com
    password : password
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contact

If you need help in setting up the porject please send an e-mail to Prabhat Kumar via [prabhat2k15@gmail.com](mailto:prabhat2k15@gmail.com). All questions/feedback/support will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
