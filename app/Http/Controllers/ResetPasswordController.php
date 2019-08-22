<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Password;
use Auth;
class ForgotPasswordController extends Controller
{
    //
    use ResetsPasswords;

    protected $redirectedTo = '/doctor';


    public function __construct() {
        $this->middleware('guest:doctor');
    }
public function guard() {
    return Auth::guard('admin');
}


    protected function broker() {
        return Password::broker('doctors');
    }
}
