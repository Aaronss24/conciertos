<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artista;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artista = Artista::create([
            'nombre' => 'Foo Fighters',
            'informacion' => 'Con 10 álbumes de estudio en el mercado, mas de 27 millones de copias vendidas,
                            imnumerables premios de primera categoría (Grammys, Brit Awards, NME Awards,...),
                            estadios agotados por el mundo entero e himnos generacionales de la talla de 
                            Everlong, The Pretender o The Best Of You, Foo Fighters es, a día de hoy, uno 
                            de los nombres más poderosos del rock moderno. 
                            Dave Grohl, Pat Smear, Nate Mendel, Taylor Hawkins, Chris Shiflett y Rami Jaffe 
                            cuentan los días para salir de nuevo a la carretera y divertirse con sus fans de 
                            todo el mundo. Lo recuerdan continuamente es sus redes sociales, donde van sumando 
                            fechas bajo el lema "Are you ready?". Ha quedado patente con su impresionante 
                            reaparición en el Madison Square Garden de Nueva York, el primer concierto al 
                            100% de capacidad celebrado en la ciudad desde marzo de 2020.'
        ]);
    }
}
