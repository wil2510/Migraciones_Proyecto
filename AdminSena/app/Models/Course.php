<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'code',
        'area_id',
        'training_center_id',
    ];


    // Un curso pertenece a un área
    public function area()
    {
        return $this->belongsTo(
            Area::class,
            'area_id'
        );
    }


    // Un curso pertenece a un centro de formación
    public function trainingCenter()
    {
        return $this->belongsTo(
            Training_center::class,
            'training_center_id'
        );
    }

    public function ambientes()
    {
    return $this->belongsToMany(
        Ambiente::class,
        'ambiente_course',
        'course_id',
        'ambiente_id'
    );
    }

    // Un curso puede tener muchos instructores
    public function teachers()
    {
        return $this->belongsToMany(
            Teacher::class
        );
    }
}