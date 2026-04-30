<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    //Relacion Uno a Uno
    public function Computer(){
        return $this->>BelongsTo('App\Models\computer');
    }

    //Relacion Uno a Uno
    public function course(){
        return $this->BelongsTo('App\Models\Course');
    }

}
