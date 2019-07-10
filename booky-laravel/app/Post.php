<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }

  public function interested(){
    return $this->belongsTo('App\User', 'interested_id');
  }

  public function book(){
    return $this->belongsTo('App\Book', 'book_id');
  }

}
