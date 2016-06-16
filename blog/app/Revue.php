<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revue extends Model
{
    //
    //Ratacher le modele a une table particuliere
    protected $table = 'revues';
    /**
     *
     */
    protected $fillable = [
        'annee', 'fasicule', 'tome', 'couverture'
    ];

    public function articles(){
        return $this->belongsToMany('App\Article');
    }

    public $timestamps = false;
}
