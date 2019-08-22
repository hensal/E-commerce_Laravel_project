
@if(Session::has('message'))
<div class="alert alert-success" role="alert">
<center><strong> Message: <br></strong>{{ Session::get('message') }}</center>
</div>
@endif
