<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'ofertas';

    protected $fillable = [
        'jornada',
        'registration_date',
        'capacity',
        'programa_id',
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }

    public function fichas()
    {
        return $this->hasMany(Ficha::class);
    }
}
