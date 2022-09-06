<?php

namespace App\Http\Controllers;
use App\imageM;
use Illuminate\Http\Request;

class imageC extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $name=$request->file('image')->getClientOriginalName();
        $size=$request->file('image')->getsize();
        $request->image->move(public_path('image'),$name);
        $data=new imageM;
        $data->name=$name;
        $data->size=$size;
        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data=imageM::all();
        return view('upload',['data'=>$data]);
    }
}
