<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar_Beasiswa extends Model
{
    protected $table = 'pendaftar_beasiswa';
    protected $fillable = ['id','user_id','beasiswa_id','point'];


    public function beasiswa()
    {
    	return $this->belongsTo('App\Beasiswa');
    }
    public function mahasiswa()
    {
    	return $this->belongsTo('App\Mahasiswa');
    }  

}
