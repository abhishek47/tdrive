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
  

  		

      

        <div class="col-md-6">

          <div class="page-header" style="margin: 0px;" >
          <h4 ><b>General</b></h4>
        </div>

	  <h3>{{ $vehicle->name }}</h3>
	  <h4><b>Class :</b> {{ getVehicleClass($vehicle->vehicle_class) }}</h4>

	  <br> <br>
	  </div>

	

       

         <div class="col-md-6">

          <div class="page-header" style="margin: 0px;" >
          <h4 ><b>Associations</b></h4>
        </div>
		  

		  <br> <br>
		 </div>



        <div class="clearfix"> </div>

         <div class="col-md-6">
	 <div class="page-header" style="margin: 0px;" >
          <h4 ><b>Tasks</b></h4>
        </div>

        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>

	  <br> <br>
	  </div>




       

         <div class="col-md-6">

          <div class="page-header" style="margin: 0px;" >
          <h4 ><b>Trips/Journeys</b></h4>
        </div>

        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
	  
	  <br> <br>
	  </div>


	     <div class="clearfix"> </div>

         <div class="col-md-6">
		    <div class="page-header" style="margin: 0px;" >
	          <h4 ><b>Documents</b></h4>
	        </div>

	        <table class="table table-striped">
	            <thead>
	                <tr>
	                    <th>#</th>
	                    <th>First Name</th>
	                    <th>Last Name</th>
	                    <th>Username</th>
	                </tr>
	            </thead>
	            <tbody>
	                <tr>
	                    <td>1</td>
	                    <td>Mark</td>
	                    <td>Otto</td>
	                    <td>@mdo</td>
	                </tr>
	                <tr>
	                    <td>2</td>
	                    <td>Jacob</td>
	                    <td>Thornton</td>
	                    <td>@fat</td>
	                </tr>
	                <tr>
	                    <td>3</td>
	                    <td>Larry</td>
	                    <td>the Bird</td>
	                    <td>@twitter</td>
	                </tr>
	            </tbody>
	        </table>

	  <br> <br>
	  </div>


  </div>




</div>

</div>
</div>

@endsection
