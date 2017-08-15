<div class="row">
    
        <form class="" role="form" method="POST" action="{{ route('company.update') }}">
         
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Company Name</label>
                  <input class="form-control" id="name" name="name" placeholder="Name" value="{{ auth()->user()->company->name }}" type="text">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>
           

            
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Company Email</label>
                  <input class="form-control" id="inputEmail1" placeholder="Email" type="email" value="{{ auth()->user()->company->email }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>
          
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Address</label>
                  <input class="form-control" id="inputEmail1" placeholder="Address" type="text" value="{{ auth()->user()->company->address }}">
                    <p class="help-block">Example block-level help text here.</p>
             
            </div>


            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Conutry</label>
                  <input class="form-control" id="inputEmail1" placeholder="Conutry" value="{{ auth()->user()->company->country }}" type="text">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">City</label>
                  <input class="form-control" id="inputEmail1" placeholder="City" type="text" value="{{ auth()->user()->company->city }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">State</label>
                  <input class="form-control" id="inputEmail1" placeholder="State" type="text" value="{{ auth()->user()->company->state }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Zip</label>
                  <input class="form-control" id="inputEmail1" placeholder="Pin Code" type="text" value="{{ auth()->user()->company->zip }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Phone</label>
                  <input class="form-control" id="inputEmail1" placeholder="Phone Nos." type="text" value="{{ auth()->user()->company->phones }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Website</label>
                  <input class="form-control" id="inputEmail1" placeholder="Website" type="text" value="{{ auth()->user()->company->website }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

            <div class="clearfix"></div>
         
            <div class="form-group col-md-6">
                <div class="">
                    <button type="submit" class="btn btn-success">Update Details</button>
                </div>

            </div>
        </form>
   
</div>