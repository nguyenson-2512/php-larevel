<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;

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
    return view('welcome');
});

Route::get('/test', function () {
    $student = [
        ['name' => 'son', 'id' => 1],
        ['name' => 'nguyen', 'id' => 2]
    ];
    return view('about.gift', ['student' => $student]);
});

Route::post('/gift', function () {
    csrf_token();
    return view('about.gift');
});

Route::get('/json', function () {
    // $users = User::with('posts')->get();
    // return response()->json([
    //     'users' => $users
    // ]);
    $users = User::query()->where('id',1)->get();
    return response()->json([
        'users' => $users
    ]);
});

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         return view('about.gift');
//     });
// });
// 12345678
// 12345678


// sudo rm /usr/local/mysql &&
// sudo rm -rf /usr/local/var/mysql &&
// sudo rm -rf /usr/local/mysql* &&
// sudo rm ~/Library/LaunchAgents/homebrew.mxcl.mysql.plist &&
// sudo rm -rf /Library/StartupItems/MySQLCOM &&
// sudo rm -rf /Library/PreferencePanes/My*

// https://dev.mysql.com/downloads/mysql/
// export PATH=/usr/local/mysql/bin:$PATH
// ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '12345678';