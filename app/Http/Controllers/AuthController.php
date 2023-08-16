<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postregister(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users,email',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password

        ]);
         return redirect()->route('login');
    }
    public function postlogin(Request $request){

        $request->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);
        $credentials=$request->only(['email', 'password']);
        $check=Auth::attempt($credentials);
        if(!$check){
            return redirect()->back();
        }
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


    public function editprofile(Request $request){

        $id=$request->id;
        $data=User::find($id);
        return view('Pages.edit-profile' ,compact('data'));
    }

    public function update(Request $request, $id){
        $data=User::find($id);
        $data->name=$request->name;
        $data->phonenumber=$request->phonenumber;
        $data->age=$request->age;
        $data->dob=$request->dob;
        $data->bloodgroup=$request->bloodgroup;
        $data->city=$request->city;
        $data->update();
        if($data){
            return redirect()->route('profile');
        }

        else{
            return redirect()->back();
        }
    }
}
