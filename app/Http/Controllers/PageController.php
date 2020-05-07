<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{

   public function common(){
     $menu = DB::table('menu')
                ->select('*')
                ->get();
     $sliders = DB::table('slider')
                ->select('*')
                ->get();
    $sub_menu_list = DB::table('sub_menu_lists')
               ->select('*')
               ->get();
     $dashboard_array = [];
     $dashboard_array['menu'] = $menu;
     $dashboard_array['sliders'] = $sliders;
     $dashboard_array['sub_menu_list'] = $sub_menu_list;
     return $dashboard_array;
   }
   public function index(){
     $dashboard_array = $this->common();
      return view('fontend.content.index',compact('dashboard_array'));
   }
   public function companyProfile(){
     $dashboard_array = $this->common();
     $com_profiles = DB::table('company_profile')
                ->select('*')
                ->get();
      return view('fontend.content.company_profile',compact('dashboard_array','com_profiles'));
   }
   public function teamOfExpert(){
     $dashboard_array = $this->common();
     $experts = DB::table('expert_team')
                ->select('*')
                ->get();
      return view('fontend.content.team_of_expert',compact('dashboard_array','experts'));
   }
   public function csr(){
     $dashboard_array = $this->common();
     $csrs = DB::table('csrs')
                ->select('*')
                ->get();
      return view('fontend.content.csr',compact('dashboard_array','csrs'));
   }
   public function service($menu_list_id){
    $dashboard_array = $this->common();
     $service_info = DB::table('service_infos')
                ->select('*')
                ->where('menu_list_id','=',$menu_list_id)
                ->first();
     $facilities = DB::table('facilities')
                ->select('*')
                ->where('menu_list_id','=',$menu_list_id)
                ->get();
      return view('fontend.content.service',compact('dashboard_array','facilities','service_info'));
   }
}
