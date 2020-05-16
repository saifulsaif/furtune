<!--  Header Start  -->





<!--##########  Left Panel  #################-->



<!--<script language="javascript">
	function service()
	{
	window.location.href='service.php?test_id=1';

	}

</script>


<script language="javascript">
	function center()
	{
	window.location.href='lab-location.php?center_Id=16';

	}

</script> -->



<!--##########  Left Panel End  #################-->







<div class="header_maindiv ">

<div class="header_topband">
<div class="header_middle_div_main">

<div class="top_band_txt">
<span style="font-size:13px;">Helpline No :  {{$site_infos->hoteline}}</span>
|&nbsp;
<a href="{{$site_infos->facebook}}" target="_blank" rel="noopener"><i class="fa fa-facebook-square" style="margin-right:8px; color:#FFFFFF;" ></i></a>
<a href="{{$site_infos->twitter}}" target="_blank" rel="noopener"><i class="fa fa-twitter-square" style="margin-right:8px; color:#FFFFFF;" ></i></a>
<a href="{{$site_infos->youtube}}" target="_blank" rel="noopener"><i class="fa fa-youtube-square" style="margin-right:8px; color:#FFFFFF;" ></i></a>
<a href="{{$site_infos->instagram}}" target="_blank" rel="noopener"><i class="fa fa-instagram" style="color:#FFFFFF;"></i></a>


</div>


</div>

</div>

<div class="header_middle_div">

<div class="header_middle_div_main">

<a href="{{url('/')}}"><div class="logo_div"><img src="{!! asset($site_infos->logo) !!}" class="img_css"  alt="logo" /></div>
</a>


<div class="header_social_div" style="margin-left: 5px;">

<div class="icon_div" style="margin-bottom:5px;"><div class="twitter_button"><a href="{{$site_infos->twitter}}" target="_blank" ><i class="fa fa-twitter  fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div" style="margin-left:0px; margin-bottom:5px;"><div class="facebook_button"><a href="{{$site_infos->facebook}}" target="_blank"><i class="fa fa-facebook fa-1x " style="color:#FFFFFF;  " ></i></a></div></div>


<div class="icon_div"><div class="youtube_button"><a href="{{$site_infos->youtube}}" target="_blank"><i class="fa fa-youtube-play fa-1x " style="color:#FFFFFF; " ></i></a></div></div>

<div class="icon_div"><div class="instagram_button"><a href="{{$site_infos->instagram}}" target="_blank"><i class="fa fa-instagram fa-1x " style="color:#FFFFFF; " ></i></a></div></div>

</div>


<div class="accreditation_div" style="width: 246px; margin-right: -11px;">
<div class="nabl_logodiv2 header_icon">
  <img style="width: 51%;height: 34px;" src="{!! asset('public/images/icon/right-register.png') !!}" class="img_css" alt="CAP" />
  <a href="#">
    <h4 style="margin-top: 13px;font-size: 11px;font-weight: 600;">Sign Up</h4>
  </a>
</div>
<div class="nabl_logodiv2 header_icon">
  <img style="width: 51%;height: 34px;" src="{!! asset('public/images/icon/right-appoinment.png') !!}" class="img_css" alt="CAP" /> <a href="#"><h4 style="margin-top: 7px;font-size: 11px;font-weight: 600;">Book</br>Appointment</h4></a> </div>
<div class="nabl_logodiv2 header_icon">
  <img style="width: 51%;height: 34px;" src="{!! asset('public/images/icon/right-portal.png') !!}" class="img_css" alt="CAP" /> <a href="#"><h4 style="margin-top: 7px;font-size: 11px;font-weight: 600;">Patient</br>Portal</h4></a> </div>

</div>


</div>


</div>

<div class="menu_maindiv">


<!--**************  Desktop Menu Start ********************-->
<div class="mainmenu">
    <div class="menudiv" >
        <ul id="nav">
            @if (!empty(getMenuList()))
                @foreach(getMenuList() as $me)
                    @php
                        $sub_menu = getAll_id('menu_id',$me->id,'submenuses');
                    @endphp
                    @if($me->id<=1)
                        <li>
                            <a href="javascript:AddNew()" onmouseover="AddNew()" onmouseout="DivHide()" onclick="service()">Our Services</a>
                        </li>
                        <div class="megamenu_div" id="addnew" onmouseover="AddNew()" onmouseout="DivHide()">
                            <div class="megamenu_box2" style="width:100%; border-right:0px;">
                            <!--<div class="megamenu_header">WEST BENGAL</div>-->
                                <div class="megamenu_body_div">
                                    @if(!empty($sub_menu))
                                        @foreach($sub_menu as $sub)
                                            @php
                                                 $submenu_list = getAll_id('submenu_id',$sub->id,'submenu_facilities');
                                            @endphp
                                        <div class="megamenu_leftdiv" style="width:16%;">
                                            <div class="menu_serviceheading">{{$sub->sub_menu_name}}</div>
                                            @if (!empty($submenu_list))
                                                @foreach($submenu_list as $list)
                                                    @if($list->submenu_id==$sub->id)
                                                        <a href="{{url('service/'.$list->id)}}"><div class="menu_servicetxt">{{$list->item_name}}</div></a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        @endforeach
                                    @endif
                                 </div>
                            </div>
                        </div>
                    @else
                        {{-- @php
                            echo '</br>';
                            print_r($me->route_name);
                            continue;
                        @endphp --}}
                      @if (!empty($sub_menu))
                          @if($sub_menu)
                            <li>
                                <a href="@if($me->route_name != null) {{ route($me->route_name) }} @else {{ route('#') }}  @endif" >{{$me->menu_name}}</a>
                                <ul>
                                    @foreach($sub_menu as $sub)
                                        <li>
                                            <a href="@if(!empty($sub->route_name)) {{ route($sub->route_name) }} @else "#" @endif">{{$sub->sub_menu_name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li>
                                <a href="{{route($me->route_name)}}" >{{$me->menu_name}}</a>
                            </li>
                            @endif
                      @endif
                    @endif
                @endforeach
            @endif
        </ul>
    </div>

    <div class="megamenu_div" id="addnew1" onmouseover="AddNew1()" onmouseout="DivHide()" style="height:240px;">


    {{-- <div class="megamenu_box2" style="height:240px;">
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

    </div> --}}

    <div class="megamenu_box1" style="padding-left:25px; width:200px; height:240px; border-right:0px;">
    <!--<div class="megamenu_header">Delhi & NCR</div>-->

    <div class="megamenu_body_div">

    <!--<div class="megamenu_leftdiv">
    <a href="https://www.surakshanet.com/our-centers/delhi-&ncr/janakpuri"><div class="menu_servicetxt">Janakpuri</div></a>
    <a href="https://www.surakshanet.com/our-centers/delhi-&ncr/kirti-nagar"><div class="menu_servicetxt">Kirti Nagar</div></a>

    <a href="https://www.surakshanet.com/our-centers/delhi-&ncr/noida"><div class="menu_servicetxt">Noida</div></a>
    <a href="https://www.surakshanet.com/our-centers/delhi-&ncr/saini-enclave"><div class="menu_servicetxt">Saini Enclave</div></a>


    </div>-->

    {{-- <div class="megamenu_header" style="margin-top:15px;">Bihar</div>

    <div class="megamenu_leftdiv">


    <a href="our-centers/bihar/kamini-center.html"><div class="menu_servicetxt">Kamini Centre  </div></a>
    <!--<a href="lab-location.php?center_Id=33"><div class="menu_servicetxt"> Kankarbagh</div></a>-->

    </div> --}}

    </div>


    </div>

    </div>

</div>


<!--**************  Desktop Menu End ********************-->












<!--  Header End  -->
