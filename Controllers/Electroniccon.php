<?php

namespace App\Http\Controllers;
use App\Models\usermod;
use App\Models\permissionmod;
use App\Models\bigmod;
use App\Models\sportsmod;
use App\Models\Electronicmod;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Electroniccon extends Controller
{
    public function viewelectronics(Request $request)
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user.electronics')->with('data', $data);
    }

    public function electronicsinsertview()
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user/addelectronics')->with('data', $data);
    }

    public function insertelectronics(Request $request)
    {
        $validData = $request->validate([
            'ename' => 'required',
            'edesc' => 'required',
        ], [
            'ename.required' => 'Name is required',
            'edesc.required' => 'Description is required',
        ]);
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        Electronicmod::create($validData);
        return redirect('user/electronics')->with('data', $data);
    }

    public function electronicslisting()
    {
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        $datamod = Electronicmod::all();
        return view('user/displayelectronics')->with('data', $data)->with('datamod', $datamod);
    }

    public function electronicsedit(Request $request, $id)
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        $updt = Electronicmod::find($id);
        return view('user/electronicsupdate')->with('updt', $updt)->with('data', $data);
    }

    public function electronicsupdate(Request $request, $id)
    {
        $inpt = $request->all();
        Electronicmod::find($id)->update($inpt);
        $datamod = Electronicmod::all();
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return redirect('user/displayelectronics')->with('data', $data)->with('datamod', $datamod);
    }

    public function displayelectronics(Request $request)
    {
        $datamod = Electronicmod::all();
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user/displayelectronics')->with('data', $data)->with('datamod', $datamod);
    }

    public function electronicsdelete($id)
    {
        $delete = Electronicmod::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        
        return redirect('user/displayelectronics');
    }
}
