<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $fillable=[
      'name'
    ];
 /*   public function personal(){
        return $this->hasMany(Peronal::class);
    }*/
}
