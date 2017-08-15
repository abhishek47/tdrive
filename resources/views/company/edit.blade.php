@extends('layouts.app')

@section('content')
 <!--page title and breadcrumb start -->
<div class="row">
    <div class="col-md-8">
        <h1 class="page-title">Company Settings
            <small></small>
        </h1>
    </div>
    <div class="col-md-4">
        <ul class="breadcrumb pull-right">
            <li>Home</li>
            <li><a href="#" class="active">Company Settings</a></li>
        </ul>
    </div>
</div>

<!--page title and breadcrumb end -->

<div style="padding: 15px;">
<div class="row">
<div class="col-md-8">
       
       

        	@include('partials.company._edit__form')


    
    </div>
</div>


</div>

@endsection
