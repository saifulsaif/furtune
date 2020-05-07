<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sliders = getValueByTBName('slider');
      return view('fontend.content.index',compact('menu','sub_menu','sliders'));
   }
   public function companyProfile(){
     $menu = getValueByTBName('menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sub_menu = getValueByTBName('sub_menu');
     $sliders = getValueByTBName('slider');
     $com_profiles = getValueByTBName('company_profile');
      return view('fontend.content.company_profile',compact('menu','sub_menu','sub_menu_list','sliders','com_profiles'));
   }
   public function teamOfExpert(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sliders = getValueByTBName('slider');
     $experts = getValueByTBName('slider');
      return view('fontend.content.team_of_expert',compact('menu','sub_menu','sliders','experts'));
   }
   public function csr(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sliders = getValueByTBName('slider');
     $csrs = getValueByTBName('csrs');
      return view('fontend.content.csr',compact('menu','sub_menu','sliders','csrs'));
   }
   public function service($menu_list_id){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sliders = getValueByTBName('slider');
     $service_info = getSingle_id('menu_list_id',$menu_list_id,'service_infos');
     $facilities = getSingle_id('menu_list_id',$menu_list_id,'facilities');
      return view('fontend.content.service',compact('menu','sub_menu','sliders','sub_menu_list','facilities','service_info'));
   }
}
