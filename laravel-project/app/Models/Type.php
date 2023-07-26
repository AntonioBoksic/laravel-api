<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    //qua potremmo aggiungere 
    // protected $fillable // 
    // in caso volessimo poi in futuro utilizzare il metodo create()

    public function projects() {
        return $this -> hasMany(Project :: class);
    }
}
