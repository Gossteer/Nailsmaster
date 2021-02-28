<?php

use App\Master;
use App\MasterPoint;
use App\Portfolio;
use App\User;
use App\Admin;
use App\CategoryNails;
use App\Favorite;
use App\NailsJobs;
use App\Recording;
use App\RecordingTime;
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

        // $portfolio = new Portfolio();
        // $portfolio->login_instagram = 'login_instagram';
        // $portfolio->description = 'description';
        // $portfolio->save();

        // $master = new Master();
        // $master->portfolio_id = $portfolio->id;
        // $master->image = 'public/images/master/manikyur_ombre.png';
        // $master->status = 1;
        // $master->save();

        // $admin = new Admin();
        // $admin->save();

        // $user = new User();
        // $user->email = "admin@admin.com";
        // $user->password = bcrypt("123456789");
        // $user->name = "Бокарев";
        // $user->surname = "Стефан";
        // $user->admin_id = $admin->id;
        // $user->master_id = $master->id;
        // $user->lastname = "Динисович";
        // $user->phone_number = "+79264785354";
        // $user->save();

        // $masterPoint = new MasterPoint();
        // $masterPoint->master_id = $master->id;
        // $masterPoint->name = 'Лучшие ноготки (Стефан попросил)';
        // $masterPoint->latitude = 47.61733;
        // $masterPoint->longitude = -122.1315288;
        // $masterPoint->status = 1;
        // $masterPoint->address = "Жуковский, улица Новых";
        // $masterPoint->description = 'Выбирай нас';
        // $masterPoint->image = 'public/images/master/manikyur_ombre.png';
        // $masterPoint->save();

        // $category_nail = new CategoryNails();
        // $category_nail->name = 'Длинные';
        // $category_nail->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 400000;
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->name = 'Длинные';
        // $nails_job->description = 'Чёрные, красивые ногти';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->status = 1;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->instagram ='asdasd';
        // $nails_job->latitude = 29.29;
        // $nails_job->longitude = 245.67;
        // $nails_job->address ='sadasd';
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->instagram ='asdasd';
        // $nails_job->latitude = 29.29;
        // $nails_job->longitude = 245.67;
        // $nails_job->address ='sadasd';
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 400000;
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->name = 'Длинные';
        // $nails_job->description = 'Чёрные, красивые ногти';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->status = 1;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->instagram ='asdasd';
        // $nails_job->latitude = 29.29;
        // $nails_job->longitude = 245.67;
        // $nails_job->address ='sadasd';
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/4435345.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->instagram ='asdasd';
        // $nails_job->latitude = 29.29;
        // $nails_job->longitude = 245.67;
        // $nails_job->address ='sadasd';
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/4435345.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/images.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/4435345.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/4435345.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/images.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/images.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();


        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/unnamed.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/9e1c2ca654405de31b8446eb965d05f2.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/unnamed.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/9e1c2ca654405de31b8446eb965d05f2.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $category_nail = new CategoryNails();
        // $category_nail->name = 'Короткие';
        // $category_nail->save();

        // $portfolio = new Portfolio();
        // $portfolio->login_instagram = 'antonNoInstagram';
        // $portfolio->description = 'Стаж работы овер 100лет';
        // $portfolio->save();

        // $master = new Master();
        // $master->image = 'public/images/master/manikyur_ombre.png';
        // $master->portfolio_id = $portfolio->id;
        // $master->status = 1;
        // $master->save();

        // $user = new User();
        // $user->email = "admin1@admin.com";
        // $user->password = bcrypt("123456789");
        // $user->name = "Антон";
        // $user->surname = "Игнатьев";
        // $user->master_id = $master->id;
        // $user->lastname = "Александрович";
        // $user->phone_number = "+79256785354";
        // $user->save();

        // $masterPoint = new MasterPoint();
        // $masterPoint->master_id = $master->id;
        // $masterPoint->name = 'Не самые лучшие, но сойдёт';
        // $masterPoint->latitude = 49.61733;
        // $masterPoint->longitude = -120.1315288;
        // $masterPoint->status = 1;
        // $masterPoint->address = "Москва, улица Новых черёмушков";
        // $masterPoint->description = 'Выбирай нас';
        // $masterPoint->image = 'public/images/master/19449275071578985154.jpg';
        // $masterPoint->save();

        // $recording_time = new RecordingTime();
        // $recording_time->time = date('Y-m-d H:i:s');
        // $recording_time->master_point_id = $masterPoint ->id;
        // $recording_time->save();

        // $user = new User();
        // $user->email = "user@user.com";
        // $user->password = bcrypt("123456789");
        // $user->name = "Алексадра";
        // $user->surname = "Орешкина";
        // $user->lastname = "Антоновна";
        // $user->phone_number = "+79264785355";
        // $user->save();


        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $favorite = new Favorite();
        // $favorite->user_id = $user->id;
        // $favorite->nails_jobs_id = $nails_job->id;
        // $favorite->save();

        // $favorite = new Favorite();
        // $favorite->user_id = $user->id;
        // $favorite->master_point_id = $masterPoint->id;
        // $favorite->save();

        // $user = new User();
        // $user->email = "user1@user1.com";
        // $user->password = bcrypt("123456789");
        // $user->name = "Человек";
        // $user->surname = "Клиентович";
        // $user->phone_number = "+79264784355";
        // $user->save();

        // $favorite = new Favorite();
        // $favorite->user_id = $user->id;
        // $favorite->nails_jobs_id = $nails_job->id;
        // $favorite->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/1525686794_kvadrat.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $recording = new Recording();
        // $recording->user_id = $user->id;
        // $recording->nails_jobs_id = $nails_job->id;
        // $recording->recording_time_id = $recording_time->id;
        // $recording->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие';
        // $nails_job->image = 'public/images/master/novogodnego_manikyura.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->status = 1;
        // $nails_job->name = 'Короткие';
        // $nails_job->image = 'public/images/master/vertical_full.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/1525686794_kvadrat.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 400000;
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->name = 'Длинные';
        // $nails_job->description = 'Чёрные, красивые ногти';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->status = 1;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/4435345.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/4435345.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/images.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/12344444.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/images.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/5ca4c31b6e834197161028.jpeg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();


        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие5';
        // $nails_job->image = 'public/images/master/unnamed.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие4';
        // $nails_job->image = 'public/images/master/9e1c2ca654405de31b8446eb965d05f2.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 2340000;
        // $nails_job->name = 'Короткие3';
        // $nails_job->image = 'public/images/master/manikyur_ombre.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23.50;
        // $nails_job->name = 'Короткие2';
        // $nails_job->image = 'public/images/master/unnamed.jpg';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();

        // $nails_job = new NailsJobs();
        // $nails_job->price = 23000;
        // $nails_job->name = 'Короткие1';
        // $nails_job->image = 'public/images/master/9e1c2ca654405de31b8446eb965d05f2.png';
        // $nails_job->description = 'Для детишек';
        // $nails_job->category_nail_id = $category_nail->id;
        // $nails_job->master_point_id = $masterPoint->id;
        // $nails_job->status = 1;
        // $nails_job->save();


    }
}
