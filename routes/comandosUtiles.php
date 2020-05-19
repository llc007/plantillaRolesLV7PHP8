<?php
Route::get('/test', function () {
//   return Role::create([
//       'name' => 'Admin',
//        'slug' => 'admin',
//        'description' => 'Administrador',
//        'full-access' => 'yes'
//    ]);

//    return Role::create([
//        'name' => 'Guest',
//        'slug' => 'guest',
//        'description' => 'Guest',
//        'full-access' => 'no'
//    ]);

//    return Role::create([
//        'name' => 'Test',
//        'slug' => 'test',
//        'description' => 'test',
//        'full-access' => 'no'
//    ]);

//    $user = User::find(1);
//    $user->roles()->sync([1]);
////    $user->roles()->attach([1]);
////    $user->roles()->detach([1]);
//
//    return $user->roles;
//
//    //Crear permiso
//    return Permission::create([
//        'name' => 'crearAtencion',
//        'slug' => 'atencion.crear',
//        'description' => 'El usuario puede crear una atencion',
//    ]);


//        //Crear permiso
//    return Permission::create([
//        'name' => 'listarAtenciones',
//        'slug' => 'atencion.index',
//        'description' => 'El usuario puede listar atenciones',
//    ]);


    $role = Role::find(2);
    $role->permissions()->sync([1,2]);
    return $role->permissions;


});
