<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Relacion Uno a Uno
    public function area(){
        return $this->>BelongsTo('App\Models\Area');
    }

     //Relacion Uno a Uno
    public function training_center(){
        return $this->BelongsTo('App\Models\Training_center');
    }

    //Relacion Uno a muchos
    public function Apprentice(){
        return $this->>hasMany('App\Models\Apprentice');
    }
    //Relacion Muchos a Muchos
    public function Teachers(){
        return $this->>belongsToMany('App\Models\teacher');
    }
}    