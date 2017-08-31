@extends('layouts.app')

@section('content')


<!--page title and breadcrumb end -->
<div class="ui-content-body">
<div class="ui-container">

<div style="padding: 15px;">
<div class="row">
  <div class="col-md-12">
  
    @include('partials.vehicles._edit__form')

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
