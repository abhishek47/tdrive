<div class="row">

        <div class="col-md-12">
          @include('partials._errors')
        </div>  

        <form class=""  role="form" method="POST" action="{{ route('profile.avatar') }}" enctype="multipart/form-data">
          
            <div class="form-group col-md-12">
                {{ csrf_field() }}
                <img src="{{ auth()->user()->avatar }}" class="user-avatar-image"><br>
                <label for="file">Your Avatar</label>
                <input id="file" name="avatar" type="file">
                <!--<p class="help-block">Example block-level help text here.</p>-->
                
            </div>


             <div class="form-group col-md-12">
                <div class="">
                    <button type="submit" class="btn btn-sm btn-success">Upload Avatar</button>
                </div>
                <hr>
            </div>



        </form> 

        <form class="" id="company_form" role="form" method="POST" action="{{ route('profile.update') }}">

            {{ csrf_field() }}


           <div class="form-group col-md-6">
           
                <label for="inputEmail1" class="control-label">Your Name</label>
                
                <input class="form-control" id="name" name="name" placeholder="Name" value="{{ auth()->user()->name }}" type="text">
           
                <p class="help-block">Example block-level help text here.</p>
                
           </div>
           

            
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Your Email</label>
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="{{ auth()->user()->email }}">
                    <p class="help-block">Example block-level help text here.</p>
                
            </div>
          
            

             
            <div class="clearfix"></div>

             <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                  <button  type="submit" class="btn btn-success" style="width: 100%;">Save Details</button>
                
            </div>
         
          
        </form>

         <div class="clearfix"></div>

        <div class="page-header" style="margin: 0px;margin-bottom: 15px;margin-left: 10px;" >
          <h4 >Change Password</h4>
        </div>

        <form class="" id="company_form" role="form" method="POST" action="{{ route('profile.password') }}">

            {{ csrf_field() }}


           <div class="form-group col-md-6">
           
                <label for="inputEmail1" class="control-label">Current Password</label>
                
                <input class="form-control" id="old_password" name="old_password" placeholder="Old Password"  type="password">
           
              
                
           </div>
           

            <div class="clearfix"></div>

            
            <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">New Password</label>
                  <input class="form-control" id="password" name="password" placeholder="New Password"  type="password">
                
                
            </div>

             <div class="form-group col-md-6">
                <label for="inputEmail1" class="control-label">Repeat New Password</label>
                  <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password"  type="password">
                
                
            </div>
          
            

             
            <div class="clearfix"></div>

             <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                  <button  type="submit" class="btn btn-warning" style="width: 100%;">Update Password</button>
                
            </div>
         
          
        </form>

        <div class="clearfix"></div>

        <div class="page-header" style="margin: 0px;margin-bottom: 15px;margin-left: 10px;" >
          <h4 >Notifications</h4>
        </div>

        <form class="" id="company_form" role="form" method="POST" action="{{ route('profile.password') }}">

            {{ csrf_field() }}

            

           <div class="form-group col-md-12">
                
                 <h5><b>Send me email when : </b></h5>  

               <div class="checkbox">
                  <label>
                      <input value="" type="checkbox">
                      Option one is this and that—be sure to include why it's great
                  </label>
              </div>

               <div class="checkbox">
                  <label>
                      <input value="" type="checkbox">
                      Option one is this and that—be sure to include why it's great
                  </label>
              </div>
                
           </div>


           
           

            

            
         
          
            

             
            <div class="clearfix"></div>

             <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                  <button  type="submit" class="btn btn-info" style="width: 100%;">Save Settings</button>
                
            </div>
         
          
        </form>
   
</div>