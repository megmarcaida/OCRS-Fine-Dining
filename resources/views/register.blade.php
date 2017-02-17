@extends('layouts.master')

@section('title')
    #Registration Form :: OCRS
@endsection

@section('content')
    @include('includes.message')
    @if (count(Auth::user())>0 )
         <script>
           window.location.href = '{{route("dashboard")}}'; //using a named route
          </script>
    @endif

<body class="bg-blue">
    <div class="login-form padding20 block-shadow">
        <form action="{{ route('signup') }}" method="post">
            <h1 class="text-light">Register to OCRS</h1>
            <hr class="thin"/>
            <br />

            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Email:</label>
                <input type="text" name="email" id="email">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size"  data-role="input">
                <label for="user_password">Password:</label>
                <input type="password" name="password" id="password">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>

            <br />
            <br />
            <div class="input-control password full-size"  data-role="input">
                <label for="user_password">Confirm Password:</label>
                <input type="password" name="repassword" id="repassword">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary">Register...</button>
                 <input type="hidden" name="_token" value="{{ Session::token() }}">
                 <a href="/ocrs"><button type="button" class="button link">Cancel</button></a>
            </div>
        </form>
    </div>
</body>
@endsection