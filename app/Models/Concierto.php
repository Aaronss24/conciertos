<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concierto extends Model
{
    use HasFactory;

    protected $fillable = ['provincia_id','artista_id','fechacelebracion','informacion','precio'];

    public function compras() {
        return $this->hasMany(Compra::class);
    }

    public function artistas() {
        return $this->belongsTo(Artista::class);
    }

    public function provincias() {
        return $this->belongsTo(Provincia::class);
    }
}
