@extends('layouts.app')

@section('content')

@if(count($errors) > 0)
  <div class="row1">
      <div class="col-md-6">
          <ul>
               @foreach($errors->all() as $error)
                 <li>{{$error}}</li>       
               @endforeach
          </ul>
             </div>
              </div>
            @endif
      <div class="row">

          <div class="col-md-3">
           <h3>Sign up</h3>
             <form action="{{ action('UserController@postRegister') }}" method="post">
              <div class="form-group">
                   <label for="email">Your email</label>
                   <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email')}}">
                </div>
                 <!--Value field will save the old email -->  

                  <div class="form-group">
                  <label for="first-name">First Name</label>
                  <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name')}}">
                  </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="text" name="password" id="password">
                </div>
   
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <input type="hidden" name="_token" value="{{ Session::token() }} ">   
                 </form>
                    </div>
                

                    <div class="col-3">
                    <h3>Sign in</h3>
                       <form action="{{  action('UserController@postLogin') }}" method="post">

                     <div class="form-group">
                     <label for="email">Your email</label>
                     <input class="form-control" type="text" name="email" id="email">
                     </div>
             
                   <div class="form-group">
                   <label for="password">Password</label>
                   <input class="form-control" type="text" name="passowrd" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <input type="hidden" name="_token" value="{{ Session::token() }} ">  
                        </form>
                        </div>
    
                       </div>

 @stop