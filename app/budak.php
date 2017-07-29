<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class budak extends Model
{
     protected $table='budaks';
    protected $fillable=['nama','ortu_id','umur','alamat'];
    protected $visible=['nama','ortu_id','umur','alamat'];
    public $timestamps=true;
    public function ortu()
    {
    	return $this->belongsTo('App\ortu','ortu_id');
    }
}
