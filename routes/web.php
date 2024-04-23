<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'index';
});

Route::get('/8000/list-menu', function () {
    return 'ini adalah halaman yang menampilkan semua menu yang ada di Cafe Amandemy';
});

Route::get('/8000/list-menu/{makanan}/{id}', function ($makanan,$id) 
{
    $makanan = "bakso";
    $id = 8000;
    return 'anda memilih makanan '. $makanan.' dengan harga '. $id;
});
Route::get('/8000/list-menu/get-all-data', function () {
    return response()->json([
        'info' => 'Data berhasil didapatkan',
        'data' => [
            [
                'makanan' => 'Soto Mie',
                'harga' => 8000
            ],
            [
                'makanan' => 'Bakso Malang',
                'harga' => 13000
            ],
            [
                'makanan' => 'Ketoprak',
                'harga' => 15000
            ]
        ]
    ]);
});

route::get('/response-json',function (){
    return response()->json([
        'info' => 'Data berhasil didapatkan',
        'data' => 'Data berhasil'
    ]);
});