<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alava = Provincia::create(['nombre' => 'Álava']);
        $albacete = Provincia::create(['nombre' => 'Albacete']);
        $alicante = Provincia::create(['nombre' => 'Alicante']);
        $almeria = Provincia::create(['nombre' => 'Almeria']);
        $asturias = Provincia::create(['nombre' => 'Asturias']);
        $avila = Provincia::create(['nombre' => 'Ávila']);
        $badajoz = Provincia::create(['nombre' => 'Badajoz']);
        $baleares = Provincia::create(['nombre' => 'Baleares']);
        $barcelona = Provincia::create(['nombre' => 'Barcelona']);
        $burgos = Provincia::create(['nombre' => 'Burgos']);
        $caceres = Provincia::create(['nombre' => 'Cáceres']);
        $cadiz = Provincia::create(['nombre' => 'Cádiz']);
        $cantabria = Provincia::create(['nombre' => 'Cantabria']);
        $castellon = Provincia::create(['nombre' => 'Castellón']);
        $cuidadreal = Provincia::create(['nombre' => 'Cuidad Real']);
        $cordoba = Provincia::create(['nombre' => 'Córdoba']);
        $cuenca = Provincia::create(['nombre' => 'Cuenca']);
        $girona = Provincia::create(['nombre' => 'Girona']);
        $granada = Provincia::create(['nombre' => 'Granada']);
        $guadalajara = Provincia::create(['nombre' => 'Guadalajara']);
        $guipuzcoa = Provincia::create(['nombre' => 'Guipúzcoa']);
        $huelva = Provincia::create(['nombre' => 'Huelva']);
        $huesca = Provincia::create(['nombre' => 'Huesca']);
        $jaen = Provincia::create(['nombre' => 'Jaén']);
        $laCoruna = Provincia::create(['nombre' => 'La Coruña']);
        $laRioja = Provincia::create(['nombre' => 'La Rioja']);
        $lasPalmas = Provincia::create(['nombre' => 'Las Palmas']);
        $leon = Provincia::create(['nombre' => 'León']);
        $lerida = Provincia::create(['nombre' => 'Lérida']);
        $lugo = Provincia::create(['nombre' => 'Lugo']);
        $madrid = Provincia::create(['nombre' => 'Madrid']);
        $malaga = Provincia::create(['nombre' => 'Málaga']);
        $murcia = Provincia::create(['nombre' => 'Murcia']);
        $navarra = Provincia::create(['nombre' => 'Navarra']);
        $orense = Provincia::create(['nombre' => 'Orense']);
        $palencia = Provincia::create(['nombre' => 'Palencia']);
        $pontevedra = Provincia::create(['nombre' => 'Pontevedra']);
    }

}
