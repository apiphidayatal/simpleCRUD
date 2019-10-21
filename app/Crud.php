<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
        'name','email','tgl_lahir','no_tlpn','gender','image'

    ];
    protected $table = 'sample_data';
}
