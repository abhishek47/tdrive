@extends('layouts.auth')


@section('content')

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="signup">

   <img src="{{ asset('imgs/logo-dark.png') }}" class="logo">
      
    <h3>Continue organising your fleet company.<br><span> Seamless integration of your business.</span></h3>
    <div class="socialSignup">
      <a href="#" class="fbGoogle"><i class="fa fa-google-plus"></i> &nbsp; Sign In with Google</a>
      <a href="#" class="fbSignup"><i class="fa fa-facebook"></i> &nbsp; Sign In with Facebook</a>
    </div>
    <span class="signupDivider">or Sign in with your email address</span>
    <!-- <span class="divider"></span> -->
    <form class="signupForm" method="POST" action="{{ route('login') }}">
    @if ($errors->any())
                    <ul class="errorMessages">
                        @foreach ($errors->all() as $error)
                            <li><span>{{ $error }}</span></li>
                        @endforeach
                    </ul>
                @endif 
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password"  placeholder="Password">
      <span class="promoLabel">Don't have an account? <a href="{{ route('register') }}">Create New Account</a>.</span>
     <!-- <input type="text" class="promocode" placeholder="Promo code"> -->
      <button type="submit" class="signupBtn">Sign In</button>
      <span class="terms">By clicking Sign Up, I agree to the <a href="#">Membership Conditions</a> and the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</span>
    </form>
     
  </div>
</div>


@endsection