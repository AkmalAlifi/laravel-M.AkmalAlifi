<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['user_id', 'tgl_lahir', 'tempat_lahir', 'telepon', 'alamat', 'gender', 'foto'];

   public function user ()
   {
       return $this->belongsTo(user::class, 'user_id', 'id');
   }

}
