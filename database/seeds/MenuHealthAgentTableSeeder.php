<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuHealthAgentTableSeeder extends Seeder
{
    
    public function run()
    {
		//Menu Principal (Raiz)	
		$m1 = factory(Menu::class)->create([
			'etiqueta' => 'Inicio',
			'pagina' => 'home',
			'padre' => 0,
			'orden' => 0,
			'role' => 'health_agent',
		]);
		
		$m2 = factory(Menu::class)->create([
			'etiqueta' => 'Pacientes',
			'pagina' => 'patients',
			'padre' => 0,
			'orden' => 1,
			'role' => 'health_agent',
		]);
		
		$m3 = factory(Menu::class)->create([
			'etiqueta' => 'Turnos',
			'pagina' => 'turns',
			'padre' => 0,
			'orden' => 2,
			'role' => 'health_agent',
		]);
			
		$m4 = factory(Menu::class)->create([
			'etiqueta' => 'Asistencias',
			'pagina' => 'assists',
			'padre' => 0,
			'orden' => 3,
			'role' => 'health_agent',
		]);

		$m5 = factory(Menu::class)->create([
			'etiqueta' => 'Novedades',
			'pagina' => 'news',
			'padre' => 0,
			'orden' => 4,
			'role' => 'health_agent',
		]);

		$m6 = factory(Menu::class)->create([
			'etiqueta' => 'Mas',
			'pagina' => 'more',
			'padre' => 0,
			'orden' => 5,
			'role' => 'health_agent',
		]);		

    	//Sub-Menus nivel 1 (Hijos de Novedades)
		factory(Menu::class)->create([
			'etiqueta' => 'O.Sociales Asociadas',
			'pagina' => 'social_works',
			'padre' => $m5->id,
			'orden' => 0,
			'role' => 'health_agent',
		]);
		
		/*factory(Menu::class)->create([
			'etiqueta' => 'Horarios de Atencion',
			'pagina' => 'attention_schelude',
			'padre' => $m5->id,
			'orden' => 1,
			'role' => 'health_agent',
		]);

		factory(Menu::class)->create([
			'etiqueta' => 'Servicios',
			'pagina' => 'services',
			'padre' => $m5->id,
			'orden' => 2,
			'role' => 'health_agent',

		]);
		
		factory(Menu::class)->create([
			'etiqueta' => 'Requisitos',
			'pagina' => 'requirements',
			'padre' => $m5->id,
			'orden' => 3,
			'role' => 'health_agent',
        ]);
        
        //Sub-menu nivel 1 (Hijo de más)
		factory(Menu::class)->create([
			'etiqueta' => 'Ubicacion',
			'pagina' => 'location',
			'padre' => $m6->id,
			'orden' => 0,
			'role' => 'health_agent',
        ]);
        factory(Menu::class)->create([
			'etiqueta' => 'Acerca de Nosotros',
			'pagina' => 'about',
			'padre' => $m6->id,
			'orden' => 1,
			'role' => 'health_agent',
		]);*/
    }
}
