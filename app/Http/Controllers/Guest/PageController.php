<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train :: all();
        $trains = Train::where('date', '>=', '2024-04-10')->get();
        
        return view("home" , compact("trains"));
    }

}
