<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table='gallerys';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
