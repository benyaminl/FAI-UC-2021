@extends("master")

@section("title","Login")

@section("body")
<form method="POST">
    <label>Username/Email</label>
    <input type="text" class="form-control" name="user">
    <br/>
    <label>Password</label>
    <input type="password" class="form-control" name="user">
    <br/>
    <button class="btn btn-secondary">Login</button>
    <br><br>
    <a href="{{ url('/register') }}" class="link-dark">Register New Account</a>
</form>
@endsection
