<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;


protected function name(): Attribute
{
    return new Attribute(
        get: fn($value) => ucwords($value),
        
        set: fn($value) => strtolower($value)
        
        // get: function($value){
        //     return ucwords($value);
        // },
        
        // set: function($value){
        //     return strtolower($value);
        // }
    );
}

}