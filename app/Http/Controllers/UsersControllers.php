<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersControllers extends Controller
{
    public function registration()
    {
        return 'UsersControllers method registration';
     }

    public function authorization()
    {
        return 'UsersControllers method authorization';
    }

    public function viewing()
    {
        $add_users = User::firstOrCreate([
            'name' => 'Mora Ly',
            'email' => 'mora@gmail.com',
            'password' => '8547924553333',
        ]);

        $users = User::all();
        return view('users.index_users', [
            'users' => $users,

        ]);

    }

    public function deletion()
    {
        return 'UsersControllers method deletion';
    }
}
