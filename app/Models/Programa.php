<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'programas';

    protected $fillable = [
        'name',
        'description',
        'type',
        'duration',
        'area_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function ofertas()
    {
    return $this->hasMany(Oferta::class);
    }
}
