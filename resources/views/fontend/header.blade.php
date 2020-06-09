<body>
  {{-- <div id="pop_mod_onl_con" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
         <img src="{!! asset('public/images/online_consultation.jpg') !!}" alt="">
                  <p class="popup_title_main">Bangladesh&#39;s first Diagnostic Centre <br/>to support telemedicine</p>
                  <p class="normal_pra">In view of the recent COVID-19 pandemic, we are launching online consultation.</p>
                  <p class="normal_pra">Now, after booking appointments, you can consult with doctors through video conferencing.</p>
                  <p class="normal_pra">To book an online appointment, <a href="online_consultation/index.html" target="_blank" class="click_here_anc">click here!</a></p>
                  <p class="align_center_cust"><img src="{!! asset('public/images/popup_logo_sur.png') !!}" alt=""></p>
              </div>
          </div>
      </div>
 </div> --}}

  <div id="home">

  <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ7JXFR"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header class="main_h">

<div class="megamenu_sticky_maindiv" style="display:block;">

    <div class="megamenu_sticky_div">
        @foreach (getMenuList() as $key_ => $item)
            @php $submenu_list = getAll_id('menu_id', $item->id ,'submenuses'); @endphp
            @if (!empty($submenu_list))
                @if ($item->position == 3)
                    <div class="megamenu_div" style="margin-top:0px;" id="addnew{{ $item->position }}" onmouseover="AddNew{{ $item->position }}()" onmouseout="DivHide()">

                        <div class="megamenu_box{{ $item->position }}" style="width:100%; border-right:0px;">
                            <div class="megamenu_body_div">
                                @foreach ($submenu_list as $key => $submenus)
                                    <div class="megamenu_leftdiv" style="width:16%;">
                                        <div class="menu_serviceheading">{{ $submenus->sub_menu_name }}</div>
                                            @php $submenu_lists = getAll_id('submenu_id',$submenus->id,'submenu_facilities'); @endphp
                                            @foreach ($submenu_lists as $key => $sub_list)
                                                <a href="{{url('service/'.$sub_list->id)}}"><div class="menu_servicetxt">{{ $sub_list->item_name }}</div></a>
                                            @endforeach
                                    </div>
                                    {{-- <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif"><div class="about_menudiv">{{ $submenus->sub_menu_name }}</div></a> --}}
                                @endforeach
                            </div>

                        </div>

                    </div>

                @else
                <div class="megamenu_div" style="margin-top:0px;" id="addnew{{$item->position}}" onmouseover="AddNew{{$item->position}}()" onmouseout="DivHide()" >
                {{-- <div class="megamenu_div{{$item->id}}" style="margin-top:0px;" id="addnew{{$item->position}}" onmouseover="AddNew{{$item->position}}()" onmouseout="DivHide()" > --}}

                        @foreach ($submenu_list as $key => $submenus)
                            <a href="@if($submenus->route_name != null) {{ route($submenus->route_name) }} @else {{ route('#') }}  @endif"><div class="about_menudiv">{{ $submenus->sub_menu_name }}</div></a>
                        @endforeach
                    </div>

                @endif
            @else
            <script>
                $('#AddNew'+{{$item->position}}).hide();
            </script>
            @endif

        @endforeach

    </div>

</div>




<div class="header_div header_div_sticky" >

    <div class="header_topband" style="height:3px; background-color:#4b9b4b;"></div>

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
                        @php $submenu_list = getAll_id('menu_id', $menu->id ,'submenuses'); @endphp
                        <li>
                            <a @if($submenu_list[0] != '') href="javascript:AddNew{{$menu->position}}()" onmouseover="AddNew{{$menu->position}}()" onclick="AddNew{{$menu->position}}(), contact()" onmouseout="DivHide()" @else href="@if($menu->route_name != null) {{ route($menu->route_name) }} @else {{ route('#') }}  @endif" @endif>{{ $menu->menu_name }}</a>
                        </li>
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
