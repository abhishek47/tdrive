@extends('layouts.app')

@section('content')
 <!--page title and breadcrumb start -->
<div class="page-head-wrap">
    <h4 class="margin0">
       <b>Add New Vehicle</b> <small></small>
    </h4>
    <div class="breadcrumb-right">
        <button class="btn btn-success" id="update-company" class="hidden-xs">Quick Add</button>
    </div>
</div>

<!--page title and breadcrumb end -->
<div class="ui-content-body">
<div class="ui-container">

<div style="padding: 15px;">
<div class="row">
  <div class="col-md-12">
    
      @include('partials.vehicles._new__form')
    
  </div>
</div>


</div>

</div>
</div>

@endsection


@section('js')
	
	<script type="text/javascript">
		 
		 $("#owner-select").select2({
	            placeholder: "Select a state"
	        });

		  $('.date-picker').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    
                }
            );
	 </script>

@endsection