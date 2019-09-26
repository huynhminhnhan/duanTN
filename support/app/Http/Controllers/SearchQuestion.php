<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchQuestion extends Controller
{
    public function init (Request $Request) {
        $arr = [
            "name" => 'nhan',
            "age"=> 'hung'
        ];
        return $Request->json($arr);
    }
}