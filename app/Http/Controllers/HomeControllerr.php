<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainPageContent;
use App\Models\Jawharacategory;

class HomeControllerr extends Controller
{
    public function index(){
        $mainpage = MainPageContent::all();
        $categories = Jawharacategory::all();

        return view('front.main', compact('mainpage','categories'));
    }

    
    // public function singleproduct(){
    //     return view('singleproduct');
    // }
}