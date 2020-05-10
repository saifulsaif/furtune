
@extends('fontend.app')
@section('content')

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

<div class="desktop_box1">

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon3"></div></div>
</div>

<div class="icon_heading">QUICK LINKS</div>
<a href="customer-care.php"><div class="icon_subheading1">Customer Care</div></a>

<a href="home-service.php"><div class="icon_subheading1">Home Collection Services</div></a>

<a href="polyclinic.php"><div class="icon_subheading1">Doctor's Appointment</div></a>

<a href="media.php"><div class="icon_subheading1">Media & Events</div></a>


</div>

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
@foreach($index_infos as $info)
<div class="index_aboutdiv">

<div class="welcome_header" ><!--Welcome to <span style="color:#e1272c;">Suraksha Diagnostic</span>--> <span style="color:#e1272c;">{{$info->title}}</span> </div>


<br />


{{$info->description}}</div>

<div class="welcome_bodytxt"><a href="about-us/index.html"><div style="margin:0px auto;" class="button"><span>Read More </span></div></a></div>

</div>
@endforeach

</div>





<!--  BODY Part2 -->



<div class="index_aboutmaindiv" style="background-color:#eeeeee; margin-bottom:0px;">



<div class="newindex_aboutdiv">
  @foreach($lab_infos as $lab)
<div class="newhome_aboutdiv" style="width:100%; margin-right;0%">


<div class="welcome_header welcome_header_new" style="text-align:left; color:#e1272c; font-weight:400; font-size:28px;">{{$lab->title}}</div>
<div class="home_robot">

<div class="robot_txt">
<div class="welcome_bodytxt" style="text-align:left; text-align:justify; line-height:28px;">{{$lab->description}}<br />
<br />
 </div>

<!--<div class="welcome_bodytxt"><a href="https://surakshanet.com/about-us/company-profile"><div class="button" style="float:left;"><span>Read More </span></div></a></div>--->

</div>

<div class="robot_lab_video"><a class="various2 fancybox.iframe" href="{{$lab->video_link}}"><img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/></a><!--<iframe width="100%" height="250" src="https://www.youtube.com/embed/pDjxZilfQ30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--></div>

</div>

</div>

@endforeach




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




      <div class="panel_img"><img src="http://localhost/furtune/public/images/new-centre-tamluk/img4_s.jpg" class="img_css" alt="Tamluk Centre" /></div>



     <div class="panel_heading_new">New Centre Launch at Tamluk<br />
<br />
</div>




     </div>

            </div></a>

          <a href="media.html#Oberoi">  <div class="item">
            <div class="producthomeDiv">



     <div class="panel_img"><img src="http://localhost/furtune/public/images/press-conference/Press_Conference_s.jpg" class="img_css" alt="Press Conference" /></div>



     <div class="panel_heading_new">Press Conference at The Oberoi Grand</div>




     </div>

            </div></a>

           <a href="media.html#gateway-cme"> <div class="item">
            <div class="producthomeDiv">



     <div class="panel_img"><img src="http://localhost/furtune/public/images/gateway-cme.jpg" class="img_css" alt="CME" /></div>



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

<div class="latest_news_datemaindiv"><img src="http://localhost/furtune/public/images/toi.png" style="width:100%;" alt="Times of India" /></div>
<div class="news_testdiv">

<div class="news_heading">Suraksha Diagnostics in talks with US based Mayo Labs</div>


</div>
</div> </a>


<a href="https://timesofindia.indiatimes.com/business/india-business/OrbiMed-to-invest-40m-in-Suraksha-Diagnostics/articleshow/55465431.cms" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="http://localhost/furtune/public/images/toi.png" style="width:100%;" alt="Times of India" /></div>
<div class="news_testdiv">

<div class="news_heading">OrbiMed to invest $40m in Suraksha Diagnostics</div>


</div>
</div> </a>

<a href="https://timesofindia.indiatimes.com/city/kolkata/robotics-to-help-test-blood-samples-in-half-an-hour-and-with-zero-error/articleshow/68003049.cms" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="http://localhost/furtune/public/images/toi.png" style="width:100%;" alt="Times of India" /></div>
<div class="news_testdiv">

<div class="news_heading">Robotics to help test blood samples in half an hour, and with zero error</div>


</div>
</div> </a>

<a href="https://www.indiatoday.in/pti-feed/story/suraksha-diagnostics-in-talks-with-us-based-mayo-labs-910416-2017-04-18" target="_blank"><div class="latest_news_maindiv">

<div class="latest_news_datemaindiv"><img src="http://localhost/furtune/public/mages/india-today-logo.jpg" style="width:100%;" alt="India Today" /></div>
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
     @foreach($corporate_services as $service)
      <li>{{$service->service}}</li>
    @endforeach


      </ul>





<!--<div class="welcome_bodytxt" style="margin-top:25px;"><a href="corporate-tieup.php"><button class="button" style="float:right;"> Read More </button></a></div>-->
</div>

<div class="franchisee_img_div">
  <div class="merchants-list">
    <div class="wrapper1">
    <div class="merchants-image">
      vsdfsdfsdf
    </div>
  </div>




</div></div>


</div>


</div>





<!--  BODY Part6 -->






<!--  BODY Part5 -->


</div>
@endsection
