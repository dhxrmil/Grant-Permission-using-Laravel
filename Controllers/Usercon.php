<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usermod;
use App\Models\permissionmod;
use App\Models\bigmod;
use App\Models\sportsmod;
use Illuminate\Support\Facades\Session;

class Usercon extends Controller
{
    public function login()
    {
        return view('user/userlogin');
    }

    public function usersuccesslogin()
    {
        return view('user/usersuccesslogin');
    }

    public function userauthenticate(Request $request)
    {
        $userid = $request->email;
        $password = $request->password;
        $try = ['email' => $userid, 'password' => $password];
        $Usermod = new usermod();
        $result =  $Usermod::where($try)->exists();
        $get = $Usermod::where($try)->get('id')->toArray();
        
        //dd($data);
       // $ssn = Session('loginId', $loginId);
        //dd($ssn);
        
        if($result != NULL)
        {
            $loginId = $get[0]['id'];
        //dd($loginId);
        Session::put('loginId', $loginId);
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
            //$ssn = Session('loginId', $loginId);
             //$request->Session()->put('loginId', $try);
            //dd($request->Session()->get('loginId'));
            $x = Session('loginId');
            //dd($x); 
            
            return view('user/welcomeuser')->with('data', $data);
        }  
        else
        {
            return redirect('userlogin')->with('error', 'Please Enter Valid Credentials!');
        }
    }

     public function logout()
    {
        return view('user/userlogin');
    } 

    public function viewsports(Request $request)
    {
        $loginId = Session('loginId');
        //dd($loginId);
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        //dd($data);
        return view('user/sports')->with('data', $data);
    }
    
    public function insertsports(Request $request)
    {
        $validData = $request->validate([
            'sname' => 'required',
            'sdesc' => 'required',
        ], [
            'sname.required' => 'Name is required',
            'sdesc.required' => 'Description is required',
        ]);

        sportsmod::create($validData);
        return redirect('user/addsports');
    }
}

