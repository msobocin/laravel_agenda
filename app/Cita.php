<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {

    public function contactos()
    {
        return $this->belongsToMany('App\Contacto')->withTimestamps();
    }

}
