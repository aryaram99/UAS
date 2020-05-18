<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delta extends Model
{
    protected $table = 'delta';
    protected $fillable = ['no_kamar','status','penghuni','lama_menginap'];
}
