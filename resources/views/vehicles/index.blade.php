@extends('layouts.app')

@section('content')


<!--page title and breadcrumb end -->
<div class="ui-content-body" style="padding: 0px;">
<div class="ui-container">



    <div class="table-responsive">
   <table class="table table-striped table-hover table-tdrive" style="margin: 0px;"> 
        <thead>
            <tr>
                <th>&nbsp; #</th>
                <th>Name</th>
                <th>Plate No.</th>
                <th>Lorry Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          @foreach($vehicles as $vehicle)
          
            <tr id="vehicle-{{$vehicle->id}}">
               
                <td>&nbsp; 1</td>
                <td>{{ $vehicle->name }}</td>
                <td>{{ $vehicle->plate_no }}</td>
                <td><span class="text-info">None</span></td>
                <td>
                    <a href="{{ route('vehicles.show', ['vehicle' => $vehicle->id , 'branch' => $branch->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View</a> 
                    <a href="{{ route('vehicles.edit', ['vehicle' => $vehicle->id , 'branch' => $branch->id ]) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                    <a  href="#" @click="deleteVehicle({{ $vehicle->id  }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                </td>
               
            </tr>

          @endforeach  
           
           
        </tbody>
    </table>
    </div>




</div>

</div>


@endsection
