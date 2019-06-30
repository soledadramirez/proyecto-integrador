<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $guarded=[];
    public $timestamps=false;


    public function states(){
      return $this->belongsToMany("App\State",'book_state','book_id', 'state_id');
    }

    public function title(){
      return $this->belongsTo("App\Title","title_id");
    }

    public function author(){
      return $this->belongsTo("App\Author","author_id");
    }

    public function users(){
      return $this->belongsToMany("App\User", 'book_user', 'book_id', "user_id");
    }
}
