<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $table ="mahasiswa";
   protected$fillable = ['Nim','Nama','Alamat'];
   public $timestamps = false;
}