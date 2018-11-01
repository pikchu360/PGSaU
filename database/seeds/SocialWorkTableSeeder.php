<?php

use Illuminate\Database\Seeder;

class SocialWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social_works  = [['name' => 'BIENESTAR SALUD'],
        ['name' => 'GALENO'],
        ['name' => 'IPS'],
        ['name' => 'MEDICUS'],
        ['name' => 'OSDE'],
        ['name' => 'OSUNSA'],
        ];
        DB::table('social_works')->insert($social_works);
    }
}
