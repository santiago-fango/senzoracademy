<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function __construct(){
        $this->middleware('can:Ver Dashboard')->only('index');
    }
        
    public function index(){
        return view('admin.index');
    }
}
