<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Menu Principal (Raiz)	
		$m1 = factory(Menu::class)->create([
			'etiqueta' => 'Inicio',
			'pagina' => 'home',
			'padre' => 0,
			'orden' => 0,
			'role' => 'patient',
		]);
				
		$m2 = factory(Menu::class)->create([
			'etiqueta' => 'Turnos',
			'pagina' => 'shifts',
			'padre' => 0,
			'orden' => 1,
			'role' => 'patient',
		]);
			
		$m3 = factory(Menu::class)->create([
			'etiqueta' => 'Novedades',
			'pagina' => 'news',
			'padre' => 0,
			'orden' => 2,
			'role' => 'patient',
		]);

		$m4 = factory(Menu::class)->create([
			'etiqueta' => 'Mas',
			'pagina' => 'more',
			'padre' => 0,
			'orden' => 3,
			'role' => 'patient',
		]);		

    	//Sub-Menus nivel 1 (Hijos de Novedades)
		factory(Menu::class)->create([
			'etiqueta' => 'O.Sociales Asociadas',
			'pagina' => 'social_works',
			'padre' => $m3->id,
			'orden' => 0,
			'role' => 'patient',
		]);
		
		factory(Menu::class)->create([
			'etiqueta' => 'Horarios de Atencion',
			'pagina' => 'attention_schelude',
			'padre' => $m3->id,
			'orden' => 1,
			'role' => 'patient',
		]);

		factory(Menu::class)->create([
			'etiqueta' => 'Servicios',
			'pagina' => 'services',
			'padre' => $m3->id,
			'orden' => 2,
			'role' => 'patient',

		]);
		
		factory(Menu::class)->create([
			'etiqueta' => 'Requisitos',
			'pagina' => 'requirements',
			'padre' => $m3->id,
			'orden' => 3,
			'role' => 'patient',
        ]);
        
        //Sub-menu nivel 1 (Hijo de más)
		factory(Menu::class)->create([
			'etiqueta' => 'Ubicacion',
			'pagina' => 'location',
			'padre' => $m4->id,
			'orden' => 0,
			'role' => 'patient',
        ]);
        factory(Menu::class)->create([
			'etiqueta' => 'Contacto',
			'pagina' => 'contact',
			'padre' => $m4->id,
			'orden' => 1,
			'role' => 'patient',
        ]);
        factory(Menu::class)->create([
			'etiqueta' => 'Acerca de Nosotros',
			'pagina' => 'about',
			'padre' => $m4->id,
			'orden' => 2,
			'role' => 'patient',
		]);
    }
}
