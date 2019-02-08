<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [ //popuniti u tabeli
        'title', 'producer','number_of_door'
    ];
}
