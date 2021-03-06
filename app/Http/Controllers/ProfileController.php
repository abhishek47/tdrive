<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('company-registered');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $page = 'profile';
        return view('profile.edit', compact('page'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {	
    	auth()->user()->update($request->all());

    	flash('Profile Details Saved!')->success();
  
        return back();
    }


    public function updateAvatar(Request $request)
    {
    	$this->validate($request, [
    		'avatar' => ['required', 'image']
    	]);

    	auth()->user()->avatar = $request->file('avatar')->store('avatars', 'public');

    	auth()->user()->save();
    	
    	flash('User Avatar Updated!')->success();
    	
    	return back();
    }


    public function updatePassword(Request $request)
   {
      $this->validate($request, [
          'old_password' => 'required',
          'password' => 'required|string|min:6|confirmed'
        ]);

      $old_password = $request->get('old_password');
      $password = $request->get('password');

      if(!\Hash::check($old_password, auth()->user()->password))
      {
      	  flash('Please enter your current password correct!')->error();
          return back();
      } 


      auth()->user()->password = bcrypt($password);

      auth()->user()->save();

       flash('Your Password was updated successfully!')->success();
     
      return redirect('/profile');
   }


}
