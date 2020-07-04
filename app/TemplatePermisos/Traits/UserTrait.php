<?php
namespace App\TemplatePermisos\Traits;

Trait UserTrait{
//Retorna todos los usuarios relacionados con el rol
    public function roles(){
        return $this->belongsToMany('App\TemplatePermisos\Models\Role')->withTimestamps();
    }

    public function havePermission($permission){
        foreach ($this->roles as $role){
            if ($role['full-access'] == 'yes'){
                return true;
            }

            foreach ($role->permissions as $perm){

                if ($perm->slug == $permission){
                    return true;
                }

            }

        }
        return false;
    }

}
