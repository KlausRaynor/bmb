@extends('_master')

@section('title')
	Login to Bite Me Bouquet
@stop

@section('content')
<div id='content'>



<!--BOOTSTRAP HORIZONTAL FORM CODE-->
<form class="form-horizontal" role="form" method='POST' action='/login'>
  <div class="form-group">
    <label for="signup" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" placeholder="email">
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
      <button type="submit" class="btn btn-default">Login</button>
    </div>
  </div>
</form>
<p>New User? </p>
	<p><a class='btn btn-default' href='signup'>Sign Up</a></p>
</div>
@stop