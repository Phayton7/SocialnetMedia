@extends('layouts.master')

@section('title')
  SocialNetMedia

@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h3>Sign Up</h3>
      <form action="#" method="post">
          <div class="form-group">
            <label for="email">You E-mail</label>
            <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="first_name">You First Name</label>
            <input class="form-control" type="text" name="first_name" id="first_name">
          </div>
          <div class="form-group">
            <label for="password">Your Password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-md-6">
      <h3>Sign In</h3>
      <form action="#" method="post">
          <div class="form-group">
            <label for="email">You E-mail</label>
            <input class="form-control" type="text" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="password">Your Password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </div>

@endsection
