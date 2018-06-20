@extends('layouts.default')

@section('content')


      <div class="card mt-5 pl-2 pr-2">
        <div class="card-title"><h1>Sign-up</h1>
            <p class="lead">Please use this form to create an account</p></div>

        <div class="card-body">
            <form action="/contact" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="psw">Password</label>
                    <input name="Password" type="password" class="form-control" id="email" placeholder="Enter Password">
                </div>

                <div class="form-group">
                    <label for="psw-confirm">Confirm Password</label>
                    <input name="Confirm Password" type="password" class="form-control" id="email" placeholder="Confirm Password">
                </div>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <button type="submit" class="btn btn-primary mb-2">Sign-up</button>
            </form>
        </div>
    </div>

@endsection
