<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage() {

        return view('pages.registerPage');

    }

    public function loginPage() {

        return view('pages.loginPage');

    }

    public function register() {

    }

    public function login() {

    }

}
