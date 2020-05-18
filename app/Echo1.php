<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echo1 extends Model
{
    protected $table = 'echo';
    protected $fillable = ['no_kamar','status','penghuni','lama_menginap'];
}
