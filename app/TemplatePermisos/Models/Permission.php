<?php

namespace App\TemplatePermisos\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    //Desde aqui
    protected $fillable = [
        'name','slug', 'description'
    ];
    //
    //Retorna todos los usuarios relacionados con el rol
    public function roles(){
        return $this->belongsToMany('App\TemplatePermisos\Models\Role')->withTimestamps();
    }
}
