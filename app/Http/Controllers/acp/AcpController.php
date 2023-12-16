<?php
namespace App\Http\Controllers\acp;

use App\Http\Controllers\Controller;

class AcpController extends Controller{
    public function index(){
        return view("acp.index");
    }

}
