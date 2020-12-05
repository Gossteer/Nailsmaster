<?php

use App\Master;
use App\MasterPoint;
use App\Portfolio;
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
        $portfolio = new Portfolio();
        $portfolio->login_instagram = 'Sososhka';
        $portfolio->description = 'Люблю ноготочки';
        $portfolio->save();

        $master = new Master();
        $master->portfolio_id = $portfolio->id;
        $master->confirmation = 1;
        $master->save();

        $user = new User();
        $user->email = "admin@admin";
        $user->password = bcrypt("123");
        $user->name = "Бокарев";
        $user->surname = "Стефан";
        $user->master_id = $master->id;
        $user->lastname = "Динисович";
        $user->phone_number = "+79264785354";
        $user->save();

        $masterPoint = new MasterPoint();
        $masterPoint->master_id = $master->id;
        $masterPoint->name = 'Дорого, придётся сосать';
        $masterPoint->latitude = 47.61733;
        $masterPoint->longitude = -122.1315288;
        $masterPoint->stasus = 1;
        $masterPoint->price = 50000000;
        $masterPoint->description = 'Буду делать хорошо и долго';
        $masterPoint->image = 'lol.page';

    }
}
