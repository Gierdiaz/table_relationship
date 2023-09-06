<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function index()
    { 
        //criando uma permissão no banco.
        //$permission = Permission::create(['name' => 'menu_02']);

        //dd($permission);

        $users = User::with('permissions')->find(1);

        $permission = Permission::find(1);
        //$users->permissions()->save($permission);

        //uma outra forma da permissão a mais de um usuário.
        $users->permissions()->saveMany([
            Permission::find(1),
            Permission::find(2)
        ]);
        $users->refresh();

        dd($users->permissions);
        
    }


    public function permission_user()
    {
        $users = User::with('permissions')->find(1);

        foreach ($users->permissions as $permission) {
            echo "{$permission} <br>";
        }
    }

}
