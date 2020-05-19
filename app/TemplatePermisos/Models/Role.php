<?php

namespace App\TemplatePermisos\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Desde aqui
    protected $fillable = [
        'name','slug', 'description', 'full-access',
    ];


    //Retorna todos los usuarios relacionados con el rol
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    //Retorna todos los usuarios relacionados con el rol
    public function permissions(){
        return $this->belongsToMany('App\TemplatePermisos\Models\Permission')->withTimestamps();
    }

}
