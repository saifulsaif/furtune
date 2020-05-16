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
<span style="font-size:13px;">Helpline No :  01924129129</span>
|&nbsp;
<a href="https://www.facebook.com/SurakshaDiagnosticServices/" target="_blank" rel="noopener"><i class="fa fa-facebook-square" style="margin-right:8px; color:#FFFFFF;" ></i></a>
<a href="https://twitter.com/surakshatweets" target="_blank" rel="noopener"><i class="fa fa-twitter-square" style="margin-right:8px; color:#FFFFFF;" ></i></a>
<a href="https://www.youtube.com/channel/UC61ZuBx3CnjiwkZbLeR9deg" target="_blank" rel="noopener"><i class="fa fa-youtube-square" style="margin-right:8px; color:#FFFFFF;" ></i></a>
<a href="https://www.instagram.com/suraksha_diagnostics/" target="_blank" rel="noopener"><i class="fa fa-instagram" style="color:#FFFFFF;"></i></a>


</div>


</div>

</div>

<div class="header_middle_div">

<div class="header_middle_div_main">

<a href="{{url('/')}}"><div class="logo_div"><img src="{!! asset($site_infos->logo) !!}" class="img_css"  alt="logo" /></div>
</a>


<div class="header_social_div">

<div class="icon_div" style="margin-bottom:5px;"><div class="twitter_button"><a href="{{$site_infos->twitter}}" target="_blank" ><i class="fa fa-twitter  fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div" style="margin-left:0px; margin-bottom:5px;"><div class="facebook_button"><a href="{{$site_infos->facebook}}" target="_blank"><i class="fa fa-facebook fa-1x " style="color:#FFFFFF;  " ></i></a></div></div>


<div class="icon_div"><div class="youtube_button"><a href="{{$site_infos->youtube}}" target="_blank"><i class="fa fa-youtube-play fa-1x " style="color:#FFFFFF; " ></i></a></div></div>

<div class="icon_div"><div class="instagram_button"><a href="{{$site_infos->instagram}}" target="_blank"><i class="fa fa-instagram fa-1x " style="color:#FFFFFF; " ></i></a></div></div>

</div>


<div class="accreditation_div">
<div class="nabl_logodiv2"><img src="{!! asset('public/images/28_years.png') !!}" class="img_css" alt="Excellence" /></div>
<div class="nabl_logodiv1"><img src="{!! asset('public/images/cap-logo-new.jpg') !!}" class="img_css" alt="CAP" /></div>
<div class="nabl_logodiv"><img src="{!! asset('public/images/nabl-newlogo.png') !!}" class="img_css" alt="NABL" /></div>
<div class="nabl_logodiv"><img src="{!! asset('public/images/nabh-logo.png') !!}" class="img_css" alt="NABH" /></div>


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

<!--**************  Responsive Menu Start ********************-->



<div class="menudiv_responsive">

<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
                            @if (!empty(getMenuList()))
                                @foreach(getMenuList() as $me)
                                    <li>
                                        <a href="">{{$me->menu_name}} </a>
                                    </li>
                                @endforeach
                            @endif
							 <li>
								<a href="#">About Us</a>

                                 <ul class="dl-submenu">
                                <li><a href="https://surakshanet.com/about-us">Company Profile</a></li>

                                <li><a href="https://surakshanet.com/about-us/team-of-experts">Team of Experts </a></li>

                               <!-- <li><a href="mission.php">Mission & Vision</a>-->
                                <li><a href="https://surakshanet.com/about-us/csr">CSR</a></li>

                                <li><a href="https://surakshanet.com/about-us/customer-care">Customer Care</a></li>
                                </ul>

                                </li>

                               <li>
								<a href="#">Our Services</a>

                                 <ul class="dl-submenu">
                                <li><a href="#">Imaging</a>

                                <ul class="dl-submenu">
                                <li><a href="our-services/imaging/x-ray.html">X-ray</a></li>
                                <li><a href="our-services/imaging/usg.html">USG</a></li>
                                <li><a href="our-services/imaging/ct-scan.html">CT Scan</a></li>
                                <li><a href="our-services/imaging/mri.html">MRI</a></li>
                                <li><a href="our-services/imaging/dexa-scan.html">DEXA Scan</a></li>
                                <li><a href="our-services/imaging/mammography.html">Mammography</a></li>
                                </ul>

                                </li>
                                <li><a href="#">Cardiology</a>

                                 <ul class="dl-submenu">

                                 <li><a href="our-services/cardiology/electrocardiogram.html">Electrocardiogram</a></li>
                                  <li><a href="our-services/cardiology/echocardiogram.html">Echocardiogram</a></li>
                                  <li><a href="our-services/cardiology/stress-test.html">Stress Test (TMT)</a></li>
                                  <li><a href="our-services/cardiology/holter-monitoring.html">Holter Monitoring</a></li>
                                  <li><a href="our-services/cardiology/color-doppler.html">Color Doppler</a></li>
                                  <li><a href="our-services/cardiology/peripheral-doppler.html">Peripheral Doppler</a></li>
                                  <li><a href="our-services/cardiology/pft.html">PFT</a></li>
                                 </ul>

                                </li>
                                <li><a href="#">Gastroenterology</a>

                                <ul class="dl-submenu">
                                   <li><a href="our-services/gastroenterology/upper-gi-endoscopy.html">Upper GI Endoscopy</a></li>
                                  <li><a href="our-services/gastroenterology/lower-gi-endoscopy.html">Lower GI Endoscopy</a></li>
                                  <li><a href="our-services/gastroenterology/sigmoidoscopy.html">Sigmoidoscopy</a></li>
                                  <li><a href="our-services/gastroenterology/colonoscopy.html">Colonoscopy</a></li>
                                  <li><a href="our-services/gastroenterology/proctoscopy.html">Proctoscopy</a></li>
                                  <li><a href="our-services/gastroenterology/proctosigmoidoscopy.html">Proctosigmoidoscopy</a></li>

                                </ul>



                                </li>
                                <li><a href="#">Nuerology</a>
                                <ul class="dl-submenu">
                                <li><a href="our-services/neurology/eeg.html">EEG</a></li>
                                 <li><a href="our-services/neurology/emg.html">EMG</a></li>
                                 <li><a href="our-services/neurology/ncv.html">NCV</a></li>
                                </ul>


                                </li>
                                <li><a href="#">Pathology</a>

                                <ul class="dl-submenu">

                                  <li><a href="our-services/pathology/microbiology.html">Microbiology</a></li>
                                  <li><a href="our-services/pathology/serology.html">Serology</a></li>
                                  <li><a href="our-services/pathology/molecular-biology.html">Molecular Biology</a></li>
                                  <li><a href="our-services/pathology/histopathology.html">Histopathology</a></li>
                                  <li><a href="our-services/pathology/cytopathology.html">Cytopathology</a></li>
                                  <li><a href="our-services/pathology/clinical-pathology.html">Clinical Pathology</a></li>
                                  <li><a href="our-services/pathology/hematology.html">Hematology</a></li>
                                  <li><a href="our-services/pathology/biochemistry.html">Biochemistry</a></li>
                                  <li><a href="our-services/pathology/immunohistochemistry.html">Immunohistochemistry</a></li>
                                  <li><a href="our-services/pathology/flourescence-in-situ-hybridization.html">Flourescence In-situ Hybridization</a></li>
                                  <li><a href="our-services/pathology/cytogenetics.html">Cytogenetics</a></li>
                                  <li><a href="our-services/pathology/flow-cytometry.html">Flow Cytometry</a></li>
								  <li><a href="our-services/pathology/liquid-chromatography-tandem-mass-spectrometry.html">Liquid chromatography-tandem mass spectrometry (LC-MS/MS)</a></li>
								   <li><a href="our-services/pathology/next-generation-sequencing.html">Next Generation Sequencing (NGS)</a></li>
                                </ul>


                                </li>







                                </ul>

							</li>

                            <li><a href="">Book an Appointment </a></li>
                             <li>
                                <a href="find-test.html"> Find a Test</a>
                                </li>

                              <li><a href="https://surakshanet.com/health-package">Health Package </a>

                              <!--<ul class="dl-submenu">
                                <li><a href="executive-package-gold.php">Executive Health Checkup Gold Package</a></li>
                                <li><a href="#">Executive Health Checkup Package</a></li>
                                <li><a href="#">Pre-Marriage Health Checkup Package</a></li>
                                <li><a href="#">Senior Citizen Health Checkup Gold Package</a></li>
                                <li><a href="#">Senior Citizen Health Checkup Package</a></li>
                                <li><a href="#">Well Women Health Checkup Gold Package</a></li>
                                <li><a href="#">Well Women Health Checkup Package</a></li>
                                <li><a href="#">Diabetes Health Checkup Package</a></li>
                                <li><a href="#">Diabetes Comprehensive Package</a></li>




                                </ul>-->






                              </li>
                            <li>
								<a href="https://surakshanet.com/home-collection"> Home Collection</a></li>

                            <li>
								{{-- <a href="#"> Our Centers</a> --}}

                                {{-- <ul class="dl-submenu">
                                <li><a href="#">West Bengal</a>

                                <ul class="dl-submenu">

                                      <li><a href="our-centers/west-bengal/barasat.html">Barasat</a></li>
                                        <li><a href="our-centers/west-bengal/birati.html">Birati</a></li>
                                         <li><a href="our-centers/west-bengal/barrackpore.html"> Barrackpore</a></li>
                                         <li><a href="our-centers/west-bengal/basirhat.html">Basirhat</a></li>
                                         <li><a href="our-centers/west-bengal/bhatpara.html">Bhatpara</a></li>
                                         <li><a href="our-centers/west-bengal/bangaon.html">Bangaon </a></li>
                                          <li><a href="our-centers/west-bengal/chinar-park.html">Chinar Park</a></li>
                                           <li><a href="our-centers/west-bengal/dunlop.html">Dunlop</a></li>
                                            <li><a href="our-centers/west-bengal/diamond-harbour.html">Diamond Harbour</a></li>
                                            <li><a href="our-centers/west-bengal/elgin-road.html">Elgin Road</a></li>
                                      <li><a href="our-centers/west-bengal/garia.html">Garia</a></li>
                                      <li><a href="our-centers/west-bengal/howrah.html">Howrah</a></li>
                                      <li><a href="our-centers/west-bengal/habra.html">Habra</a></li>
                                      <li><a href="our-centers/west-bengal/hatibagan.html">Hatibagan</a></li>

                                      <li><a href="our-centers/west-bengal/jalpaiguri.html">Jalpaiguri</a></li>
                                       <li><a href="our-centers/west-bengal/jodhpur-park.html">Jodhpur Park</a></li>
                                        <li><a href="our-centers/west-bengal/krishnanagar.html">Krishna Nagar</a></li>
                                      <li><a href="our-centers/west-bengal/kasba.html">Kasba</a></li>

                                      <li><a href="our-centers/west-bengal/kestopur.html">Kestopur</a></li>
                                      <li><a href="our-centers/west-bengal/kharda.html">Khardah</a></li>
                                      <li><a href="our-centers/west-bengal/laketown.html">Laketown</a></li>
                                      <li><a href="our-centers/west-bengal/madhyamgram.html">Madhyamgram</a></li>
                                      <li><a href="our-centers/west-bengal/nagerbazar.html">Nagerbazar</a></li>
                                      <li><a href="our-centers/west-bengal/nrs.html">NRS</a></li>
                                       <li><a href="our-centers/west-bengal/new-barrackpore.html">New Barrackpore</a></li>

                                      <li><a href="our-centers/west-bengal/phoolbagan.html">Phoolbagan</a></li>
                                      <li><a href="our-centers/west-bengal/phoolbagan-polyclinic.html">Phoolbagan Polyclinic</a></li>
                                      <li><a href="our-centers/west-bengal/pradhan-nagar.html">Pradhan Nagar</a></li>
                                      <li><a href="our-centers/west-bengal/salt-lake-dd-18.html">Salt Lake DD 18/1</a></li>
                                      <li><a href="our-centers/west-bengal/salt-lake-jc-21.html">Salt Lake JC 21</a></li>
                                       <li><a href="our-centers/west-bengal/siliguri.html">Siliguri</a></li>
                                     <!-- <li><a href="#">Burrabazar</a></li>-->

                                      <li><a href="our-centers/west-bengal/sinthee.html">Sinthee</a></li>
                                      <li><a href="our-centers/west-bengal/sodepur.html">Sodepur</a></li>
									  <li><a href="our-centers/west-bengal/serampore.html">Serampore</a></li>
                                      <li><a href="our-centers/west-bengal/tamluk.html">Tamluk</a></li>



                                </ul> --}}

                                </li>
                                <!--<li><a href="#">Delhi & NCR</a>

                                <ul class="dl-submenu">
                                 <li><a href="https://www.surakshanet.com/our-centers/delhi-&ncr/janakpuri">Janakpuri</a></li>
                                <li><a href="https://www.surakshanet.com/our-centers/delhi-&ncr/kirti-nagar">Kirti Nagar</a></li>

                                <li><a href="https://www.surakshanet.com/our-centers/delhi-&ncr/noida">Noida</a></li>
                                <li><a href="https://www.surakshanet.com/our-centers/delhi-&ncr/saini-enclave">Saini Enclave</a></li>



                                </ul>


                                </li>-->
                                {{-- <li><a href="#">Bihar</a>
                                 <ul class="dl-submenu">
                                      <!-- <li><a href="#">Phulwari Sharif</a></li>-->
                                       <li><a href="our-centers/bihar/kamini-center.html">Kamini Centre</a></li>
                                     <!-- <li><a href="lab-location.php?center_Id=33">Kankarbagh</a></li>-->
                                     <!-- <li><a href="#">LCT Ghat</a></li>-->


                                 </ul> --}}




                                </li>
                                </ul>
                                </li>

                               <li>
								<a href="https://surakshanet.com/our-centers/collection-center">  Collection Center</a></li>



                                 <li>
								<a href="media.html"> Media & Events</a></li>

                                <!--<li>-->

                                   <li>
								<a href="https://surakshanet.com/franchisee"> Franchisee</a></li>

                                <li>
								<a href="faq.html"> FAQ</a></li>
                                 <li>
								<a href="http://surakshadiagnostic.com/" target="_blank"> Blog</a></li>




                                <li>
                                <a href="latest-news.html"> Latest News</a>
                                </li>


                                <li>
								<a href="#"> Contact Us</a>
                                <ul class="dl-submenu">
                                      <li><a href="https://surakshanet.com/contact-us/get-in-touch">Get in Touch</a></li>
                                       <!--<li>
                                <a href="franchisee.php">Franchisee</a>
                                </li>-->
                                <li>
								<a href="https://surakshanet.com/contact-us/career"> Career</a></li>

                                <li>
                                <a href="https://surakshanet.com/contact-us/feedback">Feedback</a>
                                </li>
                                </ul>


                                </li>

						</ul>







					</div>


</div>



<!--**************  Responsive Menu End ********************-->



</div>


</div>










<!--  Header End  -->
