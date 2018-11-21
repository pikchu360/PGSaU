<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'url'=>'app/images/slider/slider1.jpg',
            'name' => 'Dirección de salud Universitaria',
            'title'=>'Por un mejor pasar!',
            'description'=>'Fotos 2018',
            'users_id' => '1',
            //'priority'=>'1',
        ]);
        DB::table('images')->insert([
            'url'=>'app/images/slider/slider2.jpg',
            'name' => 'Dirección de salud Universitaria',
            'title'=>'Por un mejor pasar!',
            'description'=>'Fotos 2018',
            'users_id' => '1',
            //'priority'=>'1',
        ]);
        DB::table('images')->insert([
            'url'=>'app/images/slider/slider3.jpg',
            'name' => 'Dirección de salud Universitaria',
            'title'=>'Por un mejor pasar!',
            'description'=>'Fotos 2018',
            'users_id' => '1',
            //'priority'=>'2',
        ]);
        DB::table('images')->insert([
            'url'=>'app/images/slider/slider4.jpg',
            'name' => 'Dirección de salud Universitaria',
            'title'=>'Por un mejor pasar!',
            'description'=>'Fotos 2018',
            'users_id' => '1',
            //'priority'=>'3',
        ]);
        DB::table('images')->insert([
            'url'=>'app/images/slider/slider5.jpg',
            'name' => 'Dirección de salud Universitaria',
            'title'=>'Por un mejor pasar!',
            'description'=>'Fotos 2018',
            'users_id' => '1',
            //'priority'=>'3',
        ]);
    }
}
