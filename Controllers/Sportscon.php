<?php

namespace App\Http\Controllers;
use App\Models\usermod;
use App\Models\permissionmod;
use App\Models\bigmod;
use App\Models\sportsmod;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Sportscon extends Controller
{
    public function viewsports(Request $request)
    {
        $loginId = Session('loginId');
        //dd($loginId);
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        //dd($data);
        return view('user.sports')->with('data', $data);
    }

    public function sportinsertview()
    {
        $loginId = Session('loginId');
        //dd($loginId);
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        //dd($data);
        return view('user/addsports')->with('data', $data);
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
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        sportsmod::create($validData);
        return redirect('user/sports')->with('data', $data);
    }

    public function sportslisting()
    {
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        $datamod = sportsmod::all();
        return view('user/displaysports')->with('data', $data)->with('datamod', $datamod);
    }

    public function sportsedit(Request $request, $id)
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        $updt = sportsmod::find($id);
        return view('user/sportsupdate')->with('updt', $updt)->with('data', $data);
    }

    public function sportsupdate(Request $request, $id)
    {
        $inpt = $request->all();
        sportsmod::find($id)->update($inpt);
        $datamod = sportsmod::all();
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return redirect('user/displaysports')->with('data', $data)->with('datamod', $datamod);
    }

    public function displaysports(Request $request)
    {
        $datamod = sportsmod::all();
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user/displaysports')->with('data', $data)->with('datamod', $datamod);
    }

    public function sportsdelete($id)
    {
        $delete = sportsmod::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        
        return redirect('user/displaysports');
    }
}
