<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return response()->json(['Success logout'],200);
    }
}
