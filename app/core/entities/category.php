<?php

namespace App\core\entities;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table='categories';
    //protected $connection='mysql';
    protected $fillable=['name','description'];

    public function books(){
        return $this->hasmany(book::class,'category_id');
    }
}
