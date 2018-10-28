<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'patient';
        $role->description = 'Patients';
        $role->save();

        $role = new Role();
        $role->name = 'health_agent';
        $role->description = 'Health Agent';
        $role->save();

    }
}
