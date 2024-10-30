<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    /******  7915e0f8-826f-492d-8903-4ddd97a513c3  *******/
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }


}
