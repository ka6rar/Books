<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function getPhotos($picture ){

        require asset($picture );
    }


    public function users() 
    {
        return $this->belongsTo('App/User');
    }
}
