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
                ->get($sub_menu);
                dd();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
      return view('fontend.content.index',compact('menu','sub_menu','sliders'));
   }
   public function companyProfile(){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sub_menu = DB::table('sub_menu')
                ->select('*')
                ->get();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
     $com_profiles = DB::table('company_profile')
                ->select('*')
                ->get();
      return view('fontend.content.company_profile',compact('menu','sub_menu','sliders','com_profiles'));
   }
}
