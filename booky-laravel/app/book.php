<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $guarded=[];
    public $timestamps=false;


    public function states(){
      return $this->belongsTo("App\State",'state_id');
    }

    public function title(){
      return $this->belongsTo("App\Title","title_id");
    }

    public function author(){
      return $this->belongsTo("App\Author","author_id");
    }

    public function user(){
      return $this->belongsTo("App\User","user_id");
    }
}
