<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gurusmp extends Model
{
     protected $table='gurus';
    protected $fillable=['nama_guru','jabatan','foto'];
    public $timestamps=true;
}
