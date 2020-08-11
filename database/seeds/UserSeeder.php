<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'son nguyen',
            'email' => 'son@gmail.com',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'lee nguyen',
            'email' => 'lee@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
