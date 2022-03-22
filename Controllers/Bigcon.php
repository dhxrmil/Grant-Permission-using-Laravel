<?php

namespace App\Http\Controllers;
use App\Models\bigmod;
use App\Models\usermod;
use App\Models\permissionmod;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Bigcon extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function success()
    {
        return view('dashboard/successlogin');
    } 

/*     public function authenticate()
    {
        if (Auth::attempt(['adminid' => $adminid, 'password' => $password]))
        {
            return redirect()->intended('login');
        }
    }
 */

    public function authenticate(Request $request)
    {
        $adminid = $request->email;
        $password = $request->password;
        $try = ['adminid' => $adminid, 'password' => $password];
        $bigmod = new bigmod();
        $result =  $bigmod::where($try)->exists();
        /* $abc = Session::get('loginId');
        if(empty($abc))
        {
            return view('dashboard/successlogin');
        }
        else
        {
            return view('login')
        } */

        if($result != NULL)
        {
            return view('dashboard/successlogin');
        }   
        return redirect('')->with('error', 'Please Enter Valid Credentials!');
    }  

    public function logout()
    {
        return redirect('login');
    }  

    public function userdata()
    {
        $data = usermod::all();
        return view('userdata')->with('data', $data);
    }

    public function insertuser()
    {
        return view('insertuser');
    }

    public function insertdata(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        usermod::create($validatedData);
        return redirect('userdata');
    }
    
    public function edit(Request $request, $id)
    {
        $updt = usermod::find($id);
        return view('update')->with('updt', $updt);
    }

    public function update(Request $request, $id)
    {
        $usrs = usermod::find($id);
        $inpt = $request->all();
        $usrs->update($inpt);
        return redirect('userdata');
    }

    public function deldata($id)
    {
        usermod::destroy($id);
        return redirect('userdata');
    }

    public function delete($id)
    {
        $delete = usermod::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        } 

        //  Return response
        return  response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function permission()
    {
        $abc = usermod::all();
        return view('permissions')->with('abc', $abc);
    }

    public function grantpermission($id)
    {
        $data['key'] = permissionmod::where('userid', '=', $id)->get()->toArray(); 
        if(empty($data['key']))
        {
            $data['key']['0']['userid'] = 0;
            $data['key']['0']['category'] = 0;
            $data['key']['0']['create'] = 0;
            $data['key']['0']['read'] = 0;
            $data['key']['0']['update'] = 0;
            $data['key']['0']['delete'] = 0;

            $data['key']['1']['userid'] = 0;
            $data['key']['1']['category'] = 0;
            $data['key']['1']['create'] = 0;
            $data['key']['1']['read'] = 0;
            $data['key']['1']['update'] = 0;
            $data['key']['1']['delete'] = 0;

            $data['key']['2']['userid'] = 0;
            $data['key']['2']['category'] = 0;
            $data['key']['2']['create'] = 0;
            $data['key']['2']['read'] = 0;
            $data['key']['2']['update'] = 0;
            $data['key']['2']['delete'] = 0;
        
        }        
        $data['id'] = $id;
        $returnHTML = view('grant_permissions')->with('data', $data)->render();
        return response()->json(array('success'=>true, 'html'=>$returnHTML));
    }

    public function insertpermission(Request $request, $id)
    {
        $result = $request->get('data');
        foreach($result as $key => $value)
        {
            $result[$key]['userid'] = $id;
        }
        $result['sports']['category'] = "sports";
        $result['electronics']['category'] = "electronics";
        $result['furniture']['category'] = "furniture";
        foreach($result as $data)
        {
            permissionmod::create($data);
        }
        
    }

    public function updatepermissions(Request $request, $id)
    {
        $response = $request->get('data');
        foreach ($response as $key => $value) {
            $response[$key]['userid'] = $id;
        }
        //dd($response);
        permissionmod::where('userid', '=', $id)->where('category', '=', 'sports')->update($response['sports']);
        permissionmod::where('userid', '=', $id)->where('category', '=', 'electronics')->update($response['electronics']);
        permissionmod::where('userid', '=', $id)->where('category', '=', 'furniture')->update($response['furniture']);
    }
}
