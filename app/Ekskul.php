<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $table = 'ekskuls';
    protected $fillable = ['nama','keterangan'];
    public $timestamps = true;

    public function Prestasi()
    	{
    		return $this ->hasOne('App\Prestasi','ekskul_id');
    	}
}
