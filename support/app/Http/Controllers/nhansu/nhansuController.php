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
         if (empty($file['name'])) {
            return redirect()->route('importchamcong')->with('success', 'Không được bỏ trống');
        }
        $destinationpath = public_path().'/filechamcong';
        $res = $Request->file('filechamcong')->move( $destinationpath,$file['name'] );
        $my_new_path = $res->getPath(); // retu
       
        
        $import = new importChamCong;
        Excel::import($import,$my_new_path.'/'.$file['name']);
        return redirect()->route('importchamcong')
        ->with('success', 'Import thành công '.$import->msg['success'].' thất bại '.$import->msg['error'].'')
        ->with('list_name_erro', $import->msg['name_err']);
        // dd($import);
    }
    
}
