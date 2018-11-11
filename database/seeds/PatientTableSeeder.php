<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{
    public function run()
    {
        $patient = new Patient();
        $patient->lastname = 'Son';
        $patient->firstname = 'Goku';
        $patient->dni = '11222333';
        $patient->email = 'hame@gmail.com';
        $patient->address = 'Distrito Este 439 (Montaña Paoz, Tierra)';
        $patient->phone = '0387-155247923';
        $patient->save();
    }
}
