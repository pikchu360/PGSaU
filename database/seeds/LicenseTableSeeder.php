<?php

use Illuminate\Database\Seeder;
use App\License;

class LicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lic = new License();
        $lic->id = '1';
        $lic->name = 'Medica';
        $lic->description = 'Por enfermedad o discapacidad.';
        $lic->days = '3';
        $lic->save();

        $lic = new License();
        $lic->id = '2';
        $lic->name = 'Personal';
        $lic->description = 'Razones personales o particulares. (2 por mes, 12 anuales)';
        $lic->days = '1';
        $lic->save();

        $lic = new License();
        $lic->id = '3';
        $lic->name = 'Embarazo';
        $lic->description = 'A partir del parto. (Hasta 30 días)';
        $lic->days = '30';
        $lic->save();

        $lic = new License();
        $lic->id = '4';
        $lic->name = 'Duelo';
        $lic->description = 'Por fallecimiento de algún conyugue o familiar';
        $lic->days = '7';
        $lic->save();

        $lic = new License();
        $lic->id = '5';
        $lic->name = 'Matrimonio';
        $lic->description = 'Casamiento civil';
        $lic->days = '7';
        $lic->save();

        $lic = new License();
        $lic->id = '6';
        $lic->name = 'Misión Oficial';
        $lic->description = 'Por viajes a eventos de formación. (Hasta 30 días)';
        $lic->days = '30';
        $lic->save();
    }
}
