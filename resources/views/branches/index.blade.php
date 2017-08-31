@extends('layouts.auth')


@section('content')

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,400italic' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="signup">

    <img src="{{ asset('imgs/logo-dark.png') }}" class="logo">

    <h3><b>{{ auth()->user()->company->name }}</b><br><span> Add new or Choose your company branch.</span></h3>
    
     <!-- <span class="divider"></span> -->
    <form class="signupForm" method="POST" action="{{ route('branch.register') }}">

    @if ($errors->any())
                    <ul class="errorMessages">
                        @foreach ($errors->all() as $error)
                            <li><span>{{ $error }}</span></li>
                        @endforeach
                    </ul>
                @endif 
      {{ csrf_field() }}

      <input type="text" name="name" placeholder="Your Branch Location">
     
      
    
      <button type="submit" class="signupBtn">Add New Branch</button>
      
    </form>

  


            <div>
            <h3><b>Select a Branch</b></h3>
            <ul class="branches-list">
              @foreach($branches as $branch)
                <li><a href="/branch:{{$branch->id}}/home">{{ $branch->name }}</a></li>
              @endforeach
              </ul>
            </div>

              <span class="promoLabel">Not ready yet? <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                 Logout.
            </a>

            </span> 


            <span class="terms">A product powered by <a href="#">Trumpets Technologies Pvt. Ltd.</a> </span>
     
  </div>
</div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>


@endsection