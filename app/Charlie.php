<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charlie extends Model
{
    protected $table = 'charlie';
    protected $fillable = ['no_kamar','status','penghuni','lama_menginap'];
}
