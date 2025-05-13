<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/users', function () {
//     sleep(2);
    return inertia('Users', [
        'users' => User::all()->map(fn($user) => [
            'name' => $user->name
        ]),
    ]);
});

Route::get('/settings', function () {
    return inertia('Settings');
});

Route::post('/logout', function () {
    dd(request('foo'));
});
