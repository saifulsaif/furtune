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
     $sub_menu_list = getValueByTBName('sub_menu_lists');
      return view('fontend.content.index',compact('menu','sub_menu','sliders','sub_menu_list'));
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
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $experts = getValueByTBName('expert_team');
      return view('fontend.content.team_of_expert',compact('menu','sub_menu','sliders','experts','sub_menu_list'));
   }
   public function csr(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sliders = getValueByTBName('slider');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $csrs = getValueByTBName('csrs');
      return view('fontend.content.csr',compact('menu','sub_menu','sliders','csrs','sub_menu_list'));
   }
   public function service($menu_list_id){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sliders = getValueByTBName('slider');
     $service_info = getSingle_id('menu_list_id',$menu_list_id,'service_infos');
     $facilities =  DB::table('facilities')
             ->select('*')
             ->Where('menu_list_id', '=', $menu_list_id)
             ->get();
      return view('fontend.content.service',compact('menu','sub_menu','sliders','sub_menu_list','facilities','service_info'));
   }
   public function homeCollection(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sliders = getValueByTBName('slider');
     $home_collection = getValueByTBName('home_services');
      return view('fontend.content.home_collection',compact('menu','sub_menu','sliders','sub_menu_list','home_collection'));
   }
   public function healthPackage(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sliders = getValueByTBName('slider');
     $health_package= getValueByTBName('health_packages');
      return view('fontend.content.health_package',compact('menu','sub_menu','sliders','sub_menu_list','health_package'));
   }
   public function franchisee(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sliders = getValueByTBName('slider');
      return view('fontend.content.franchisee',compact('menu','sub_menu','sliders','sub_menu_list'));
   }
   public function packageDetails($package_id){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('sub_menu');
     $sub_menu_list = getValueByTBName('sub_menu_lists');
     $sliders = getValueByTBName('slider');
     $packages = getSingle_id('id',$package_id,'health_packages');
     $package_details =  DB::table('package_details')
             ->select('*')
             ->Where('package_id', '=', $package_id)
             ->get();
      return view('fontend.content.package_details',compact('menu','sub_menu','sliders','sub_menu_list','package_details','packages'));
   }
}
