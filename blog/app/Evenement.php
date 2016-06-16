<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    //
    protected $table = 'evenements';

    protected $fillable = [
        'titre', 'nom', 'adresse', 'date', 'email', 'facebook', 'lien1', 'lien2', 'lien3'

    ];

    public $timestamps = false;
}
