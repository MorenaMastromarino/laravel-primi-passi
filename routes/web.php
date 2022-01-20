<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'name' => 'Morena',
        'paragraphs' => [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae metus id mauris venenatis fermentum eget vitae justo. Proin sed tincidunt diam. Proin nulla nisi, varius id luctus malesuada, scelerisque id leo. Sed at luctus metus. Aliquam a libero eget justo efficitur vehicula quis eu turpis. Aenean egestas ut velit nec consectetur. Curabitur id molestie augue. Donec vestibulum lacinia dictum. Proin et iaculis nulla.',
            'Vivamus erat ligula, vulputate sed mollis vitae, dapibus sit amet nunc. Donec scelerisque lobortis tortor, ut maximus leo mattis in. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
            'Etiam leo tortor, vestibulum vitae lacus sit amet, varius porttitor libero. Praesent quis luctus turpis.'
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
