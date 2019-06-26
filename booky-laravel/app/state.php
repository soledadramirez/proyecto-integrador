<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    public $guarded=[];

    public function books(){
      return $this->hasMany("App\book", "id_estado");
    }
}
