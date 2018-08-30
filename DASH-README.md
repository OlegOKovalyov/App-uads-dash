CRUD TUTORIAL
-------------
Link: https://appdividend.com/2018/02/23/laravel-5-6-crud-tutorial/
Author: Krunal

In this tutorial, I will illustrate simple insert, update and delete application 
in Laravel 5.6 project.

We are going to make a simple system in which, we can register for the passport. 
It is a simple Laravel 5.6 crud application for starters. No big deal at all.

1. $ composer create-project --prefer-dist laravel/laravel passportappointmentsystem


2. 	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=laravel_app
	DB_USERNAME=root
	DB_PASSWORD=Rootuads270818

3. $ php artisan migrate

It will build two tables in your database:
- users
- password_requests

Начинаем здесь
--------------

4. Construct a model, migration file and controller for our Passports table

$ php artisan make:model Passport -m

It will create two files:
- /app/Passport.php model
- /database/migrations/create_passports_table migration file.

$ php artisan make:model Uadsusers -m

Model created successfully.
Created Migration: 2018_08_30_084012_create_uadsusers_table

It will create two files:
- /app/Uadsusers.php model
- /database/migrations/create_uadsusers_table migration file.

5. We need to create Schema for the passports table. So navigate to 
Laravel  >>  database  >>  migrations  >>  create_passports_table.

// create_passports_table:
 public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('date');
            $table->string('email')->unique();
            $table->integer('number');
            $table->string('office');
            $table->string('filename');
            $table->timestamps();
        });
    }

// create_uadsusers_table:
        Schema::create('passports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('name');
            // $table->integer('date');
            $table->string('email')->unique();
            $passpword->string('password');
            $role->string('role');
            // $table->integer('number');
            // $table->string('office');
            // $table->string('filename');
            $table->timestamps();
        });    

6. Now, migrate the table by the following command:

$ php artisan migrate

7. Build view file to add the Information in the database: /resources/views/create.blade.php

После этого сможем увидеть форму для записи данных в таблицу 'passports'.

8. Create one controller and route

$ php artisan make:controller PassportController --resource

It will create one controller file called /app/Http/Controllers/PassportController.php and 
It has all the CRUD Functions, we need to inquire.

9. We register one route in /routes/web.php file:

// web.php
Route::resource('passports','PassportController');

Чтобы получить список всех маршрутов нашего роутера можно вызвать команду:

$ php artisan route:list

10. Далее в нашем контроллере /app/Http/Controllers/PassportController.php создаем все необходимые 
нам методы: create(), store(), index(), edit(), update(), remove().

Кроме того для отображения нужных форм и кнопок создаем представления:
- /resources/views/index.blade.php - форма для отображения таблицы 'passports',
- /resources/views/edit.blade.php - форма для возможности редактировани отдельной строки таблицы 'passports'