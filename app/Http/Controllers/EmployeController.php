<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Laravel\Sail\Console\PublishCommand;

class EmployeController extends Controller{
    public function index(){
        $nma =Employe::all();
        return view ('data',compact('nma') );
    }
    
    public function tambahdata(){
        return view('tambahdata');
    }
    
    public function insertdata(Request $request){
        //dd($request-> all());
        Employe::create($request-> all());
        return redirect()->route('data')->with('success','Data Yang Anda Masukkan Berhasil');
    }

    public function tampilkandata($id){
        $data = Employe::find($id);
        //dd($data);
        return view('tampilkandata',compact('data'));
    }
    public function updatedata(Request $request,$id){
        $data=Employe::find($id);
        $data->update($request->all());
        return redirect()->route('data')->with('success','Data Berhasil di Perbarui');
    }

}

















