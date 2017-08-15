@extends('layouts.auth')


@section('content')

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="signup">

   <img src="{{ asset('imgs/logo-dark.png') }}" class="logo">

    <h3>Sign up to start organising your fleet company.<br><span> Seamless integration of your business.</span></h3>
    <div class="socialSignup">
      <a href="{{ route('oauth.redirect', ['provider' => 'google']) }}" class="fbGoogle"><i class="fa fa-google-plus"></i> &nbsp; Sign up using Google</a>
      <a href="{{ route('oauth.redirect', ['provider' => 'facebook']) }}" class="fbSignup"><i class="fa fa-facebook"></i> &nbsp; Sign up using Facebook</a>
    </div>
    <span class="signupDivider">or Sign up with your email address</span>
    <!-- <span class="divider"></span> -->
    <form class="signupForm" method="POST" action="{{ route('register') }}">

    @if ($errors->any())
                    <ul class="errorMessages">
                        @foreach ($errors->all() as $error)
                            <li><span>{{ $error }}</span></li>
                        @endforeach
                    </ul>
                @endif 
      {{ csrf_field() }}

      <input type="text" name="name" placeholder="Your Full Name">
      <input type="text" name="email" placeholder="Email">
      <select name="role" placeholder="Select Your Role">
        <option value="0">Director</option>
        <option value="1">Manager</option>
        <option value="2">Employee</option>

      </select>
      <input type="password" name="password" class="half" placeholder="Password">
      <input type="password" name="password_confirmation" class="half confirmpass" placeholder="Confirm Password">
      <span class="promoLabel">Already have an account? <a href="{{ route('login') }}">Sign In</a></span>
     <!-- <input type="text" class="promocode" placeholder="Promo code"> -->
      <button type="submit" class="signupBtn">Sign Up</button>
      <span class="terms">By clicking Sign Up, I agree to the <a href="#">Membership Conditions</a> and the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</span>
    </form>
     
  </div>
</div>


@endsection