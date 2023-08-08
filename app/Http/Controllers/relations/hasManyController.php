<?php

namespace App\Http\Controllers\relations;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class hasManyController extends Controller
{
    public function trying(){
        return User::find(9)->role;
    }
}
