<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table= 'pages';
    public function post()
    {
        return $this->hasOne('App\Post');
    }
}
