<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasis';
    protected $fillable = ['nama','keterangan','ekskul_id'];
    public $timestamps = true;

    public function Ekskul()
    	{
    		return $this ->belongsTo('App\Ekskul','ekskul_id');
    	}
}
