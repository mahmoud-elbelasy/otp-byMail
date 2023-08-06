<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct(){
        $this->authorizeResource(Post::class,'post');
    }
    public function create(){
        // Gate::authorize('create');

        // $this->authorize('update',[$post, 1]);
        auth()->user();
        return "you can edit this post";
    }

    // protected function resourceAbilityMap()
    // {
    //     return array_merge(parent::resourceAbilityMap(),[
    //         'create' => 'create',
    //     ]);
    // }

    // protected function resourceMethodsWithoutModels()
    // {
    //     return array_merge( parent::resourceMethodsWithoutModels(),[
    //         'create'
    //     ]

    //     );
    // }

}
