<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function me(Request $request)
    {
        $user = auth()->user();

        $return = $user;
        $return['roles'] = [];
        $roles = [];

        $rolesNames = $user->getRoleNames();
        foreach ($rolesNames as $role) {
            $roles[] = $role;
        }

        $return['roles'] = $roles;

        return response()
            ->json($return);
    }
}
