<?php

use Domain\Cart\Actions\InitializeCartAction;
use Domain\Customer\Customer;
use Domain\User\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('welcome');
   // User::factory()->create();

//    Customer::create([
//        'name' => 'John Doe',
//        'email' => 'lY5x7@example.com',
//        'user_id' => 1,
//        'street' => '123 Main St',
//        'number' => '123',
//        'postal' => '12345',
//        'city' => 'New York',
//        'country' => 'USA',
//    ]);
$customer = Customer::first();

$action = app(InitializeCartAction::class);
$action->execute($customer);

});
