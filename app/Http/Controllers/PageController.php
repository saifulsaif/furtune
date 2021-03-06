<?php

namespace App\Http\Controllers;
use DB;
use App\franchisee;
use App\feedback;
use App\sub_menu_list;
use App\make_appointment;
use App\doctors;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sliders = getValueByTBName('slider');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $partners = getValueByTBName('corporate_partners');
     $index_infos = getValueByTBName('index_infos');
     $lab_infos = getValueByTBName('lab_infos');
     $corporate_services= getValueByTBName('corporate_services');
     $site_infos= first_row_date('site_infos');
     $events = getValueByTBName('events');
     $galleries = DB::table('galleries')
             ->select('*')
             ->limit(8)
             ->get();
      return view('fontend.content.index',compact('events','site_infos','menu','sub_menu','sliders','sub_menu_list','partners','index_infos','lab_infos','corporate_services','site_infos','galleries'));
   }
   public function companyProfile(){
     $menu = getValueByTBName('menu');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sub_menu = getValueByTBName('submenuses');
     $sliders = getValueByTBName('slider');
     $com_profiles = getValueByTBName('company_profile');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.company_profile',compact('site_infos','menu','sub_menu','sub_menu_list','sliders','com_profiles'));
   }
   public function teamOfExpert(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sliders = getValueByTBName('slider');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $experts = getValueByTBName('expert_team');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.team_of_expert',compact('site_infos','menu','sub_menu','sliders','experts','sub_menu_list'));
   }
   public function expertDetails($id){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sliders = getValueByTBName('slider');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $experts = DB::table('expert_team')
             ->select('*')
             ->where('id','=',$id)
             ->get();
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.expert_detials',compact('site_infos','menu','sub_menu','sliders','experts','sub_menu_list'));
   }
   public function csr(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sliders = getValueByTBName('slider');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $csrs = getValueByTBName('csrs');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.csr',compact('site_infos','menu','sub_menu','sliders','csrs','sub_menu_list'));
   }
   public function service($menu_list_id){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $service_info = getSingle_id('menu_list_id',$menu_list_id,'service_infos');
     $facilities =  DB::table('facilities')
             ->select('*')
             ->Where('menu_list_id', '=', $menu_list_id)
             ->get();
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.service',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','facilities','service_info'));
   }
   public function homeCollection(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $home_collection = getValueByTBName('home_services');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.home_collection',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','home_collection'));
   }
   public function healthPackage(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $health_package= getValueByTBName('health_packages');
     $health_package_list= getValueByTBName('health_package_lists');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.health_package_list',compact('health_package_list','site_infos','menu','sub_menu','sliders','sub_menu_list','health_package'));
   }
   public function health_check(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sliders = getValueByTBName('slider');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $health_checks = getValueByTBName('health_checks');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.health_check',compact('doctors','site_infos','menu','sub_menu','sliders','health_checks','sub_menu_list'));
   }
   public function franchisee(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.franchisee',compact('site_infos','menu','sub_menu','sliders','sub_menu_list'));
   }
   public function saveFranchisee(Request $request){
     $franch = new franchisee;
     $franch->name =  $request->name;
     $franch->age =  $request->age;
     $franch->locality =  $request->locality;
     $franch->area =  $request->area;
     $franch->phone =  $request->phone;
     $franch->email = $request->email;
     $franch->pin_code = $request->pin;
     $franch->save();
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.franchisee',compact('site_infos','menu','sub_menu','sliders','sub_menu_list'));
   }
   public function packageDetails($package_id){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $packages = getSingle_id('id',$package_id,'health_packages');
     $package_details =  DB::table('package_details')
             ->select('*')
             ->Where('package_id', '=', $package_id)
             ->get();

      $packageinfo = DB::table('health_package_lists')->where('id',$package_id)->first();
      $services = DB::table('health_package_lists')
            ->join('package_services', 'health_package_lists.id','=', 'package_services.packageList_id')
            ->where('health_package_lists.id',$package_id)
            ->get();  

     $site_infos= first_row_date('site_infos');
      return view('fontend.content.health_package_list_details',compact('services','packageinfo','site_infos','menu','sub_menu','sliders','sub_menu_list','package_details','packages'));
   }
   public function career(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $careers = getValueByTBName('careers');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.career',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','careers'));
   }
   public function customerCare(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $customer_care = getValueByTBName('customer_cares');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.customer_care',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','customer_care'));
   }
   public function getInTouch(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $careers = getValueByTBName('careers');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.get_in_touch',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','careers'));
   }
   public function feedback(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $careers = getValueByTBName('careers');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.feedback',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','careers'));
   }
   public function saveFeedback(Request $request){
     $franch = new feedback;
     $franch->first_name =  $request->f_name;
     $franch->last_name =  $request->l_name;
     $franch->phone =  $request->phone;
     $franch->email =  $request->email;
     $franch->visited_center =  $request->visited_center;
     $franch->experiance = $request->experiance;
     $franch->moment = $request->moment;
     $franch->suggest = $request->suggest;
     $franch->location = $request->location;
     $franch->complaint = $request->complaint;
     $franch->save();
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.feedback',compact('site_infos','menu','sub_menu','sliders','sub_menu_list'));
   }
   public function corporateParter(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $partners = getValueByTBName('corporate_partners');
     $site_infos= first_row_date('site_infos');
      return view('fontend.content.corporate_partner',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','partners'));
   }

   public function event(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $events = getValueByTBName('events');
      return view('fontend.content.event',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','events'));
   }

   public function faq(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $partners = getValueByTBName('corporate_partners');
      return view('fontend.content.event',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','partners'));
   }
   public function terms(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $partners = getValueByTBName('corporate_partners');
      return view('fontend.content.terms',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','partners'));
   }
   public function policy(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $partners = getValueByTBName('corporate_partners');
      return view('fontend.content.policy',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','partners'));
   }
   public function blog(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $partners = getValueByTBName('corporate_partners');
      return view('fontend.content.blog',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','partners'));
   }
   public function gallery(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $galleries = getValueByTBName('galleries');
      return view('fontend.content.gallery',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','galleries'));
   }
   public function covid(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $covids = DB::table('covids')
             ->select('*')
             ->first();
      return view('fontend.content.covid',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','covids'));
   }
   public function telemedicine(){
     $menu = getValueByTBName('menu');
     $sub_menu = getValueByTBName('submenuses');
     $sub_menu_list = getValueByTBName('submenu_facilities');
     $sliders = getValueByTBName('slider');
     $site_infos= first_row_date('site_infos');
     $telemedicines =  DB::table('telemedicines')
             ->select('*')
             ->first();
      return view('fontend.content.telemedicine',compact('site_infos','menu','sub_menu','sliders','sub_menu_list','telemedicines'));
   }
   public function make_an_appointment(Request $request){
     $appointment = new make_appointment;
     $appointment->name =  $request->name;
     $appointment->age =  $request->age;
     $appointment->phone =  $request->phone;
     $appointment->department =  $request->department;
     $appointment->save();
     return back()->with('success','Your appointment sent successfully!');
   }

   public function deleteservice(){
       DB::table('package_services')->delete(request()->id);
        return response()->json([
            'success'   => true
        ]);
   }
}
