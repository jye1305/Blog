<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    //
    public function addUser(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();
        return redirect("addUser");
    }
}
