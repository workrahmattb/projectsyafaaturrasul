<?php

namespace App\Http\Controllers;

use App\Models\Datapondok;
use Illuminate\Http\Request;

class DatapondokController extends Controller
{
    public function index(){
        $data = Datapondok::all();
        return view('datapondok', compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Datapondok::create($request->all());
        return redirect()->route('datapondok')->with('succes','Data Berhasil Didaftarkan');
    }

    public function tampilkandata($id){
        $data = Datapondok::find($id);
        //dd($data); 
        return view('tampildata', compact('data')); 
    }

    public function updatedata(Request $request, $id){
        $data = Datapondok::find($id);
        $data->update($request->all());
        return redirect()->route('datapondok')->with('succes','Data Berhasil diubah');
    }

    public function delete($id){
        $data = Datapondok::find($id);
        $data->delete();
        return redirect()->route('datapondok')->with('succes','Data Berhasil dihapus');
    }
}
