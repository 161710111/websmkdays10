<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusans';
    protected $fillable = ['nama','keterangan'];
    public $timestamps = true;

    public function Fasilitas()
    	{
    		return $this ->hasOne('App\Fasilitas','jurusan_id');
    	}
    	public function Industri()
    	{
    		return $this ->hasMany('App\Industri','jurusan_id');
    	}
}
