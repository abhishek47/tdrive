@extends('layouts.auth')


@section('content')

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="signup">

    <img src="{{ asset('imgs/logo-dark.png') }}" class="logo">

    <h3><span> Begin with adding your business info here.</span></h3>
    
    <span class="signupDivider">This information is used in various places like invoices.</span>
    <!-- <span class="divider"></span> -->
    <form class="signupForm" method="POST" action="{{ route('company.register') }}">

    @if ($errors->any())
                    <ul class="errorMessages">
                        @foreach ($errors->all() as $error)
                            <li><span>{{ $error }}</span></li>
                        @endforeach
                    </ul>
                @endif 
      {{ csrf_field() }}

      <input type="text" name="name" placeholder="Your Company Name">
      <input type="email" name="email" placeholder="Company Email">
      <input type="text" name="address" placeholder="Company Address">
      <input type="text" name="country" placeholder="Country" value="India" readonly>
      <input type="text" name="city" class="half" placeholder="City">
      <input type="text" name="state" class="half confirmpass" placeholder="State">
      <input type="text" name="zip" placeholder="Zip Code">
      <input type="text" name="phones" placeholder="Phone">
      <input type="text" name="website" placeholder="Company Website">
     <!-- <input type="text" class="promocode" placeholder="Promo code"> -->
     <span class="promoLabel">Not ready yet? <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                 Logout.
            </a>

            </span>
      <button type="submit" class="signupBtn">Save Company Details</button>
      <span class="terms">A product powered by <a href="#">Trumpets Technologies Pvt. Ltd.</a> </span>
    </form>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
     
  </div>
</div>


@endsection