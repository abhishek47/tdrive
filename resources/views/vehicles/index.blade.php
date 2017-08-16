@extends('layouts.app')

@section('content')
 <!--page title and breadcrumb start -->
<div class="page-head-wrap">
    <h4 class="margin0">
       <b>Vehicles</b> <small>All vehicles</small>
    </h4>
    <div class="breadcrumb-right">
        <button class="btn btn-success" class="hidden-xs"><i class="fa fa-plus"></i> &nbsp; Add Vehicle</button>
    </div>
</div>

<!--page title and breadcrumb end -->
<div class="ui-content-body" style="padding: 0px;">
<div class="ui-container">



    <div class="table-responsive">
   <table class="table table-striped table-tdrive" style="margin: 0px;"> 
        <thead>
            <tr>
                <th>&nbsp; #</th>
                <th>Name</th>
                <th>Plate No.</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&nbsp; 1</td>
                <td>Ciaz</td>
                <td>MH15FF9444</td>
                <td><span class="text-success">In Transit</span></td>
                <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View</a> 
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
             <tr>
                <td>&nbsp; 1</td>
                <td>Wagon R</td>
                <td>MH15DC5825</td>
                <td><span class="text-danger">Parked</span></td>
               <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View</a> 
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
             <tr>
                <td>&nbsp; 1</td>
                <td>Vento</td>
                <td>MH15FT9333</td>
                <td><span class="text-success">In Transit</span></td>
                <td>
                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View</a> 
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
           
        </tbody>
    </table>
    </div>




</div>

</div>


@endsection
