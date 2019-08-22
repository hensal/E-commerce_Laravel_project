@extends('layouts.app')

@section('title')
Create New Account
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
<h1>Create New User</h1>
<hr>


{!! Form::open(array('route' => 'user.signup', 'data-parsley-validate' => '')) !!}

{!! Form::open(array('action' => 'UserController@postSignup')) !!}

{{ Form::label('name', 'name:') }}
{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
<br>
{{ Form::label('email', 'Email:') }}
{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
<br>
{{ Form::label('password', "Password:") }}
{{ Form::text('password', null, array('class' => 'form-control', 'required' => '')) }}

<br>


{{ Form::submit('Register', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

{!! Form::close() !!}


</div>
</div>



@endsection



@section('scripts')

{!! Html::script('js/parsley.min.js') !!}
@endsection