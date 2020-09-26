<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\EmployeeDetails;
use App\EmployeeOfficialDetails;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(EmployeeDetails::class, function (Faker $faker) {
	 $age = rand(3, 100);
    return [
        'emp_name' => $faker->name,
        'emp_age'=>$age,
       'emp_mobile' => $faker->phoneNumber,
        'emp_email' => $faker->unique()->safeEmail,
       
    ];
});

$factory->define(EmployeeOfficialDetails::class, function (Faker $faker) {
	  $salary=mt_rand(1000,9999);
	  return [
	  	'emp_id'=>$faker->numberBetween($min=1,$max=10),
        'emp_salary' => $salary,
        'emp_department'=>Str::random(5),
       'emp_designation' =>Str::random(8),
       
    ];
});
