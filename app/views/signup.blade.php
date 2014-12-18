@extends('_master')

@section('title')
	New User
@stop

@section('content')
<div id='content'>
	<h3>Sign up to order custom bouquets!</h3>

@foreach($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach



{{ Form::open(array('url' => '/signup')) }}

 <p>   Email
    {{ Form::text('email') }}<br><br>

    Password:
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}</p>


<!--BOOTSTRAP HORIZONTAL FORM CODE-->

<!--
<form class="form-horizontal" role="form" method='POST' action='/signup'>
  <div class="form-group">
    <label for="signup" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFName" placeholder="James">
    </div>
  </div>
  <div class="form-group">
    <label for="signup" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputLName" placeholder="Raynor">
    </div>
  </div>
  <div class="form-group">
    <label for="signup" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" placeholder="ThisIsJimmy@battle.net">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form> -->
</div>


@stop