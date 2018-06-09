<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table = 'industris';
    protected $fillable = ['logo','nama','dekripsi','jurusan_id'];
    public $timestamps = true;

    public function Jurusan()
    	{
    		return $this ->belongsTo('App\Jurusan','jurusan_id');
    	}
}
