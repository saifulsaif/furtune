
@extends('fontend.app')
@section('content')
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

<!--<div class="se-pre-con"></div>
<div class="overlay1"></div>-->




 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ7JXFR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


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

</script>


<script language="javascript">
	function contact()
	{
	window.location.href='get-touch.php';

	}

</script>

<script language="javascript">
	function profile()
	{
	window.location.href='profile.php';

	}

</script>-->








<!--###############  Sticky Header  ######################-->


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







<div class="megamenu_div2" style="margin-top:0px;" id="addnew5" onmouseover="AddNew5()" onmouseout="DivHide()" >

<a href="https://surakshanet.com/contact-us/get-in-touch"><div class="about_menudiv">Get in Touch</div></a>
<a href="https://surakshanet.com/contact-us/career"><div class="about_menudiv">Career</div></a>
<a href="https://surakshanet.com/contact-us/feedback"><div class="about_menudiv">Feedback</div></a>
<!--<a href="franchisee.php"><div class="about_menudiv">Franchisee</div></a>-->






<!--<a href="delhi-contact.php"><div class="about_menudiv">Delhi & NCR</div></a>
<a href="bihar-contact.php"><div class="about_menudiv">Bihar</div></a>-->

</div>

<div class="megamenu_div1" style="margin-top:0px;" id="addnew4" onmouseover="AddNew4()" onmouseout="DivHide()" >

<a href="https://surakshanet.com/about-us/"><div class="about_menudiv">Company Profile</div></a>
<a href="https://surakshanet.com/about-us/team-of-experts"><div class="about_menudiv">Team of Experts</div></a>
<!--<a href="mission.php"><div class="about_menudiv">Mission & Vision</div></a>-->
<a href="https://surakshanet.com/about-us/csr"><div class="about_menudiv">CSR</div></a>
<a href="https://surakshanet.com/about-us/customer-care"><div class="about_menudiv">Customer Care</div></a>
</div>

<div class="megamenu_div" style="margin-top:0px;" id="addnew2" onmouseover="AddNew2()" onmouseout="DivHide()">

<div class="megamenu_box2" style="width:100%; border-right:0px;">
<!--<div class="megamenu_header">WEST BENGAL</div>-->

<div class="megamenu_body_div">
<div class="megamenu_leftdiv" style="width:16%;">
<div class="menu_serviceheading">Imaging</div>
<a href="our-services/imaging/x-ray.html"><div class="menu_servicetxt">X-ray</div></a>
<a href="our-services/imaging/usg.html"><div class="menu_servicetxt">USG</div></a>
<a href="our-services/imaging/ct-scan.html"><div class="menu_servicetxt">CT Scan</div></a>
<a href="our-services/imaging/mri.html"><div class="menu_servicetxt">MRI</div></a>
<a href="our-services/imaging/dexa-scan.html"><div class="menu_servicetxt">DEXA Scan</div></a>
<a href="our-services/imaging/mammography.html"><div class="menu_servicetxt">Mammography</div></a>




</div>

<div class="megamenu_leftdiv" style="width:16%;">
<div class="menu_serviceheading">Cardiology</div>
<a href="our-services/cardiology/electrocardiogram.html"><div class="menu_servicetxt">Electrocardiogram</div></a>
<a href="our-services/cardiology/echocardiogram.html"><div class="menu_servicetxt">Echocardiogram</div></a>
<a href="our-services/cardiology/stress-test.html"><div class="menu_servicetxt">Stress Test (TMT)</div></a>
<a href="our-services/cardiology/holter-monitoring.html"><div class="menu_servicetxt">Holter Monitoring</div></a>
<a href="our-services/cardiology/color-doppler.html"><div class="menu_servicetxt">Color Doppler</div></a>
<a href="our-services/cardiology/peripheral-doppler.html"><div class="menu_servicetxt">Peripheral Doppler</div></a>
<a href="our-services/cardiology/pft.html"><div class="menu_servicetxt">PFT</div></a>





</div>

<div class="megamenu_leftdiv" style="width:11%;">
<div class="menu_serviceheading">Neurology</div>
<a href="our-services/neurology/eeg.html"><div class="menu_servicetxt">EEG</div></a>
<a href="our-services/neurology/emg.html"><div class="menu_servicetxt">EMG</div></a>
<a href="our-services/neurology/ncv.html"><div class="menu_servicetxt">NCV</div></a>





</div>

<div class="megamenu_leftdiv" style="width:18%;">
<div class="menu_serviceheading">Gastroenterology</div>
<a href="our-services/gastroenterology/upper-gi-endoscopy.html"><div class="menu_servicetxt">Upper GI Endoscopy</div></a>
<a href="our-services/gastroenterology/lower-gi-endoscopy.html"><div class="menu_servicetxt">Lower GI Endoscopy</div></a>
<a href="our-services/gastroenterology/sigmoidoscopy.html"><div class="menu_servicetxt">Sigmoidoscopy</div></a>
<a href="our-services/gastroenterology/proctoscopy.html"><div class="menu_servicetxt">Proctoscopy</div></a>
<a href="our-services/gastroenterology/colonoscopy.html"><div class="menu_servicetxt">Colonoscopy</div></a>
<a href="our-services/gastroenterology/proctosigmoidoscopy2.html"><div class="menu_servicetxt">Proctosigmoidoscopy</div></a>




</div>

<div class="megamenu_leftdiv" style="width:18%;">

<div class="menu_serviceheading">Pathology</div>
<a href="our-services/pathology/microbiology.html"><div class="menu_servicetxt">Microbiology</div></a>
<a href="our-services/pathology/serology.html"><div class="menu_servicetxt">Serology</div></a>
<a href="our-services/pathology/molecular-biology.html"><div class="menu_servicetxt">Molecular Biology</div></a>
<a href="our-services/pathology/histopathology.html"><div class="menu_servicetxt">Histopathology</div></a>
<a href="our-services/pathology/cytopathology.html"><div class="menu_servicetxt">Cytopathology</div></a>
<a href="our-services/pathology/clinical-pathology.html"><div class="menu_servicetxt">Clinical Pathology</div></a>
<a href="our-services/pathology/next-generation-sequencing.html"><div class="menu_servicetxt">Next Generation Sequencing (NGS)</div></a>



</div>

<div class="megamenu_leftdiv" style="width:16%;">

<div class="menu_serviceheading">Pathology</div>

<a href="our-services/pathology/hematology.html"><div class="menu_servicetxt">Hematology</div></a>
<a href="our-services/pathology/biochemistry.html"><div class="menu_servicetxt">Biochemistry</div></a>
<a href="our-services/pathology/immunohistochemistry.html"><div class="menu_servicetxt">Immunohistochemistry</div></a>
<a href="our-services/pathology/flourescence-in-situ-hybridization.html"><div class="menu_servicetxt">Flourescence In-situ Hybridization</div></a>
<a href="our-services/pathology/cytogenetics.html"><div class="menu_servicetxt">Cytogenetics</div></a>
<a href="our-services/pathology/flow-cytometry.html"><div class="menu_servicetxt">Flow Cytometry</div></a>
<a href="our-services/pathology/liquid-chromatography-tandem-mass-spectrometry.html"><div class="menu_servicetxt">Liquid chromatography-tandem mass spectrometry (LC-MS/MS)</div></a>

<!--<a href="health-package.php"><div class="megamenu_header" style=" margin-top:10px;">Health Packages</div></a>-->

</div>

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


           <a href="index.html"> <div class="logo_maindiv_sticky"><img src="{!! asset('public/images/suraksha_newlogo_updated.png') !!}" class="img_css"  alt="logo" /></div>
           </a>


			<div class="sticky_menu">
					<ul id="nav1">
<!--<li><a href="index.php" >Home</a></li>-->

<li><a href="javascript:AddNew4()"  onmouseout="DivHide()" onclick="AddNew4(),profile()" onmouseover="AddNew4()">About Us</a>




</li>

<li><a href="javascript:AddNew2()"  onclick="AddNew2(),service()" onmouseover="AddNew2()" onmouseout="DivHide()">Our Services</a></li>

<li><a href="https://surakshanet.com/book-an-appointment" >Book an Appointment</a></li>
<li><a href="https://surakshanet.com/home-collection" >Home Collection</a></li>
<li><a href="https://surakshanet.com/health-package" >Health Packages</a></li>



{{-- <li><a href="javascript:AddNew3()" onmouseover="AddNew3()" onclick="AddNew3(), center()" onmouseout="DivHide()">Our Centers</a></li> --}}
<li><a href="https://surakshanet.com/franchisee" >Franchisee</a></li>



<!--<li><a href="feedback.php" >Feedback</a></li>-->
<li><a href="javascript:AddNew5()" onmouseover="AddNew5()" onclick="AddNew5(), contact()" onmouseout="DivHide()">Contact Us</a>


</li>

</ul>
			</div>


            </div>

            </div>



    </div>




</header>




<!--###############  Sticky Header  ######################-->





<div class="wrapper">








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

<a href="index.html"><div class="logo_div"><img src="{!! asset('public/images/suraksha_newlogo_updated.png') !!}" class="img_css"  alt="logo" /></div>
</a>


<!--<div class="header_social_div">

<div class="icon_div" style="margin-bottom:5px;"><div class="twitter_button"><a href="https://twitter.com/surakshatweets " target="_blank" ><i class="fa fa-twitter  fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div" style="margin-left:0px; margin-bottom:5px;"><div class="facebook_button"><a href="https://www.facebook.com/SurakshaDiagnosticServices/ " target="_blank"><i class="fa fa-facebook fa-1x " style="color:#FFFFFF;  " ></i></a></div></div>


<div class="icon_div"><div class="youtube_button"><a href="https://www.youtube.com/channel/UC61ZuBx3CnjiwkZbLeR9deg " target="_blank"><i class="fa fa-youtube-play fa-1x " style="color:#FFFFFF; " ></i></a></div></div>

<div class="icon_div"><div class="instagram_button"><a href="https://www.instagram.com/suraksha_diagnostics/" target="_blank"><i class="fa fa-instagram fa-1x " style="color:#FFFFFF; " ></i></a></div></div>

</div>-->


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
<!--<li><a href="index.php" >Home</a></li>-->

<li><a href="https://surakshanet.com/about-us/" >About Us</a>

<ul>
         <li><a href="https://surakshanet.com/about-us/" >Company Profile</a></li>

        <li><a href="https://surakshanet.com/about-us/team-of-experts">Team of Experts</a></li>

        <!--<li><a href="mission.php" >Mission & Vision</a></li>-->
         <li><a href="https://surakshanet.com/about-us/csr" style="border-bottom:none;">CSR</a></li>
         <li><a href="https://surakshanet.com/about-us/customer-care" >Customer Care</a></li>
</ul>


</li>

<li><a href="javascript:AddNew()" onmouseover="AddNew()" onmouseout="DivHide()" onclick="service()">Our Services</a></li>
<li><a href="https://surakshanet.com/book-an-appointment" >Book an Appointment</a></li>

<li><a href="https://surakshanet.com/home-collection" >Home Collection</a></li>

<li><a href="https://surakshanet.com/health-package" >Health Packages</a>
<!--<ul>
<li><a href="executive-package-gold.php" style="width:300px;">Executive Health Checkup Gold Package</a></li>
<li><a href="#" style="width:300px;">Executive Health Checkup Package</a></li>
<li><a href="#" style="width:300px;">Pre-Marriage Health Checkup Package</a></li>
<li><a href="#" style="width:300px;">Senior Citizen Health Checkup Gold Package</a></li>
<li><a href="#" style="width:300px;">Senior Citizen Health Checkup Package</a></li>
<li><a href="#" style="width:300px;">Well Women Health Checkup Gold Package</a></li>
<li><a href="#" style="width:300px;">Well Women Health Checkup Package</a></li>
<li><a href="#" style="width:300px;">Diabetes Health Checkup Package</a></li>
<li><a href="#" style="width:300px;">Diabetes Comprehensive Package</a></li>



</ul>-->


</li>

{{-- <li><a href="javascript:AddNew1()" onmouseover="AddNew1()" onmouseout="DivHide()" onclick="center()">Our Centers</a></li> --}}
<li><a href="https://surakshanet.com/franchisee" >Franchisee</a></li>
<!--<li><a href="career.php" >Career</a></li>-->



<li><a href="#" >Contact Us</a>
<ul>
<!--<li><a href="wb-contact.php">West Bengal</a></li>

     <li><a href="delhi-contact.php">Delhi & NCR</a></li>

     <li><a href="bihar-contact.php">Bihar</a></li>-->
     <li><a href="https://surakshanet.com/contact-us/get-in-touch">Get in Touch</a></li>
     <li><a href="https://surakshanet.com/contact-us/career" >Career</a></li>
     <li><a href="https://surakshanet.com/contact-us/feedback" >Feedback</a></li>
   <!--<li><a href="franchisee.php" >Franchisee</a></li>-->
</ul>

</li>

</ul>

</div>

<div class="megamenu_div" id="addnew" onmouseover="AddNew()" onmouseout="DivHide()">

<div class="megamenu_box2" style="width:100%; border-right:0px;">
<!--<div class="megamenu_header">WEST BENGAL</div>-->

<div class="megamenu_body_div">
<div class="megamenu_leftdiv" style="width:16%;">
<div class="menu_serviceheading">Imaging</div>
<a href="our-services/imaging/x-ray.html"><div class="menu_servicetxt">X-ray</div></a>
<a href="our-services/imaging/usg.html"><div class="menu_servicetxt">USG</div></a>
<a href="our-services/imaging/ct-scan.html"><div class="menu_servicetxt">CT Scan</div></a>
<a href="our-services/imaging/mri.html"><div class="menu_servicetxt">MRI</div></a>
<a href="our-services/imaging/dexa-scan.html"><div class="menu_servicetxt">DEXA Scan</div></a>
<a href="our-services/imaging/mammography.html"><div class="menu_servicetxt">Mammography</div></a>




</div>

<div class="megamenu_leftdiv" style="width:16%;">
<div class="menu_serviceheading">Cardiology</div>
<a href="our-services/cardiology/electrocardiogram.html"><div class="menu_servicetxt">Electrocardiogram</div></a>
<a href="our-services/cardiology/echocardiogram.html"><div class="menu_servicetxt">Echocardiogram</div></a>
<a href="our-services/cardiology/stress-test.html"><div class="menu_servicetxt">Stress Test (TMT)</div></a>
<a href="our-services/cardiology/holter-monitoring.html"><div class="menu_servicetxt">Holter Monitoring</div></a>
<a href="our-services/cardiology/color-doppler.html"><div class="menu_servicetxt">Color Doppler</div></a>
<a href="our-services/cardiology/peripheral-doppler.html"><div class="menu_servicetxt">Peripheral Doppler</div></a>
<a href="our-services/cardiology/pft.html"><div class="menu_servicetxt">PFT</div></a>





</div>

<div class="megamenu_leftdiv" style="width:11%;">
<div class="menu_serviceheading">Neurology</div>
<a href="our-services/neurology/eeg.html"><div class="menu_servicetxt">EEG</div></a>
<a href="our-services/neurology/emg.html"><div class="menu_servicetxt">EMG</div></a>
<a href="our-services/neurology/ncv.html"><div class="menu_servicetxt">NCV</div></a>





</div>

<div class="megamenu_leftdiv" style="width:18%;">
<div class="menu_serviceheading">Gastroenterology</div>
<a href="our-services/gastroenterology/upper-gi-endoscopy.html"><div class="menu_servicetxt">Upper GI Endoscopy</div></a>
<a href="our-services/gastroenterology/lower-gi-endoscopy.html"><div class="menu_servicetxt">Lower GI Endoscopy</div></a>
<a href="our-services/gastroenterology/sigmoidoscopy.html"><div class="menu_servicetxt">Sigmoidoscopy</div></a>
<a href="our-services/gastroenterology/proctoscopy.html"><div class="menu_servicetxt">Proctoscopy</div></a>
<a href="our-services/gastroenterology/colonoscopy.html"><div class="menu_servicetxt">Colonoscopy</div></a>
<a href="our-services/gastroenterology/proctosigmoidoscopy.html"><div class="menu_servicetxt">Proctosigmoidoscopy</div></a>



</div>

<div class="megamenu_leftdiv" style="width:18%;">

<div class="menu_serviceheading">Pathology</div>
<a href="our-services/pathology/microbiology.html"><div class="menu_servicetxt">Microbiology</div></a>
<a href="our-services/pathology/serology.html"><div class="menu_servicetxt">Serology</div></a>
<a href="our-services/pathology/molecular-biology.html"><div class="menu_servicetxt">Molecular Biology</div></a>
<a href="our-services/pathology/histopathology.html"><div class="menu_servicetxt">Histopathology</div></a>
<a href="our-services/pathology/cytopathology.html"><div class="menu_servicetxt">Cytopathology</div></a>
<a href="our-services/pathology/clinical-pathology.html"><div class="menu_servicetxt">Clinical Pathology</div></a>
<a href="our-services/pathology/next-generation-sequencing.html"><div class="menu_servicetxt">Next Generation Sequencing (NGS)</div></a>


</div>

<div class="megamenu_leftdiv" style="width:16%;">

<div class="menu_serviceheading">Pathology</div>

<a href="our-services/pathology/hematology.html"><div class="menu_servicetxt">Hematology</div></a>
<a href="our-services/pathology/biochemistry.html"><div class="menu_servicetxt">Biochemistry</div></a>
<a href="our-services/pathology/immunohistochemistry.html"><div class="menu_servicetxt">Immunohistochemistry</div></a>
<a href="our-services/pathology/flourescence-in-situ-hybridization.html"><div class="menu_servicetxt">Flourescence In-situ Hybridization</div></a>
<a href="our-services/pathology/cytogenetics.html"><div class="menu_servicetxt">Cytogenetics</div></a>
<a href="our-services/pathology/flow-cytometry.html"><div class="menu_servicetxt">Flow Cytometry</div></a>
<a href="our-services/pathology/liquid-chromatography-tandem-mass-spectrometry.html"><div class="menu_servicetxt">Liquid chromatography-tandem mass spectrometry (LC-MS/MS)</div></a>

<!--<a href="health-package.php"><div class="megamenu_header" style=" margin-top:10px;">Health Packages</div></a>-->

</div>

</div>


</div>




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


<!--<div class="megamenu_box1" style="padding-left:25px; width:200px; height:340px; border-right:0px;">
<div class="megamenu_header">Bihar</div>

<div class="megamenu_body_div" >
<div class="megamenu_leftdiv">

<a href="#"><div class="menu_servicetxt">Phulwari Sharif </div></a>
<a href="#"><div class="menu_servicetxt">Kankarbagh</div></a>
<a href="#"><div class="menu_servicetxt">LCT Ghat</div></a>
<a href="#"><div class="menu_servicetxt">Boring Road</div></a>





</div>






</div>


</div>-->







</div>

</div>


<!--**************  Desktop Menu End ********************-->

<!--**************  Responsive Menu Start ********************-->



<div class="menudiv_responsive">

<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">

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

                            <li><a href="https://surakshanet.com/book-an-appointment">Book an Appointment </a></li>
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



<!--  Banner Start   -->




 <script>
	function banner()
	{
	window.location.href='https://surakshanet.com/about-us/company-profile';

	}

</script>


<div class="banner_div" style="max-height:450px;">
    <div class="owl-carousel owl-theme" id="banner_slider">
        <div class="item">
           <a href="covid19/index.html"> <img src="{!! asset('public/images/covid19.jpg') !!}"  style="width:100%; height:100%;" alt="Banner"></a>
        </div>

        <div class="item">
            <a href="online_consultation/index.html" target="_blank"><img src="{!! asset('public/images/banner_17042020.jpg') !!}"  style="width:100%; height:100%;" alt="Banner"></a>
        </div>
    </div>
</div>







<!--  Banner End   -->










<!-- Body Start  -->


<div class="body_maindiv">

<!--  BODY Part1 -->

<div class="body_topmaindiv">

<div class="body_topdiv_main">

<div class="body_topBG_main">

<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon1"></div></div>
</div>

<div class="icon_heading">DOWNLOAD REPORT</div>

<div class="icon_subheading1" style="margin-bottom:12px; font-size:14px;">Click here to download report online</div>

<a href="http://surakshanet.in/" target="_blank"><div class="download_report_div">Download Report</div></a>


<!--<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="download_report_div">Download Report</div></a>-->


<!--<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report West Bengal</div></a>
<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report Delhi & NCR</div></a>
<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="icon_subheading1" >Online Report Bihar</div></a>-->

</div>

<form action="#" method="post" name="find_lab">

<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon2"></div></div>
</div>

<div class="icon_heading">FIND A LAB</div>
<div class="icon_subheading">Find your nearest  center</div>

<!--<div class="icon_subheading"><input name="find_lab" type="text" class="find_location_txtbox" placeholder="Enter Your Pin Code"  maxlength="6" onkeypress="return isNumberKey(event)"/></div>-->
<div class="icon_subheading"><select data-placeholder="Search By Location..." class="download_report_div" name="center_id" id="center_id" style="width:100%; border:0px; background-color:#FFF;" required >
             <option value="" selected="selected">Search By Location</option>

  <optgroup label="West Bengal">
  <option value="west-bengal/bangaon">Bangaon</option>

  <option value="west-bengal/barasat">Barasat</option>

  <option value="west-bengal/barrackpore-">Barrackpore </option>

  <option value="west-bengal/basirhat">Basirhat</option>

  <option value="west-bengal/bhatpara">Bhatpara</option>

  <option value="west-bengal/birati">Birati</option>

  <option value="west-bengal/chinar-park">Chinar Park</option>

  <option value="west-bengal/diamond-harbour">Diamond Harbour</option>

  <option value="west-bengal/dunlop">Dunlop</option>

  <option value="west-bengal/elgin-road">Elgin Road</option>

  <option value="west-bengal/garia">Garia</option>

  <option value="west-bengal/habra">Habra</option>

  <option value="west-bengal/hatibagan">Hatibagan</option>

  <option value="west-bengal/howrah">Howrah</option>

  <option value="west-bengal/jalpaiguri">Jalpaiguri</option>

  <option value="west-bengal/jodhpur-park">Jodhpur Park</option>

  <option value="west-bengal/kasba">Kasba</option>

  <option value="west-bengal/kestopur">Kestopur</option>

  <option value="west-bengal/kharda">Kharda</option>

  <option value="west-bengal/krishnanagar">Krishnanagar</option>

  <option value="west-bengal/laketown">Laketown</option>

  <option value="west-bengal/madhyamgram">Madhyamgram</option>

  <option value="west-bengal/nagerbazar">Nagerbazar</option>

  <option value="west-bengal/new-barrackpore">New Barrackpore</option>

  <option value="west-bengal/nrs-hospital-ajc-bose-rd">NRS Hospital AJC Bose Rd</option>

  <option value="west-bengal/phoolbagan">Phoolbagan</option>

  <option value="west-bengal/pradhan-nagar">Pradhan Nagar</option>

  <option value="west-bengal/salt-lake-dd-18/1">Salt Lake DD 18/1</option>

  <option value="west-bengal/salt-lake-jc-21">Salt Lake JC 21</option>

  <option value="west-bengal/serampore">Serampore</option>

  <option value="west-bengal/siliguri">Siliguri</option>

  <option value="west-bengal/sinthee-">Sinthee </option>

  <option value="west-bengal/sodepur">Sodepur</option>

  <option value="west-bengal/suraksha-mri-and-polyclinic">Suraksha MRI and Polyclinic</option>

  <option value="west-bengal/tamluk">Tamluk</option>

  </optgroup>
 <!--<optgroup label="Delhi & NCR">
  <option value="delhi-&ncr/janakpuri">Janakpuri</option>

  <option value="delhi-&ncr/kirti-nagar">Kirti Nagar</option>

  <option value="delhi-&ncr/noida">Noida</option>

  <option value="delhi-&ncr/saini-enclave">Saini Enclave</option>

  </optgroup>-->

 <optgroup label="Bihar">
  <option value="bihar/kamini-center">Kamini Center</option>

  </optgroup>
          </select></div>
<div class="icon_subheading">
<input name="search" type="button" onclick="get_center()" value="Search" class="nearestlab_btn" style="width:100%;" />

<!--<input name="search" type="button"  value="Search" class="nearestlab_btn" style="width:100%;" />-->


</div>


</div>

</form>

<!--<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon3"></div></div>
</div>

<div class="icon_heading">QUICK LINKS</div>
<a href="customer-care.php"><div class="icon_subheading1">Customer Care</div></a>

<a href="home-service.php"><div class="icon_subheading1">Home Collection Services</div></a>

<a href="polyclinic.php"><div class="icon_subheading1">Doctor's Appointment</div></a>

<a href="media.php"><div class="icon_subheading1">Media & Events</div></a>


</div>-->

<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon4"></div></div>
</div>

<div class="icon_heading">HELPLINE NO</div>
<div class="icon_subheading2" style="margin-bottom:15px;">KOLKATA : <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>033-6619-1000 </span></div>



<!--<div class="icon_subheading2" style="margin-bottom:15px;">DELHI & NCR : <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>1800-121-9541 </span></div>-->

<div class="icon_subheading2" >BIHAR : <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>0952-309-6399 </span></div>

</div>


</div>




<div class="body_topBG_main_responsive">

<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon1"></div></div>
</div>

<div class="icon_heading">DOWNLOAD REPORT</div>
<div class="icon_subheading1" style="margin-bottom:12px; font-size:14px;">Click here to download report online</div>

<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="download_report_div">Download Report</div></a>

<!--<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report West Bengal</div></a>
<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report Delhi & NCR</div></a>
<a href="http://52.172.206.185:9623/surakshaweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report Bihar</div></a>-->

</div>

<form action="#" method="post" name="find_lab">

<div class="desktop_box1">

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon2"></div></div>
</div>

<div class="icon_heading">FIND A LAB</div>
<div class="icon_subheading">Find your nearest  center</div>

<!--<div class="icon_subheading"><input name="find_lab" type="text" class="find_location_txtbox" placeholder="Enter Your Pin Code" maxlength="6" onkeypress="return isNumberKey(event)" /></div>

<div class="icon_subheading"><input name="search" type="submit" value="Search" class="nearestlab_btn" /></div>-->
<div class="icon_subheading"><select data-placeholder="Search By Location..." name="res_center" id="res_center" onchange="resget_center()" class="download_report_div" style="width:100%; background-color:#FFF;" >
             <option value="" selected="selected">Search By Location</option>
            <optgroup label="West Bengal">
  <option value="42">Bangaon</option>

  <option value="1">Barasat</option>

  <option value="2">Barrackpore </option>

  <option value="3">Basirhat</option>

  <option value="4">Bhatpara</option>

  <option value="5">Birati</option>

  <option value="29">Chinar Park</option>

  <option value="28">Diamond Harbour</option>

  <option value="6">Dunlop</option>

  <option value="7">Elgin Road</option>

  <option value="8">Garia</option>

  <option value="12">Habra</option>

  <option value="40">Hatibagan</option>

  <option value="13">Howrah</option>

  <option value="14">Jalpaiguri</option>

  <option value="30">Jodhpur Park</option>

  <option value="15">Kasba</option>

  <option value="16">Kestopur</option>

  <option value="17">Kharda</option>

  <option value="36">Krishnanagar</option>

  <option value="31">Laketown</option>

  <option value="37">Madhyamgram</option>

  <option value="18">Nagerbazar</option>

  <option value="19">New Barrackpore</option>

  <option value="20">NRS Hospital AJC Bose Rd</option>

  <option value="21">Phoolbagan</option>

  <option value="41">Pradhan Nagar</option>

  <option value="23">Salt Lake DD 18/1</option>

  <option value="24">Salt Lake JC 21</option>

  <option value="39">Serampore</option>

  <option value="27">Siliguri</option>

  <option value="26">Sinthee </option>

  <option value="25">Sodepur</option>

  <option value="22">Suraksha MRI and Polyclinic</option>

  <option value="38">Tamluk</option>

  </optgroup>
 <optgroup label="Delhi & NCR">
  <option value="10">Janakpuri</option>

  <option value="11">Kirti Nagar</option>

  <option value="34">Noida</option>

  <option value="9">Saini Enclave</option>

  </optgroup>

 <optgroup label="Bihar">
  <option value="32">Kamini Center</option>

  </optgroup>


          </select></div>
<!--<div class="icon_subheading"><input name="search" type="submit" value="Find My Nearest Lab" class="nearestlab_btn" style="width:96%;" /></div>-->


</div>

</form>

<!--<div class="desktop_box1">

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon3"></div></div>
</div>

<div class="icon_heading">QUICK LINKS</div>
<a href="customer-care.php"><div class="icon_subheading1">Customer Care</div></a>

<a href="home-service.php"><div class="icon_subheading1">Home Collection Services</div></a>

<a href="polyclinic.php"><div class="icon_subheading1">Doctor's Appointment</div></a>

<a href="media.php"><div class="icon_subheading1">Media & Events</div></a>


</div>-->

<div class="desktop_box1">

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon4"></div></div>
</div>

<div class="icon_heading">HELPLINE NO</div>
<a href="tel:03366191000"><div class="icon_subheading2" >KOLKATA  <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>033-6619-1000</span></div></a>



<a href="tel:18001219541"><div class="icon_subheading2" >DELHI & NCR  <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>1800-121-9541</span></div></a>

<a href="tel:09523096399"><div class="icon_subheading2" >BIHAR  <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>0952-309-6399</span></div></a>

</div>


</div>


</div>


</div>


<!--  BODY Part1 -->


<!--  BODY Part2 -->

<div class="index_aboutmaindiv">

<div class="index_aboutdiv">

<div class="welcome_header" ><!--Welcome to <span style="color:#e1272c;">Suraksha Diagnostic</span>-->Our <span style="color:#e1272c;">28 year old</span> legacy continues</div>

<div class="welcome_bodytxt"  >Suraksha is a name people readily associate with diagnostic quality and convenience. The largest diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 35 centres across West Bengal, Bihar and Delhi NCR. All diagnostic centres are owned and operated by the company to maintain strict quality protocols. Suraksha also operates a centre in NRS Medical College & Hospital in Kolkata on PPP (Public Private Partnership) basis with the State Government. <br />
<br />


Suraksha diagnostics services span Pathology, Histopathology, Molecular Diagnostics and Radiology and include the latest tests. It is the first in India to receive the coveted CAP (College of American Pathologists) certification and is also NABH and NABL accredited. Apart from diagnostic services, Suraksha has a number of polyclinics with senior consultants from disciplines such as Cardiology, Gastroenterology, Neurology, Gynaecology, Oncology, Psychology, Endocrinology, Dermatology, Opthalmology, Homeopathy etc. It also runs Super Specialty Clinics for diabetes, hypertension, back pain, etc.</div>

<div class="welcome_bodytxt"><a href="about-us/index.html"><div style="margin:0px auto;" class="button"><span>Read More </span></div></a></div>

</div>


</div>





<!--  BODY Part2 -->



<div class="index_aboutmaindiv" style="background-color:#eeeeee; margin-bottom:0px;">



<div class="newindex_aboutdiv">
<div class="newhome_aboutdiv" style="width:100%; margin-right;0%">


<div class="welcome_header welcome_header_new" style="text-align:left; color:#e1272c; font-weight:400; font-size:28px;">Suraksha Diagnostics brings Robots to its Lab</div>
<div class="home_robot">

<div class="robot_txt">
<div class="welcome_bodytxt" style="text-align:left; text-align:justify; line-height:28px;">Suraksha has come up with 'Aptio' automation, the robotic track (track-based automation solution), as a unified and complete solution to its expanding need. The track is completely AI enabled and runs without human interference. It allows to provide the best therapeutic turnaround time in the industry. In an emergency can churn out a report in less than a minute. It allows the Task Targeted Automation by hugely reducing errors. The entire system is One flow One Touch.<br />
<br />
 </div>

<!--<div class="welcome_bodytxt"><a href="https://surakshanet.com/about-us/company-profile"><div class="button" style="float:left;"><span>Read More </span></div></a></div>--->

</div>

<div class="robot_lab_video"><a class="various2 fancybox.iframe" href="https://www.youtube.com/embed/pDjxZilfQ30"><img src="{!! asset('public/images/robot-video.jpg') !!}" style="width:100%;" alt="Video"/></a><!--<iframe width="100%" height="250" src="https://www.youtube.com/embed/pDjxZilfQ30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--></div>

</div>

</div>






<!---<div class="clugenix_partner_div" >

<div class="welcome_header welcome_header_new" style="text-align:left;"><span style="color:#e1272c;">Suraksha Diagnostics Pvt. Ltd </span>Inks JV with <span style="color:#e1272c;">Cluegenix</span>
 Introduces <span style="color:#e1272c;">AI Enabled Smart Lab</span></div>

<div class="clugenix_logodiv"><img src="images/clugenix-logo.png" alt="Clugenix" /></div>





<div class="welcome_bodytxt"><a href="https://surakshanet.com/about-us/company-profile"><div class="button" style="float:left;"><span>Read More </span></div></a></div>
</div>--->








</div>


</div>




<!--<a href="swine-flu.php"><div class="newindex_aboutdiv" style="margin-bottom:30px;"><img src="images/suraksha-h1n1-1.jpg" class="img_css" /></div></a>-->






















<!--  BODY Part3 -->


<div class="parallaxBan">


<div class="fixed-bg">

<div class="preferd_vendormainBG">

<div class="newslettertxt">Find a Test</div>
<div class="newsletter_mainBG cre-animate" data-animation="fade-in" data-speed="1000" data-delay="0" data-offset="70%" data-easing="ease">

<form action="#" method="post" name="fm_search" id="fm_search">

<input name="search-box" id="search-box1" type="text" class="newslettertxtbox" autocomplete="off" placeholder="Enter Test Name" style="padding:0px 2%;" onkeyup="GetOptionList()"/>

<input name="search" type="button" onclick="get_search()"  class="newsletterbtn" value="Search"  />
<div id="suggesstion-box"></div>
</form>

</div>

</div>


</div>

</div>





<!--  BODY Part3 -->




<!--  BODY Part4 -->

<div class="media_maindiv">


<div class="preferd_vendormainBG">

<div class="media_div" style="width:100%; margin-right:0%;">
<div class="media_heading">Media & Events</div>

<div class="scroll_div">






<div class="owl-carousel1 owl-carousel owl-theme">

          <a href="media.html#tamluk" > <div class="item">
            <div class="producthomeDiv">




      <div class="panel_img"><img src="{!! asset('public/images/new-centre-tamluk/img4_s.jpg') !!}" class="img_css" alt="Tamluk Centre" /></div>



     <div class="panel_heading_new">New Centre Launch at Tamluk<br />
<br />
</div>




     </div>

            </div></a>

          <a href="media.html#Oberoi">  <div class="item">
            <div class="producthomeDiv">



     <div class="panel_img"><img src="{!! asset('public/images/press-conference/Press_Conference_s.jpg') !!}" class="img_css" alt="Press Conference" /></div>



     <div class="panel_heading_new">Press Conference at The Oberoi Grand</div>




     </div>

            </div></a>

           <a href="media.html#gateway-cme"> <div class="item">
            <div class="producthomeDiv">



     <div class="panel_img"><img src="{!! asset('public/images/gateway-cme.jpg') !!}" class="img_css" alt="CME" /></div>



     <div class="panel_heading_new">Kasba and Garia Continual Medical Education Program</div>





     </div>

            </div></a>



          </div>






</div>
</div>

<!--<div class="news_div">
<div class="media_heading"> News / Press</div>
<div id="content-1" class="content mCustomScrollbar" style="top:0px;">
<div class="latestnews_maindiv">

<a href="https://timesofindia.indiatimes.com/business/india-business/suraksha-diagnostics-in-talks-with-us-based-mayo-labs/articleshow/58255183.cms" target="_blank"><div class="latest_news_maindiv">
<div class="latest_news_datemaindiv"><img src="images/toi.png" style="width:100%;" alt="Times of India" /></div>

<div class="news_testdiv">

<div class="news_heading">Suraksha Diagnostics in talks with US based Mayo Labs</div>


</div>
</div>
 </a>

<a href="https://timesofindia.indiatimes.com/business/india-business/OrbiMed-to-invest-40m-in-Suraksha-Diagnostics/articleshow/55465431.cms" target="_blank"><div class="latest_news_maindiv">
<div class="latest_news_datemaindiv"><img src="images/toi.png" style="width:100%;" alt="Times of India" /></div>

<div class="news_testdiv">

<div class="news_heading">OrbiMed to invest $40m in Suraksha Diagnostics</div>


</div>
</div>
 </a>

 <a href="https://timesofindia.indiatimes.com/city/kolkata/robotics-to-help-test-blood-samples-in-half-an-hour-and-with-zero-error/articleshow/68003049.cms" target="_blank"><div class="latest_news_maindiv">
<div class="latest_news_datemaindiv"><img src="images/toi.png" style="width:100%;" alt="Times of India" /></div>

<div class="news_testdiv">

<div class="news_heading">Robotics to help test blood samples in half an hour, and with zero error</div>


</div>
</div>
 </a>

 <a href="https://www.indiatoday.in/pti-feed/story/suraksha-diagnostics-in-talks-with-us-based-mayo-labs-910416-2017-04-18" target="_blank"><div class="latest_news_maindiv">
<div class="latest_news_datemaindiv"><img src="images/india-today-logo.jpg" style="width:100%;" alt=" India Today" /></div>

<div class="news_testdiv">

<div class="news_heading">Suraksha Diagnostics in talks with US based Mayo Labs</div>


</div>
</div>
 </a>

</div>
</div>
</div>-->

<div class="news_div_responsive">
<div class="media_heading"> News / Press</div>

<div class="latestnews_maindiv">

<a href="https://timesofindia.indiatimes.com/business/india-business/suraksha-diagnostics-in-talks-with-us-based-mayo-labs/articleshow/58255183.cms" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="{!! asset('public/images/toi.png') !!}" style="width:100%;" alt="Times of India" /></div>
<div class="news_testdiv">

<div class="news_heading">Suraksha Diagnostics in talks with US based Mayo Labs</div>


</div>
</div> </a>


<a href="https://timesofindia.indiatimes.com/business/india-business/OrbiMed-to-invest-40m-in-Suraksha-Diagnostics/articleshow/55465431.cms" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="{!! asset('public/images/toi.png') !!}" style="width:100%;" alt="Times of India" /></div>
<div class="news_testdiv">

<div class="news_heading">OrbiMed to invest $40m in Suraksha Diagnostics</div>


</div>
</div> </a>

<a href="https://timesofindia.indiatimes.com/city/kolkata/robotics-to-help-test-blood-samples-in-half-an-hour-and-with-zero-error/articleshow/68003049.cms" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="{!! asset('public/images/toi.png') !!}" style="width:100%;" alt="Times of India" /></div>
<div class="news_testdiv">

<div class="news_heading">Robotics to help test blood samples in half an hour, and with zero error</div>


</div>
</div> </a>

<a href="https://www.indiatoday.in/pti-feed/story/suraksha-diagnostics-in-talks-with-us-based-mayo-labs-910416-2017-04-18" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="{!! asset('public/mages/india-today-logo.jpg') !!}" style="width:100%;" alt="India Today" /></div>
<div class="news_testdiv">

<div class="news_heading">Suraksha Diagnostics in talks with US based Mayo Labs</div>


</div>
</div> </a>

</div>

</div>
</div>



</div>




<!--  BODY Part4 -->


<!--  BODY Part5 -->


<!--  BODY Social Media -->

<!--<div class="media_maindiv">


<div class="preferd_vendormainBG">

<div class="twitter_feeddiv"><a class="twitter-timeline" href="https://twitter.com/surakshatweets" data-chrome=" nofooter noborders transparent" style="width:100%;" data-height="500">Tweets by Suraksha Diagnostic</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

<div class="instagram_feeddiv"></div>

</div></div>-->

<!--  BODY Social Media -->

<!-- BODY Part5 -->

<div class="tieup_maindiv" style="padding-bottom:30px; ">


<div class="preferd_vendormainBG">

<div class="welcome_header" style="text-align:center;">

Corporate <span style="color:#e1272c;">Partners</span>

</div>

<div class="tipup_scrollmaindiv">






<div class="franchisee_txt_div" >

  <span style="color: #e1272c; font-weight: 400; font-size: 30px;"> What can we do for your company?</span><br/><br/>

      <ul style="list-style:none; margin-left:-35px;">

      <li>We entertain tenders for both Pathology and Non-Pathology tests</li>
      <li>Employees get discount cards</li>
      <li>Pre-Employment Check-Ups</li>
      <li>Annual Health Check-Ups for employees</li>
      <li>On-site (office) and Off-site (factory) Health Camps</li>
      <li>And other benefits tailor-made to suit your company's employees </li>


      </ul>





<!--<div class="welcome_bodytxt" style="margin-top:25px;"><a href="corporate-tieup.php"><button class="button" style="float:right;"> Read More </button></a></div>-->
</div>

<div class="franchisee_img_div"><div class="merchants-list"><div class="wrapper1"><div class="merchants-image"></div></div>




</div></div>


</div>


</div>





<!--  BODY Part6 -->






<!--  BODY Part5 -->


</div>

@endsection
