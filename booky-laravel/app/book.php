<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $guarded=[];


    public function state(){
      return $this->belongsTo("App/state","id_estado");
    }

    public function title(){
      return $this->belongsTo("App/Title","id_titulo");
    }
    public function author(){
      return $this->belongsTo("App/Author","id_autor");
    }
    public function user(){
      return $this->belongsTo("App/User","id_usuario");
    }
}
