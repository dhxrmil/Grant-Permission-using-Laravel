<?php

namespace App\Http\Controllers;
use App\Models\usermod;
use App\Models\permissionmod;
use App\Models\bigmod;
use App\Models\sportsmod;
use App\Models\Electronicmod;
use App\Models\Furnituremod;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Furniturecon extends Controller
{
    public function viewfurniture(Request $request)
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user.furniture')->with('data', $data);
    }

    public function furnitureinsertview()
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user/addfurniture')->with('data', $data);
    }

    public function insertfurniture(Request $request)
    {
        $validData = $request->validate([
            'fname' => 'required',
            'fdesc' => 'required',
        ], [
            'fname.required' => 'Name is required',
            'fdesc.required' => 'Description is required',
        ]);
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        Furnituremod::create($validData);
        return redirect('user/furniture')->with('data', $data);
    }

    public function furniturelisting()
    {
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        $datamod = Furnituremod::all();
        return view('user/displayfurniture')->with('data', $data)->with('datamod', $datamod);
    }

    public function furnitureedit(Request $request, $id)
    {
        $loginId = Session('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        $updt = Furnituremod::find($id);
        return view('user/furnitureupdate')->with('updt', $updt)->with('data', $data);
    }

    public function furnitureupdate(Request $request, $id)
    {
        $inpt = $request->all();
        Furnituremod::find($id)->update($inpt);
        $datamod = Furnituremod::all();
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return redirect('user/displayfurniture')->with('data', $data)->with('datamod', $datamod);
    }

    public function displayfurniture(Request $request)
    {
        $datamod = Furnituremod::all();
        $loginId = Session::get('loginId');
        $data = permissionmod::where('userid', '=', $loginId)->get()->toArray();
        return view('user/displayfurniture')->with('data', $data)->with('datamod', $datamod);
    }

    public function furnituredelete($id)
    {
        $delete = furnituremod::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        
        return redirect('user/displayfurniture');
    }
}
