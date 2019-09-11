<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsightController extends Controller
{
    public function index(Request $request){
        return view('admin.insight.insight');
    }
}
