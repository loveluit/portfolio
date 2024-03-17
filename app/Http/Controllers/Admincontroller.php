<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class Admincontroller extends Controller
{
    
    public function Index(){
        return view('Admin.index');
    }

    public function Store(Request $request){

        $data = new post;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();

    }

}
