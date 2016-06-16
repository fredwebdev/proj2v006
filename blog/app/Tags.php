<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    //Ratacher le modele a une table particuliere
    protected $table = 'tags';
    /**
     *
     */
    protected $fillable = [
        'nom'
    ];

    public function articles(){
        return $this->belongsToMany('App\Article');
    }

    public $timestamps = false;
}
