<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => 'admin1'.'@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => Str::random(10),
                'email' => 'admin2'.'@gmail.com',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
