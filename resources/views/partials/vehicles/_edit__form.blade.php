<div class="row">

        <div class="col-md-12">
          @include('partials._errors')
        </div>  

        
        <form class="" id="vehicle_form" role="form" method="POST" 
          action="{{ route('vehicles.update', ['vehicle' => $vehicle->id]) }}">

            {{ csrf_field() }}


           <div class="form-group col-md-6">
           
                <label for="name" class="control-label">Vehicle Name</label>
                
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" 
                value="{{ old('name') ?: $vehicle->name }}"> 
           
                <p class="help-block">Name the vehicle in gereral.</p>
                
           </div>
           

            
            <div class="form-group col-md-6">
                <label for="plate_no" class="control-label">Plate No.</label>
                  <input class="form-control" id="plate_no" name="plate_no" placeholder="Vehicle Registration Number" type="text" value="{{ old('plate_no') ?: $vehicle->plate_no }}" >
                    <p class="help-block">The number used to identify the vehicle.</p>
                
            </div>

            <div class="form-group col-md-6">
            <?php $classes = getVehicleClass(); ?>
                <label for="vehicle_class" class="control-label">Vehicle Class</label>
                  <select class="form-control" id="vehicle_class" name="vehicle_class">
                  <option disabled selected value>-- Select Class --</option>
                  @foreach($classes as $index => $class) 
                   <option value="{{ $index }}" {{ $vehicle->vehicle_class != $index ?:'selected' }}>{{ $class }}</option>
                  @endforeach
                  </select>
                    <p class="help-block">What type of vehicle is it?</p>
               
                
            </div>

            <div class="form-group col-md-6">
            <?php $fuels = getFuelType(); ?>
                <label for="plate_no" class="control-label">Fuel Type</label>
                  <select class="form-control" id="fuel_type" name="fuel_type">
                  <option disabled selected value>-- Select Fuel Type --</option>
                   @foreach($fuels as $index => $fuel) 
                    <option value="{{ $index }}" {{ $vehicle->fuel_type != $index ?:'selected' }}>{{ $fuel }}</option>
                  @endforeach
                  </select>
                    <p class="help-block">What type of fuel it needs to run?</p>
                
            </div>

            

            <div class="form-group col-xs-12 col-md-6 col-lg-6">
                
                <div class="" style="padding: 0px;">
                <label for="owner_id" class="control-label">Owner</label>
                    
                 <select class="form-control" id="owner-select" name="owner_id">
                    <option value="0" {{ $vehicle->owner_id != 0 ?:'selected' }}>{{ auth()->user()->company->name }}</option>
                    <option value="2" {{ $vehicle->owner_id != 2 ?:'selected' }}>Neeraj Sathe - in people</option>
                    <option value="3" {{ $vehicle->owner_id != 3 ?:'selected' }}>Deep Thakkar - in people</option>
                    <option value="4" {{ $vehicle->owner_id != 4 ?:'selected' }}>Jitendra Transports - in companies</option>
                    
                  </select>
                <p class="help-block">Who owns the vehicle?</p>
                </div>
           </div>
           

             <div class="form-group col-md-6">
           
                <label for="chasis_no" class="control-label">Chasis Number <small>(optional)</small></label>
                
                <input class="form-control" id="chasis_no" name="chasis_no" placeholder="Chasis Number" type="text" value="{{ old('chasis_no') ?: $vehicle->chasis_no }}">
           
                <p class="help-block">Vehicle Chasis number</p>
                
           </div>
           

            
            <div class="form-group col-md-6">
                <label for="engine_no" class="control-label">Engine Number <small>(optional)</small></label>
                  <input class="form-control" id="engine_no" name="engine_no" placeholder="Engine Number" type="text" 
                  value="{{ old('engine_no') ?: $vehicle->engine_no }}">
                    <p class="help-block">The number used to identify the vehicle.</p>
                
            </div>


            <div class="form-group col-md-6">
                <label for="date_of_registration" class="control-label">Date of registration <small>(optional)</small></label>
                  <input class="form-control date-picker" id="date_of_registration" name="date_of_registration" placeholder="Vehicle Registration Date" type="text"  data-date-format="dd/mm/yyyy"
                  value="{{ old('date_of_registration') ?: $vehicle->date_of_registration }}">
                    <p class="help-block">When was the vehicle registered.</p>
                
            </div>


            <div class="clearfix"></div>

          <hr>

             
            <div class="clearfix"></div>

             <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                  <button  type="submit" class="btn btn-info" style="width: 100%;">Update Vehicle</button>
                
            </div>
         
          
        </form>

         
        

       
   
</div>