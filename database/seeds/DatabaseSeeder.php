<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(MenuAdminTableSeeder::class);
        $this->call(MenuUserTableSeeder::class);
        $this->call(MenuHealthAgentTableSeeder::class);
        $this->call(PatientTableSeeder::class);
        $this->call(SocialWorkTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(LicenseTableSeeder::class);
    }
}
