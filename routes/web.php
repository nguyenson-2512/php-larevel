<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    // return view('welcome');
    //Auth::logout();
    $user = Auth::user();
    $right = Hash::check('123', $user->password);
    dd($right);

    // dd($user->name);
    // return view('testBlade');
});

Route::get('/test', function () {
    // $student = [
    //     ['name' => 'son', 'id' => 1],
    //     ['name' => 'nguyen', 'id' => 2]
    // ];
    // return view('about.gift', ['student' => $student]);
    return '123';
})->middleware('myJWT');

Route::post('/gift', function () {
    csrf_token();
    return view('about.gift');
});

Route::get('/json', function () {
    // $users = User::with('posts')->get();
    // return response()->json([
    //     'users' => $users
    // ]);

    //$users = User::query()->where('id',1)->get();
    // return response()->json([
    //     'users' => $users
    // ]);

    // $users = User::select('name','email','password')->where('id',2)->where('id',1)
    //             ->first();
    // return response()->json([
    //     'users' => $users
    // ]);

    $users = User::select('name','email','id')->orderBy('id','desc')->take(1)->get();
    $users = User::select('name','email','id')->paginate(1);
    // phan trang truy cap bang cach nhap tren url ?page=2
        return response()->json([
        'users' => $users
    ]);
});
// Route::get('/users', function () {
//     $users = User::select('name','email','id')->paginate(1);
//     return view('users',['users'=>$users]);
// });
Route::get('/users/{id}', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@show')->where(['id' => '\d+']);
Route::view('/users/new', 'users.new');
Route::post('users/create', 'UsersController@create');
Route::view('/login','login')->name('login');
Route::post('/login','AuthController@login');

//chay ham index trong http/controller

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