<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_health_agent = Role::where('name', 'health_agent')->first();
        $role_patient = Role::where('name', 'patient')->first();
    
        //Un Administrador.
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin123');
        $user->role='admin';
        $user->save();
        $user->roles()->attach($role_admin);

        //Un Paciente.
        $user = new User();
        $user->name = 'Sanitary';
        $user->email = 'sanitary@gmail.com';
        $user->password = bcrypt('sanitary');
        $user->role='health_agent';
        $user->save();
        $user->roles()->attach($role_health_agent);

        //Un Agente sanitario.
        $user = new User();
        $user->name = 'Patient';
        $user->email = 'patient@gmail.com';
        $user->password = bcrypt('patient');
        $user->role='patient';
        $user->save();
        $user->roles()->attach($role_patient);
    }
}
