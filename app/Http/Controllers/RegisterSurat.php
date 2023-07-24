<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class registersurat extends Controller
{
    //
    public function index(){
        return view('formsurat');
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'nik'=>'required|max:16',
            'kk'=>'required|max:16',
            'keperluan'=>'required',
            'keterangan'=>'required',
            'nohp'=>'required',
            'email'=>'email:dns|nullable'
        ]);
        post::create($validatedData);
        //redirect dibenerin dengan halaman terpisah
        return redirect('/success');
    }
}
