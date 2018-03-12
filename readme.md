<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Foush Helpers
-- login & register UI for the website
 ```php
- php artisan make:auth
```
- `php artisan make:auth` command will create all of the views you need for authentication and place them in the resources/views/auth directory.

--Resoures in controller and routes
```php
    Route::resource('photo', 'PhotoController');
```

| Verb      |         Path        | Action | Route Name    |
|-----------|:-------------------:|-------:|---------------|
| GET       |        /photo       |  index | photo.index   |
| GET       |    /photo/create    | create | photo.create  |
| POST      |        /photo       |  store | photo.store   |
| GET       | /photo/{photo}      | show   | photo.show    |
| GET       | /photo/{photo}/edit | edit   | photo.edit    |
| PUT/PATCH | /photo/{photo}      | update | photo.update  |
| DELETE    | /photo/{photo}      | delete | photo.destroy |



  
## Some Commands Used            
    
* #### Create controller with helper function 
    ```php
    >    php artisan make:controller MeetingController --resourse
    >    php artisan make:controller RegistrationController --resourse
    >    php artisan make:controller AuthController 
* #### Create Model with Migrations 
     ```php
        #To make model and migration tables
            >php artisan make:model Meeting -m
        #To migrate the tables to the DB
            >php artisan migrate 
    ```    

* #### Input Validation
```php
$this->validate($request,[	
		//$request is the collected data sent to the route
	‘Title’ => ‘required|max:120’, 			//rules
	‘content’=>’required’
]);
```

## Support Materials

### [Avaliable validation rules](https://laravel.com/docs/5.6/validation#available-validation-rules)
### [JWT Installation](https://github.com/tymondesigns/jwt-auth/wiki/Installation)
### [JWT Create token](https://github.com/tymondesigns/jwt-auth/wiki/Creating-Tokens)
## issues solutions
### [Generate random key for JWT](https://github.com/tymondesigns/jwt-auth/issues/1425)
### [Non-static method Tymon\JWTAuth\JWTAuth::attempt()](https://github.com/tymondesigns/jwt-auth/issues/182)
    
    
    
            
            
            
            
            
            
                        
