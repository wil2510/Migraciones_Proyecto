<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Computer;

class Apprentice extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    // Relacion Uno a Muchos
    public function computer(){
        return $this->belongsTo('App\Models\Computer');
    }

    protected $fillable = [
        'name',
        'email',
        'cell_number',
        'course_id',
        'computer_id',
    ];
}