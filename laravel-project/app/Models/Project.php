<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //qua potremmo aggiungere 
    // protected $fillable // 
    // in caso volessimo poi in futuro utilizzare il metodo create()

    protected $fillable = [

        'name',
        'programming_language',
        'description',
        'device',

        'type_id'

    ];

    public function type() {
        return $this -> belongsTo(Type :: class);
    }
}
