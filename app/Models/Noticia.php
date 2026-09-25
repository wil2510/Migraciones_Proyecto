<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $fillable = [
        'title',
        'content',
        'image',
        'publish_date',
        'training_center_id',
    ];

    public function trainingCenter()
    {
        return $this->belongsTo(Training_center::class);
    }
}