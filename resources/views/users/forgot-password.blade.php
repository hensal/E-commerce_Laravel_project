@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-4 col-md-offset-4">
<h1>Forgot Password</h1>



<form action="{{ route('users.forgot-password') }}" method="post">



<div class="form-group">
<label for="email">Email</label>
<input type="text" id="email" name="email" class="form-control">
</div>


<input type="submit" class="btn btn-primary" value="Send Code">

{{ csrf_field() }}
</form>
<br>
<p>Don't you receive the code? <a href="{{ route('users.forgot-password') }}">Send Code</a></p>
</div>
</div>
@endsection