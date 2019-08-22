@extends('layouts.app')

@section('title')
Sign In
@endsection

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="row">
<div class="col-md-8 col-md-offset-2">
<h1>Login</h1>
<hr>

<!-- route is given from as in web.php -->
{!! Form::open(array('route' => 'user.signin', 'data-parsley-validate' => '')) !!}

{!! Form::open(array('action' => 'UserController@getSignin')) !!}

{{ Form::label('email', 'Email:') }}
{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
<br>
{{ Form::label('password', "Password:") }}
{{ Form::text('password', null, array('class' => 'form-control', 'required' => '')) }}
<br>
<div class="form-group">
    <label for="remember">
        <input type="checkbox" name="remember" id="remember" value="1"> Remember Me
    </label>
</div>
{{ Form::submit('Login', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
<br>

<center><strong><a href="/forgot-password">Forgot your password?</a></strong></center>
</div>

{!! Form::close() !!}



</div>
</div>

<hr pull-center>
<center>
<p>Do you have an account?
<strong><a href="{{ route('doctor.signup') }}">Sign Up Now</a></strong>
</p>
</center>
@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}
@endsection