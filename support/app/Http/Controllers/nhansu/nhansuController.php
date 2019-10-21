<?php

namespace App\Http\Controllers\nhansu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class nhansuController extends Controller
{
    public function viewImportChamCong() {
        return view('nhansu/import');
    }
    public function importData() {
        dd('hehe');
    }
    
}
