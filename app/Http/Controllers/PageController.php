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
   public function companyProfile(){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sub_menu_list = DB::table('sub_menu_lists')
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
      return view('fontend.content.company_profile',compact('menu','sub_menu','sub_menu_list','sliders','com_profiles'));
   }
   public function teamOfExpert(){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sub_menu = DB::table('sub_menu')
                ->select('*')
                ->get();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
     $experts = DB::table('expert_team')
                ->select('*')
                ->get();
      return view('fontend.content.team_of_expert',compact('menu','sub_menu','sliders','experts'));
   }
   public function csr(){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sub_menu = DB::table('sub_menu')
                ->select('*')
                ->get();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
     $csrs = DB::table('csrs')
                ->select('*')
                ->get();
      return view('fontend.content.csr',compact('menu','sub_menu','sliders','csrs'));
   }
   public function service($menu_list_id){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sub_menu = DB::table('sub_menu')
                ->select('*')
                ->get();
     $sub_menu_list = DB::table('sub_menu_lists')
                ->select('*')
                ->get();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
     $service_info = DB::table('service_infos')
                ->select('*')
                ->where('menu_list_id','=',$menu_list_id)
                ->first();
     $facilities = DB::table('facilities')
                ->select('*')
                ->where('menu_list_id','=',$menu_list_id)
                ->get();
      return view('fontend.content.service',compact('menu','sub_menu','sliders','sub_menu_list','facilities','service_info'));
   }
}
