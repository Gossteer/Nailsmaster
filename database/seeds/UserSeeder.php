<?php

use App\Master;
use App\MasterPoint;
use App\Portfolio;
use App\User;
use App\Admin;
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
        $portfolio->login_instagram = 'login_instagram';
        $portfolio->description = 'description';
        $portfolio->save();

        $master = new Master();
        $master->portfolio_id = $portfolio->id;
        $master->confirmation = 1;
        $master->save();

        $admin = new Admin();
        $admin->save();

        $user = new User();
        $user->email = "admin@admin";
        $user->password = bcrypt("123");
        $user->name = "Бокарев";
        $user->surname = "Стефан";
        $user->admin_id = $admin->id;
        $user->master_id = $master->id;
        $user->lastname = "Динисович";
        $user->phone_number = "+79264785354";
        $user->save();

        $masterPoint = new MasterPoint();
        $masterPoint->master_id = $master->id;
        $masterPoint->name = 'Лучшие ноготки (Стефан попросил)';
        $masterPoint->latitude = 47.61733;
        $masterPoint->longitude = -122.1315288;
        $masterPoint->stasus = 1;
        $masterPoint->address = "Жуковский, улица Новых";
        $masterPoint->price = 50000000;
        $masterPoint->description = 'Выбирай нас';
        $masterPoint->image = 'images.page';
        $masterPoint->save();

        $portfolio = new Portfolio();
        $portfolio->login_instagram = 'antonNoInstagram';
        $portfolio->description = 'Стаж работы овер 100лет';
        $portfolio->save();

        $master = new Master();
        $master->portfolio_id = $portfolio->id;
        $master->confirmation = 1;
        $master->save();

        $user = new User();
        $user->email = "admin1@admin";
        $user->password = bcrypt("123");
        $user->name = "Антон";
        $user->surname = "Игнатьев";
        $user->master_id = $master->id;
        $user->lastname = "Александрович";
        $user->phone_number = "+79256785354";
        $user->save();

        $masterPoint = new MasterPoint();
        $masterPoint->master_id = $master->id;
        $masterPoint->name = 'Не самые лучшие, но сойдёт';
        $masterPoint->latitude = 49.61733;
        $masterPoint->longitude = -120.1315288;
        $masterPoint->stasus = 1;
        $masterPoint->address = "Москва, улица Новых черёмушков";
        $masterPoint->price = 6000000;
        $masterPoint->description = 'Выбирай нас';
        $masterPoint->image = 'images.page';
        $masterPoint->save();

        $masterPoint = new MasterPoint();
        $masterPoint->master_id = $master->id;
        $masterPoint->name = 'Красный лак';
        $masterPoint->latitude = 45.61733;
        $masterPoint->longitude = -125.1315288;
        $masterPoint->stasus = 1;
        $masterPoint->address = "Домодедов";
        $masterPoint->price = 40000;
        $masterPoint->description = 'Ваш лучший выбор';
        $masterPoint->image = 'images.page';
        $masterPoint->save();

    }
}
