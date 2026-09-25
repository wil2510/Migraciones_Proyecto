<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ambiente extends Model
{
    use HasFactory;

    protected $table = 'ambientes';

    protected $fillable = [
        'name',
        'location',
        'training_center_id',
    ];

    public function trainingCenter()
    {
        return $this->belongsTo(Training_center::class);
    }

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'ambiente_course',
            'ambiente_id',
            'course_id'
        );
    }

    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
}
