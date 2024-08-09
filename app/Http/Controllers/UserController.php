<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function getdata() {
       // $user = User::get();
       
            $user = auth()->user(); // Get the currently logged-in user
            return view('Templates/templates1', compact('user')); // Pass the user data to the view
        
        
    }
    
    public function update(Request $request)
    {

        $user = Auth::user();
    
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'about' => 'nullable|string',
            'phone' => 'nullable|string|max:15',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role = $request->role;
        $user->about = $request->about;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->linkedin = $request->linkedin;
    
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->extension();
            $photo->move(public_path('userimages/photos'), $photoName);
            $user->photo = 'userimages/photos/' . $photoName;
        }
        
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->extension();
            $logo->move(public_path('userimages/logos'), $logoName);
            $user->logo = 'userimages/logos/' . $logoName;
        }
        
        // Save the user object
        

        $user->save();
    
        return view('Templates/templates');
    }
    
}
