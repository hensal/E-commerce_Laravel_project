<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    use ResetsPasswords;

    
    public function __construct() {
        $this->middleware('guest');
    }

    public function showResetForm() {
        return view('users.email');
    }
    public function showResetLinkEmail() {
        return view('users.reset');
    }
}