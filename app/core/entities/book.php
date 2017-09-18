<?php

namespace App\core\entities;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table='books';
    protected $fillable=['title','description','picture','category_id'];

    public funtion category(){
        return $this->belongsTo(category::class,'category_id');
    }
}
