<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\UserCreateRequest;

class UsersController extends Controller
{
    public function index($id){
        //die($currentPage);
        $users = User::paginate(1,['name'],'id');
        //page , truong name,muon lay het data dung *, 2 la currentPage
        return response()->json([
            'users' => $users
        ]);
    }

    public function show($id) {
        $users = User::with('posts')->find($id);
        //find tim ra id
        return response()->json([
            'users' => $users
        ]);
    }

    public function create(UserCreateRequest $request) {
        // $data = $request->all();
        // $name = $request->input('name');
        // return response()->json([
        //     'data' => $data,
        //     'name' => $name
        // ]);

        // $user = User::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'password' => Hash::make('123456')
        // ]);

        $avatar = $request->file('avatar');
        $fileName = $avatar->getClientOriginalName();
        $avatar->move('test-imgs', $fileName);

        return redirect('/users');
    }

    public function login(Request $request) {
        //$email = $request->input('email');
        // dd($email);
        // $password = $request->input('password');


        $credentials = $request->only('email', 'password');
        $user = Auth::attempt($credentials);

        // $name = $_POST['email'];

        // echo $name;

        //dd($user); => xac thuc thanh cong/false se return ve boolean

        return redirect('/');
    }
}
