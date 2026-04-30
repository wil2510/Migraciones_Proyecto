<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

     //Relacion Uno a Uno
    public function Area(){
        return $this->BelongsTo('App\Models\Area');
    }
    //Relacion Uno a Uno
    public function training_center(){
        return $this->BelongsTo('App\Models\training_center');
    }
     //Relacion Muchos a Muchos
    public function courses(){
        return $this->>belongsToMany('App\Models\Course');
    }
}
