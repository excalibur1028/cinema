<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstName' => 'Jerome',
            'admin'     =>  1,
            'email'     => 'admin@gmail.com',
            'password'  => '123456'
        ]);
    }
}
