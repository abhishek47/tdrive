@extends('layouts.app')

@section('content')
 <!--page title and breadcrumb start -->
<div class="page-head-wrap">
    <h4 class="margin0">
       <b>{{ $vehicle->plate_no }}</b> <small>{{ $vehicle->name }}</small>
    </h4>
    <div class="breadcrumb-right">
        <button class="btn btn-primary" id="update-company" class="hidden-xs"><i class="fa fa-map-marker"></i> &nbsp; Locate Vehicle</button>
    </div>
</div>

<!--page title and breadcrumb end -->
<div class="ui-content-body">
<div class="ui-container">

<div style="padding: 15px;">
<div class="row">
  <div class="col-md-12">
  
    

  </div>
</div>


</div>

</div>
</div>

@endsection
