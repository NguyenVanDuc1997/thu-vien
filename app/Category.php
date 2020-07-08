<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //neu dat ten bang bi thieu so nhieu thi phai gan bang nhu duoi
    //protected $table='category';
    public function library(){
        return $this->belongsTo('App\Library');
    }
}
