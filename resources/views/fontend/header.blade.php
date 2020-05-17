<body>
  <div id="pop_mod_onl_con" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
         <img src="{!! asset('public/images/online_consultation.jpg') !!}" alt="">
                  <p class="popup_title_main">India&#39;s first Diagnostic Centre <br/>to support telemedicine</p>
                  <p class="normal_pra">In view of the recent COVID-19 pandemic, we are launching online consultation.</p>
                  <p class="normal_pra">Now, after booking appointments, you can consult with doctors through video conferencing.</p>
                  <p class="normal_pra">To book an online appointment, <a href="online_consultation/index.html" target="_blank" class="click_here_anc">click here!</a></p>
                  <p class="align_center_cust"><img src="{!! asset('public/images/popup_logo_sur.png') !!}" alt=""></p>
              </div>
          </div>
      </div>
 </div>

  <div id="home">

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ7JXFR"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header class="main_h">

<div class="megamenu_sticky_maindiv" style="display:block;">

<div class="megamenu_sticky_div">

<!--<div class="megamenu_div3" style="margin-top:0px;" id="addnew6" onmouseover="AddNew6()" onmouseout="DivHide()" >

<a href="executive-package-gold.php"><div class="about_menudiv">Executive Health Checkup Gold Package</div></a>
<a href="#"><div class="about_menudiv">Executive Health Checkup Package</div></a>
<a href="#"><div class="about_menudiv">Pre-Marriage Health Checkup Package</div></a>
<a href="#"><div class="about_menudiv">Senior Citizen Health Checkup Gold Package</div></a>
<a href="#"><div class="about_menudiv">Senior Citizen Health Checkup Package</div></a>
<a href="#"><div class="about_menudiv">Well Women Health Checkup Gold Package</div></a>
<a href="#"><div class="about_menudiv">Well Women Health Checkup Package</div></a>
<a href="#"><div class="about_menudiv">Diabetes Health Checkup Package</div></a>
<a href="#"><div class="about_menudiv">Diabetes Comprehensive Package</div></a>

</div>-->






{{-- Contact Us Submenu List --}}
<div class="megamenu_div2" style="margin-top:0px;" id="addnew5" onmouseover="AddNew5()" onmouseout="DivHide()" >
   @php $submenu_list = getAll_id('menu_id','7','submenuses'); @endphp
   @if (!empty($submenu_list))
       @foreach ($submenu_list as $key => $submenus)
           <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif"><div class="about_menudiv">{{ $submenus->sub_menu_name }}</div></a>
       @endforeach
   @endif
</div>

<div class="megamenu_div1" style="margin-top:0px;" id="addnew4" onmouseover="AddNew4()" onmouseout="DivHide()" >
@php $submenu_list_about = getAll_id('menu_id','2','submenuses'); @endphp
@if (!empty($submenu_list_about))
    @foreach ($submenu_list_about as $key => $about)
        <a href="@if($about->route_name != null) {{ route($about->route_name) }} @else {{ route('#') }}  @endif"><div class="about_menudiv">{{ $about->sub_menu_name }}</div></a>
    @endforeach
@endif
{{-- <a href="https://surakshanet.com/about-us/"><div class="about_menudiv">Company Profile</div></a>
<a href="https://surakshanet.com/about-us/team-of-experts"><div class="about_menudiv">Team of Experts</div></a>
<!--<a href="mission.php"><div class="about_menudiv">Mission & Vision</div></a>-->
<a href="https://surakshanet.com/about-us/csr"><div class="about_menudiv">CSR</div></a>
<a href="https://surakshanet.com/about-us/customer-care"><div class="about_menudiv">Customer Care</div></a> --}}
</div>

<div class="megamenu_div" style="margin-top:0px;" id="addnew2" onmouseover="AddNew2()" onmouseout="DivHide()">

    <div class="megamenu_box2" style="width:100%; border-right:0px;">
    <!--<div class="megamenu_header">WEST BENGAL</div>-->

    <div class="megamenu_body_div">
            @php $submenu_list = getAll_id('menu_id','1','submenuses'); @endphp
            @if (!empty($submenu_list))
                @foreach ($submenu_list as $key => $submenus)
                    <div class="megamenu_leftdiv" style="width:16%;">
                        <div class="menu_serviceheading">{{ $submenus->sub_menu_name }}</div>
                        @php $submenu_lists = getAll_id('submenu_id',$submenus->id,'submenu_facilities'); @endphp
                        @foreach ($submenu_lists as $key => $sub_list)
                            <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif"><div class="menu_servicetxt">{{ $sub_list->item_name }}</div></a>
                        @endforeach
                    </div>
                    {{-- <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif"><div class="about_menudiv">{{ $submenus->sub_menu_name }}</div></a> --}}
                @endforeach
            @endif
        </div>


    </div>

</div>

<div class="megamenu_div" id="addnew3" style="margin-top:0px; height:240px;" onmouseover="AddNew3()" onmouseout="DivHide()" >

<div class="megamenu_box2" style="height:240px;">
<div class="megamenu_header">WEST BENGAL</div>

<div class="megamenu_body_div">

<div class="megamenu_leftdiv" style="width:20%;">

<a href="our-centers/west-bengal/barasat.html"><div class="menu_servicetxt">Barasat</div></a>
<a href="our-centers/west-bengal/birati.html"><div class="menu_servicetxt">Birati</div></a>
<a href="our-centers/west-bengal/barrackpore.html"><div class="menu_servicetxt">Barrackpore</div></a>
<a href="our-centers/west-bengal/basirhat.html"><div class="menu_servicetxt">Basirhat</div></a>
<a href="our-centers/west-bengal/bhatpara.html"><div class="menu_servicetxt">Bhatpara</div></a>
<a href="our-centers/west-bengal/bangaon.html"><div class="menu_servicetxt">Bangaon </div></a>
<a href="our-centers/west-bengal/chinar-park.html"><div class="menu_servicetxt">Chinar Park</div></a>
<a href="our-centers/west-bengal/dunlop.html"><div class="menu_servicetxt"> Dunlop</div></a>
<a href="our-centers/west-bengal/diamond-harbour.html"><div class="menu_servicetxt">Diamond Harbour</div></a>

<a href="our-centers/collection-center/index.html"><div class="megamenu_header" style=" margin-top:10px; font-size:18px;">Collection Center</div></a>



</div>

<div class="megamenu_leftdiv" style="width:20%;">

<a href="our-centers/west-bengal/elgin-road.html"><div class="menu_servicetxt">Elgin Road</div></a>
<a href="our-centers/west-bengal/garia.html"><div class="menu_servicetxt">Garia</div></a>
<a href="our-centers/west-bengal/howrah.html"><div class="menu_servicetxt">Howrah</div></a>
<a href="our-centers/west-bengal/habra.html"><div class="menu_servicetxt">Habra</div></a>
<a href="our-centers/west-bengal/hatibagan.html"><div class="menu_servicetxt">Hatibagan</div></a>
<a href="our-centers/west-bengal/jalpaiguri.html"><div class="menu_servicetxt">Jalpaiguri</div></a>
<a href="our-centers/west-bengal/jodhpur-park.html"><div class="menu_servicetxt">Jodhpur Park</div></a>
<a href="our-centers/west-bengal/kasba.html"><div class="menu_servicetxt">Kasba</div></a>
<a href="our-centers/west-bengal/krishnanagar.html"><div class="menu_servicetxt">Krishnanagar</div></a>




</div>

<div class="megamenu_leftdiv" style="width:20%;">
<a href="our-centers/west-bengal/kestopur.html"><div class="menu_servicetxt">Kestopur</div></a>
<a href="our-centers/west-bengal/kharda.html"><div class="menu_servicetxt">Khardah</div></a>
<a href="our-centers/west-bengal/laketown.html"><div class="menu_servicetxt">Laketown</div></a>
<a href="our-centers/west-bengal/madhyamgram.html"><div class="menu_servicetxt">Madhyamgram</div></a>
<a href="our-centers/west-bengal/nagerbazar.html"><div class="menu_servicetxt">Nagerbazar</div></a>
<a href="our-centers/west-bengal/nrs.html"><div class="menu_servicetxt">NRS</div></a>
<a href="our-centers/west-bengal/new-barrackpore.html"><div class="menu_servicetxt">New Barrackpore</div></a>
<a href="our-centers/west-bengal/phoolbagan.html"><div class="menu_servicetxt">Phoolbagan</div></a>






</div>

<div class="megamenu_leftdiv" style="width:20%;">

<a href="our-centers/west-bengal/phoolbagan-polyclinic.html"><div class="menu_servicetxt">Phoolbagan Polyclinic</div></a>
<a href="our-centers/west-bengal/pradhan-nagar.html"><div class="menu_servicetxt">Pradhan Nagar</div></a>
<a href="our-centers/west-bengal/salt-lake-dd-18.html"><div class="menu_servicetxt">Salt Lake DD 18/1</div></a>
<a href="our-centers/west-bengal/salt-lake-jc-21.html"><div class="menu_servicetxt">Salt Lake JC 21</div></a>
<a href="our-centers/west-bengal/siliguri.html"><div class="menu_servicetxt">Siliguri </div></a>
<a href="our-centers/west-bengal/sodepur.html"><div class="menu_servicetxt">Sodepur</div></a>
<a href="our-centers/west-bengal/sinthee.html"><div class="menu_servicetxt">Sinthee</div></a>
<a href="our-centers/west-bengal/serampore.html"><div class="menu_servicetxt">Serampore</div></a>
<a href="our-centers/west-bengal/tamluk.html"><div class="menu_servicetxt">Tamluk</div></a>

</div>

</div>


</div>

<div class="megamenu_box1" style="padding-left:25px; width:200px; height:240px; border-right:0px;">
<!--<div class="megamenu_header">Delhi & NCR</div>-->

<div class="megamenu_body_div">


<!--<div class="megamenu_leftdiv">
<a href="https://www.surakshanet.com/our-centers/delhi-&ncr/janakpuri"><div class="menu_servicetxt">Janakpuri</div></a>
<a href="https://www.surakshanet.com/our-centers/delhi-&ncr/kirti-nagar"><div class="menu_servicetxt">Kirti Nagar</div></a>

<a href="https://www.surakshanet.com/our-centers/delhi-&ncr/noida"><div class="menu_servicetxt">Noida</div></a>
<a href="https://www.surakshanet.com/our-centers/delhi-&ncr/saini-enclave"><div class="menu_servicetxt">Saini Enclave</div></a>



</div>-->



<div class="megamenu_header" style="margin-top:15px;">Bihar</div>

<div class="megamenu_leftdiv">


<a href="our-centers/bihar/kamini-center.html"><div class="menu_servicetxt">Kamini Centre</div></a>

<!--<a href="lab-location.php?center_Id=33"><div class="menu_servicetxt">Kankarbagh</div></a>-->



</div>

</div>


</div>







</div>

</div>

</div>




<div class="header_div header_div_sticky" >

    <div class="header_topband" style="height:3px; background-color:#e1272c;"></div>

    <div class="header_middlemaindiv">

        <div class="mainheaderdiv">


        <a href="{{ url("/") }}"> <div class="logo_maindiv_sticky"><img src="{!! asset($site_infos->logo) !!}" class="img_css"  alt="logo" /></div>
        </a>
        <div class="sticky_menu">
            <ul id="nav1">
            <!--<li><a href="index.php" >Home</a></li>-->
                {{-- <li><a href="javascript:AddNew4()"  onmouseout="DivHide()" onclick="AddNew4(),profile()" onmouseover="AddNew4()">About Us</a>  </li>

                <li><a href="javascript:AddNew2()"  onclick="AddNew2(),service()" onmouseover="AddNew2()" onmouseout="DivHide()">Our Services</a></li>

                <li><a href="{!! route('sajib.getDoctor') !!}" >Book an Appointment</a></li>
                <li><a href="https://surakshanet.com/home-collection" >Home Collection</a></li>
                <li><a href="https://surakshanet.com/health-package" >Health Packages</a></li>
                <li><a href="javascript:AddNew3()" onmouseover="AddNew3()" onclick="AddNew3(), center()" onmouseout="DivHide()">Our Centers</a></li>
                <li><a href="https://surakshanet.com/franchisee" >Franchisee</a></li>

                <!--<li><a href="feedback.php" >Feedback</a></li>-->
                <li><a href="javascript:AddNew5()" onmouseover="AddNew5()" onclick="AddNew5(), contact()" onmouseout="DivHide()">Contact Us</a> </li> --}}
                @if (!empty(getMenuList()))
                    @foreach (getMenuList() as $key => $menu)
                            @if ($menu->menu_name == 'Contact Us')
                                <li><a href="javascript:AddNew5()" onmouseover="AddNew5()" onclick="AddNew5(), contact()" onmouseout="DivHide()">{{ $menu->menu_name }}</a> </li>
                            @elseif ($menu->menu_name == 'Our Service')
                                <li><a href="javascript:AddNew2()"  onclick="AddNew2(),service()" onmouseover="AddNew2()" onmouseout="DivHide()">{{ $menu->menu_name }}</a></li>
                            @elseif ($menu->menu_name == 'About Us')
                                <li><a href="javascript:AddNew4()"  onmouseout="DivHide()" onclick="AddNew4(),profile()" onmouseover="AddNew4()">{{ $menu->menu_name }}</a>  </li>
                            @else
                                <li><a href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif">{{ $menu->menu_name }}</a> </li>
                            @endif
                    @endforeach
                @endif


            </ul>
        </div>
    </div>

</div>



    </div>




</header>

   <div class="wrapper">
     <div class="nav-main">

     <!--<a class="css-tooltip-right color-red" href="polyclinic.php">
     	<span>Book an Appointment</span><div class="box1">
         	<div class="icon_img"><i class="fa fa-stethoscope" style="font-size:27px; color:#FFFFFF;"></i></div>

         </div>
     </a>

     <a class="css-tooltip-right color-red" href="find-test.php">
     	<span>Find a Test</span><div class="box1">
         	<div class="icon_img"><i class="fa fa-flask" style="font-size:27px; color:#FFFFFF;"></i></div>

         </div>
     </a>

     <a class="css-tooltip-right color-red" href="home-service.php">
     	<span>Home Collection</span><div class="box1">
         	<div class="icon_img"><i class="fa fa-home" style="font-size:27px; color:#FFFFFF;" ></i></div>

         </div>
     </a>


     <a class="css-tooltip-right color-red" href="feedback.php">
     	<span>Feedback</span><div class="box1">
         	<div class="icon_img"><i class="fa fa-comments" style="font-size:27px; color:#FFFFFF;"></i></div>

         </div>
     </a>


      <a class="css-tooltip-right color-red" href="franchisee.php">
     	<span>Franchisee</span><div class="box1">
         	<div class="icon_img"><i class="fa fa-users" style="font-size:27px; color:#FFFFFF;"></i></div>

         </div>
     </a>
     -->


      <nav class="social">
               <ul>
                   <li><a href="#" ><i class="fa fa-stethoscope"></i>  Appointment </a></li>
                   <li><a href="find-test.html" ><i class="fa fa-flask"></i> Find a Test</a></li>
                   <li><a href="#" ><i class="fa fa-home"></i> Home Collection </a></li>
                    <li><a href="#" ><i class="fa fa-comments"></i> Feedback</a></li>
                   <li><a href="#" ><i class="fa fa-users"></i> Franchisee</a></li>



               </ul>
           </nav>

     </div>
<!--###############  Sticky Header  ######################-->
