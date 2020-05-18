<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bravo extends Model
{
    protected $table = 'bravo';
    protected $fillable = ['no_kamar','status','penghuni','lama_menginap'];
}
