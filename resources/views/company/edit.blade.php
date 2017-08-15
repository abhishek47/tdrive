@extends('layouts.app')

@section('content')
 <!--page title and breadcrumb start -->
<div class="page-head-wrap">
    <h4 class="margin0">
       <b>{{ auth()->user()->company->name }}</b> <small>Company Settings</small>
    </h4>
    <div class="breadcrumb-right">
        <button class="btn btn-success" id="update-company">Save Details</button>
    </div>
</div>

<!--page title and breadcrumb end -->
<div class="ui-content-body">
<div class="ui-container">

<div style="padding: 15px;">
<div class="row">
  <div class="col-md-8">
  
    @include('partials.company._edit__form')

  </div>
</div>


</div>

</div>
</div>

@endsection


@section('js')
 
 <script type="text/javascript">
     $("#update-company").click( function() {
    $('#company_form').trigger('submit');
});
 </script>

@endsection
