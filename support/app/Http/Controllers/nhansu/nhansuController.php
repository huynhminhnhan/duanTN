<?php

namespace App\Http\Controllers\nhansu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Imports\importChamCong;
use Maatwebsite\Excel\Facades\Excel;


class nhansuController extends Controller
{
    public function viewImportChamCong() {
        return view('nhansu/import');
    }
    public function importData(Request $Request) {
         $file = $_FILES['filechamcong'];
        $destinationpath = public_path().'/filechamcong';
        $res = $Request->file('filechamcong')->move( $destinationpath,$file['name'] );
        $my_new_path = $res->getPath(); // retu

        // $file = $Request->file('filechamcong');
        // $fileName = $file->getClientOriginalName();
        // $filePath = $file->getPathName();
        // echo realpath($fileName);
        // exit;
     
        Excel::import(new importChamCong,$my_new_path.'/'.$file['name']);
    }
    
}
