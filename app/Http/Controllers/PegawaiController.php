<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        return Pegawai::all();
    }

    public function idPegawai($id){
        $pegawai = Pegawai::where('id',$id)->first();
        if($pegawai == null){
            return response()->json([
                "message" => "Data not found",
                "code" => "404"
            ], 404);
        }
        return $pegawai;
        
    }
}
