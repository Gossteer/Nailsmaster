<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = "admin@admin";
        $user->password = bcrypt("123");
        $user->name = "Бокарев";
        $user->surname = "Стефан";
        $user->lastname = "Динисович";
        $user->phone_number = "+79264785354";
        $user->save();
    }
}
