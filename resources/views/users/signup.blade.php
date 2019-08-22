@extends('layouts.master')

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
<div class="col-md-4 col-md-offset-4">
<h1>Sign up</h1>



<form action="{{ route('users.signup') }}" method="post">

<div class="form-group">
<label for="name">Name</label>
<input type="text" id="name" name="name" class="form-control">
</div>


<div class="form-group">
<label for="email">Email</label>
<input type="text" id="email" name="email" class="form-control">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" name="password" class="form-control">
</div>

<input type="submit" class="btn btn-primary" value="Sign Up">

{{ csrf_field() }}
</form>

</div>
</div>
@endsection