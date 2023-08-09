<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\relations\hasManyController;
use App\Http\Controllers\UserController;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','otp-verification'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/create', function () {
    // $owner = Role::create([
    //     'name' => 'owner',
    //     'description' => 'User is the owner of a given project', 
    // ]);
    
    // $admin = Role::create([
    //     'name' => 'admin',
    //     'description' => 'User is allowed to manage and edit other users',
    // ]);

    // $createPost = Permission::create([
    //     'name' => 'create-post',
    //     'description' => 'create new blog posts', 
    // ]);
    
    // $editUser = Permission::create([
    //     'name' => 'edit-user',
    //     'description' => 'edit existing users',
    // ]);

    $user = User::find(10);
    // $role = Role::find(2);
    $user->attachRole(1);
    // $permission = Permission::find(2);
    // $role->attachPermission($permission);
    // $owner->givePermissions([$editUser,$createPost]);

    return "gg";
});


Route::get('/admin', [RoleController::class,'welcome'])->middleware('permission:edit-user');

// Route::get('posts/create',[PostController::class,'create']);
Route::resource('users',UserController::class);

// Route::get('create',UserController::class,'create');

Route::get('try',[hasManyController::class,'trying']);


Route::get('/test',function(){
    $user = User::find(10);
    $role = Role::find(1);
    $user->attachRole($role);
    dd('gg');

});