@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
<h1>Sign In</h1>



<form action="{{ route('users.signin') }}" method="post">



<div class="form-group">
<label for="email">Email</label>
<input type="text" id="email" name="email" class="form-control">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" id="password" name="password" class="form-control">
</div>

<a href="/forgot-password">Forgot your password?</a>

<input type="submit" class="btn btn-primary" value="Sign In">

{{ csrf_field() }}
</form>
<br>
<p>Don't you have an account? <a href="{{ route('users.signup') }}">Sign Up Now</a></p>
</div>
</div>
@endsection