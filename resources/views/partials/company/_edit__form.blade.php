<div class="row">
        <form class=""  role="form" method="POST" action="{{ route('company.logo') }}" enctype="multipart/form-data">
          
            <div class="form-group col-md-12">
                {{ csrf_field() }}
                <img src="{{ auth()->user()->company->logo }}" class="upload-image"><br>
                <label for="file">Company Logo</label>
                <input id="file" name="logo" type="file">
                <!--<p class="help-block">Example block-level help text here.</p>-->
                
            </div>


             <div class="form-group col-md-12">
                <div class="">
                    <button type="submit" class="btn btn-sm btn-success">Upload Logo</button>
                </div>
                <hr>
            </div>



        </form> 

        <form class="" id="company_form" role="form" method="POST" action="{{ route('company.update') }}">

            {{ csrf_field() }}


           <div class="form-group col-md-6">
           
                <label for="inputEmail1" class="control-label">Company Name</label>
                
                <input class="form-control" id="name" name="name" placeholder="Name" value="{{ auth()->user()->company->name }}" type="text">
           
                <p class="help-block">Example block-level help text here.</p>
                
           </div>
           

            
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Company Email</label>
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="{{ auth()->user()->company->email }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>
          
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Address</label>
                  <input class="form-control" id="address" name="address" placeholder="Address" type="text" value="{{ auth()->user()->company->address }}">
                    <p class="help-block">Example block-level help text here.</p>
             
            </div>


            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Country</label>
                  <input class="form-control" id="country" name="country" placeholder="Conutry" value="{{ auth()->user()->company->country }}" type="text">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">City</label>
                  <input class="form-control" id="city" name="city" placeholder="City" type="text" value="{{ auth()->user()->company->city }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">State</label>
                  <input class="form-control" id="state" name="state" placeholder="State" type="text" value="{{ auth()->user()->company->state }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Pin Code</label>
                  <input class="form-control" id="zip" name="zip" placeholder="Pin Code" type="text" value="{{ auth()->user()->company->zip }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Phone Nos.</label>
                  <input class="form-control" id="phones" name="phones" placeholder="Phone Nos." type="text" value="{{ auth()->user()->company->phones }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Website</label>
                  <input class="form-control" id="website" name="website" placeholder="Website" type="text" value="{{ auth()->user()->company->website }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>

            <div class="clearfix"></div>
         
          
        </form>
   
</div>