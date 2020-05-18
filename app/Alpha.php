<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alpha extends Model
{
    protected $table = 'alpha';
    protected $fillable = ['no_kamar','status','penghuni','lama_menginap'];
}
