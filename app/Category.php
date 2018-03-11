<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function gallery()
    {
        return $this->hasOne('App\Gallery');
    }
}
