<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sub_menu = DB::table('sub_menu')
                ->select('*')
                ->get();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
      return view('fontend.content.index',compact('menu','sub_menu','sliders'));
   }
}
