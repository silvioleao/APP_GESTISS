<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function login()
    {
        $route = "login";
        if (isset($_COOKIE['token'])) {

            if ($_COOKIE['token'] != "") {
                $route = "painel";
            }
        }

        return redirect()->route($route);
    }

    function logout()
    {
        return redirect()->route('login')->withoutCookie(cookie("token"));
    }
}
