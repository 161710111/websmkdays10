<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['nama','jurusan_id'];
    public $timestamps = true;

    public function Jurusan()
    	{
    		return $this ->belongsTo('App\Jurusan','jurusan_id');
    	}
}
