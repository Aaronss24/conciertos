<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concierto;

class ConciertoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioAdmin = Concierto::create([
            'provincia_id' => 31,
            'artista_id' => 1,
            'informacion' => 'Wanda Metropolitano Madrid con Liam Gallagher y Amyl & The Sniffers. 
                            Entradas a la venta en livenation.es y ticketmaster.es',
            'Precio' => 100,
            'fechacelebracion' => '2022-06-20'
        ]);
    }
}
