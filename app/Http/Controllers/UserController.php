<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
class UserController extends Controller
{
    
    public function getRegister() {
        return view('company.index');
    }

    public function postRegister(Request $request) {
        

        $this->validate($request, [
             'name' => 'required',
             'email' => 'email|required|unique:users',
             'password' => 'required|min:4'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);

        Session()->flash('success', 'Your account is successfully registerd');
        return view('company.profile');
        
    }


    public function getLogin() {
        return view('company.index');
    }

    public function postLogin(Request $request) {
        

        $this->validate($request, [
             'email' => 'email',
          //  'password' => 'required'
        ]);
        dd(Auth::attempt(['email' => $request['email'], 'password' => bcrypt($request['password'])]));
  
       if (Auth::attempt(['email' => $request['email'], 'password' => bcrypt($request['password'])])) {
        return view('company.index');
       }
       return view('company.profile');
        
    }

    public function getProfile() {
        return view('company.profile');
    }


    public function getLogout() {
        Auth::logout();

       // return redirect()->back();
       return redirect()->route('product.index');
    }

    
}
