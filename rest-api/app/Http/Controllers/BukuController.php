<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index(){
        return Buku::all();
    }

    public function idBuku($id){
        $buku = Buku::where('id',$id)->first();
        if($buku == null){
            return response()->json([
                "message" => "Data not found"
            ], 404);
        }
        return $buku;
    }
}
