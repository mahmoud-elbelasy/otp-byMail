<?php

namespace App\Http\Controllers\relations;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class hasManyController extends Controller
{
    public function trying(){
        $roles = User::find(10)->roles()->orderBy('name')->get();

        foreach($roles as $role){
            // echo json_encode(($role));
            echo $role;
        }
    }

}
