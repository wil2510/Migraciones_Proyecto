<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ficha extends Model
{
    use HasFactory;

    protected $table = 'fichas';

    protected $fillable = [
        'code',
        'start_date',
        'schedule',
        'oferta_id',
    ];

    public function oferta()
    {
        return $this->belongsTo(Oferta::class);
    }
}