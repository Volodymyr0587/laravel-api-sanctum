<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return "This is LOGIN method of AuthController class";
    }

    public function register()
    {
        return response()->json('This is REGISTER method of AuthController class');
    }
}
