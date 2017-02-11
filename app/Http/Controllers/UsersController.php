<?php

namespace PlatziLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PlatziLaravel\User;

class UsersController extends Controller
{

    public function index() {

        return User::all();
    }

    public function get($id) {

        return User::find($id);
    }

    public function create($name) {

        $user = User::create([
            'name'=> $name,
            'email'=> str_random(8).'@gmail.com',
            'password'=> Hash::make(str_random(8))
        ]);

        $user->save();

        return $user;
    }
}
