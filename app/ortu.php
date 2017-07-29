<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ortu extends Model
{
    protected $table='ortus';
    protected $fillable=['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible=['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps=true;
    public function budak()
    {
    	return $this->hasMany('App\budak', 'ortu_id');
    }
}
