<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuAdminTableSeeder extends Seeder
{
    
    public function run()
    {
        //Menu Principal (Raiz)	
		$m1 = factory(Menu::class)->create([
			'etiqueta' => 'Usuarios',
			'pagina' => 'users',
			'padre' => 0,
			'orden' => 0,
			'role' => 'admin',
		]);
		
		$m2 = factory(Menu::class)->create([
			'etiqueta' => 'Pacientes',
			'pagina' => 'patients',
			'padre' => 0,
			'orden' => 1,
			'role' => 'admin',
		]);
		
		$m3 = factory(Menu::class)->create([
			'etiqueta' => 'Turnos',
			'pagina' => 'turns',
			'padre' => 0,
			'orden' => 2,
			'role' => 'admin',
		]);
			
		$m4 = factory(Menu::class)->create([
			'etiqueta' => 'Asistencias',
			'pagina' => 'assists',
			'padre' => 0,
			'orden' => 3,
			'role' => 'admin',
		]);

		$m5 = factory(Menu::class)->create([
			'etiqueta' => 'Novedades',
			'pagina' => 'news',
			'padre' => 0,
			'orden' => 4,
			'role' => 'admin',
		]);

		$m6 = factory(Menu::class)->create([
			'etiqueta' => 'Mas',
			'pagina' => 'more',
			'padre' => 0,
			'orden' => 5,
			'role' => 'admin',
		]);		

    	//Sub-Menus nivel 1 (Hijos de Novedades)
		factory(Menu::class)->create([
			'etiqueta' => 'O.Sociales Asociadas',
			'pagina' => 'social_works',
			'padre' => $m5->id,
			'orden' => 0,
			'role' => 'admin',
		]);
		
		factory(Menu::class)->create([
			'etiqueta' => 'Horarios de Atencion',
			'pagina' => 'attention_schelude',
			'padre' => $m5->id,
			'orden' => 1,
			'role' => 'admin',
		]);

		factory(Menu::class)->create([
			'etiqueta' => 'Servicios',
			'pagina' => 'services',
			'padre' => $m5->id,
			'orden' => 2,
			'role' => 'admin',

		]);
		
		factory(Menu::class)->create([
			'etiqueta' => 'Requisitos',
			'pagina' => 'requirements',
			'padre' => $m5->id,
			'orden' => 3,
			'role' => 'admin',
        ]);
        
        //Sub-menu nivel 1 (Hijo de más)
		factory(Menu::class)->create([
			'etiqueta' => 'Ubicacion',
			'pagina' => 'location',
			'padre' => $m6->id,
			'orden' => 0,
			'role' => 'admin',
        ]);
        factory(Menu::class)->create([
			'etiqueta' => 'Acerca de Nosotros',
			'pagina' => 'about',
			'padre' => $m6->id,
			'orden' => 1,
			'role' => 'admin',
		]);
    }
}
