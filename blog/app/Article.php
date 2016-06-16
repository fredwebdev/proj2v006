<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    //Ratacher le modele a une table particuliere
    protected $table = 'articles';
    /**
     *
     */
    protected $fillable = [
        'titre', 'pages'
    ];

    public function revues(){
        return $this->belongsToMany('App\Revue');
    }

    public $timestamps = false;
}
