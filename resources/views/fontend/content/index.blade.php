
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

<a href="#" target="_blank"><div class="download_report_div">Download Report</div></a>


<!--<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="download_report_div">Download Report</div></a>-->


<!--<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report West Bengal</div></a>
<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report Delhi & NCR</div></a>
<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="icon_subheading1" >Online Report Bihar</div></a>-->

</div>

<form action="#" method="post" name="find_lab">

<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon2"></div></div>
</div>

<div class="icon_heading"> Appointment</div>
<div class="icon_subheading1" style="margin-bottom:12px; font-size:14px;">Click here to book Appointment</div>

<a href="{{route('fortune.getDoctor')}}" target="_blank"><div class="download_report_div ">BOOK</div></a>

<div class="icon_subheading">

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
<div class="icon_subheading2" style="margin-bottom:15px;">Phone : <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>{{$site_infos->phone}}</span></div>



<!--<div class="icon_subheading2" style="margin-bottom:15px;">DELHI & NCR : <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>1800-121-9541 </span></div>-->

<div class="icon_subheading2" >Hotline : <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>{{$site_infos->hoteline}}</span></div>

</div>


</div>




<div class="body_topBG_main_responsive">
  <div class="desktop_box1">

  <div class="icon_maindiv">
  <div class="icon1_maindiv"><div class="icon4"></div></div>
  </div>

  <div class="icon_heading">HELPLINE NO</div>
  <a href="tel:{{$site_infos->phone}}"><div class="icon_subheading2" >Phone  <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>{{$site_infos->phone}}</span></div></a>



  <a href="tel:{{$site_infos->hoteline}}"><div class="icon_subheading2" >Hotline <span style="text-align:right; float:right; font-weight:bold;"><i class="fa fa-phone" style="margin-right:10px; font-size:16px;" ></i>{{$site_infos->hoteline}}</span></div></a>

  </div>


<form action="#" method="post" name="find_lab">

<div class="desktop_box1">

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon2"></div></div>
</div>

<div class="icon_heading">Appointment</div>
<div class="icon_subheading">Click here to book</div>

<!--<div class="icon_subheading"><input name="find_lab" type="text" class="find_location_txtbox" placeholder="Enter Your Pin Code" maxlength="6" onkeypress="return isNumberKey(event)" /></div>

<div class="icon_subheading"><input name="search" type="submit" value="Search" class="nearestlab_btn" /></div>-->

<a href="{{route('fortune.getDoctor')}}" target="_blank"><div class="download_report_div ">BOOK</div></a>

<!--<div class="icon_subheading"><input name="search" type="submit" value="Find My Nearest Lab" class="nearestlab_btn" style="width:96%;" /></div>-->


</div>

</form>
<div class="desktop_box1 " >

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon1"></div></div>
</div>

<div class="icon_heading">DOWNLOAD REPORT</div>
<div class="icon_subheading1" style="margin-bottom:12px; font-size:14px;">Click here to download report online</div>

<a href="#" target="_blank"><div class="download_report_div">Download Report</div></a>

<!--<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report West Bengal</div></a>
<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report Delhi & NCR</div></a>
<a href="http://52.172.206.185:9623/Fortuneweb/" target="_blank"><div class="icon_subheading1" style="margin-bottom:12px;">Online Report Bihar</div></a>-->

</div>
<div class="desktop_box1">

<div class="icon_maindiv">
<div class="icon1_maindiv"><div class="icon3"></div></div>
</div>

<div class="icon_heading">QUICK LINKS</div>
<a href="{{route('customer_care')}}"><div class="icon_subheading1">Customer Care</div></a>

<a href="{{route('home_collection')}}"><div class="icon_subheading1">Home Collection Services</div></a>

<a href="{{url('/getDoctor')}}"><div class="icon_subheading1">Doctor's Appointment</div></a>

<a href="{{route('event')}}"><div class="icon_subheading1">Media & Events</div></a>


</div>




</div>


</div>


</div>


<!--  BODY Part1 -->


<!--  BODY Part2 -->

<div class="index_aboutmaindiv">
@foreach($index_infos as $info)
<div class="index_aboutdiv">

<div class="welcome_header" ><!--Welcome to <span style="color:#16bd28d4 !important;">FortuneDiagnostic</span>--> <span style="color:#16bd28d4 !important;">{{$info->title}}</span> </div>


<br />


{{$info->description}}</div>

<div class="welcome_bodytxt"><a href="{{url('/')}}"><div style="margin:0px auto;margin-top: 31px;" class="button"><span>Read More </span></div></a></div>

</div>
@endforeach

</div>





<!--  BODY Part2 -->




<div class="index_aboutmaindiv" style="background-color:#eeeeee; margin-bottom:0px;">



<div class="newindex_aboutdiv">
  @foreach($lab_infos as $lab)
<div class="newhome_aboutdiv" style="width:100%; margin-right;0%">


<div class="welcome_header welcome_header_new" style="text-align:left; color:#16bd28d4 !important; font-weight:400; font-size:28px;">{{$lab->title}}</div>
<div class="home_robot">

<div class="robot_txt">
<div class="welcome_bodytxt" style="text-align:left; text-align:justify; line-height:28px;">{{$lab->description}}<br />
<br />
 </div>

<!--<div class="welcome_bodytxt"><a href="https://Fortunenet.com/about-us/company-profile"><div class="button" style="float:left;"><span>Read More </span></div></a></div>--->

</div>

<div class="robot_lab_video"><a class="various2 fancybox.iframe" href="{{$lab->video_link}}"><img src="{{asset($lab->image)}}" style="width:100%;" alt="Video"/></a><!--<iframe width="100%" height="250" src="https://www.youtube.com/embed/pDjxZilfQ30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--></div>

</div>

</div>

@endforeach




<!---<div class="clugenix_partner_div" >

<div class="welcome_header welcome_header_new" style="text-align:left;"><span style="color:#16bd28d4 !important;">FortuneDiagnostics Pvt. Ltd </span>Inks JV with <span style="color:#16bd28d4 !important;">Cluegenix</span>
 Introduces <span style="color:#16bd28d4 !important;">AI Enabled Smart Lab</span></div>

<div class="clugenix_logodiv"><img src="images/clugenix-logo.png" alt="Clugenix" /></div>





<div class="welcome_bodytxt"><a href="https://Fortunenet.com/about-us/company-profile"><div class="button" style="float:left;"><span>Read More </span></div></a></div>
</div>--->








</div>


</div>




<!--<a href="swine-flu.php"><div class="newindex_aboutdiv" style="margin-bottom:30px;"><img src="images/Fortune-h1n1-1.jpg" class="img_css" /></div></a>-->



















<!--  BODY Part2 -->

<div class="index_aboutmaindiv">
<div class="index_aboutdiv">

<div class="welcome_header" ><!--Welcome to <span style="color:#16bd28d4 !important;">FortuneDiagnostic</span>--> <span style="color:#16bd28d4 !important;">Gallery</span> </div>


<br />
<!-- <div class="row">
  <div class="col-md-3" style="background-color:red;padding:5px;">
    <img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/>
  </div>
  <div class="col-md-3" style="background-color:red;padding:5px;">
    <img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/>
  </div>
  <div class="col-md-3" style="background-color:red;padding:5px;">
    <img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/>
  </div>
  <div class="col-md-3" style="background-color:red;padding:5px;">
    <img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/>
  </div>
  <div class="col-md-3" style="background-color:red;padding:5px;">
    <img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/>
  </div>
  <div class="col-md-3" style="background-color:red;padding:5px;">
    <img src="{{asset('public/images/robot-video.jpg')}}" style="width:100%;" alt="Video"/>
  </div>
</div> -->





<div class="media_image_maindiv">



@foreach($galleries as $pic)
<div class="inner_imgbg mg-image" style="width: 23%;
    height: auto;
    float: left;
    margin: 0px 1% 20px 0px;
    4pxsolid #fff: ;
    box-shadow: 0px 0px 2px #aaa;
    -moz-box-shadow: 0px 0px 2px #aaa;
    -webkit-box-shadow: 0px 0px 2px #aaa;
    border: 1px solid #FFFFFF;">
  <div class="single-effect">
          <figure class="wpf-demo-1">
           <img src="{{asset($pic->image)}}" class="img_css" />
            <figcaption class="view-caption">

             <a  href="{{asset($pic->image)}}" data-lightbox="example-5" data-title="Free Health Chackup, Sonarpur" class=" example-image-link" style="text-decoration:none;">	 More</a>

             <a  href="{{asset($pic->image)}}" data-lightbox="example-5" data-title="Free Health Chackup, Sonarpur" class=" example-image-link" style="text-decoration:none;"></a>
            </figcaption>
          </figure>
      </div>
</div>
@endforeach




</div>

</div>

<div class="welcome_bodytxt">
  <a href="{{route('gallery')}}">
    <div style="margin:0px auto;" class="button">
      <span>Read More </span>
    </div>
  </a>
</div>

</div>

</div>


<!-- <div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2>hello</h2>
    </div>
    <div class="col-md-4">
      <h2>hello</h2>
    </div>
    <div class="col-md-4">
      <h2>hello</h2>
    </div>
  </div>
</div> -->


<!--  BODY Part2 -->


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
<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

<div class="shared_values_div">
  <div class="welcome_header" style="text-align:center;margin-bottom:36px;">

  Our <span style="color:#16bd28d4 !important;">Services</span>

  </div>

  @foreach($sub_menu as $sub)
  @if($sub->menu_id==1)
  @php
       $submenu_list = getAll_id('submenu_id',$sub->id,'submenu_facilities');
  @endphp
  <div class="shared_values_maindiv1"><span class="static_subheading">{{$sub->sub_menu_name}}</span><br />
  <ul style="margin-left:-18px;">
    @if (!empty($submenu_list))
            @foreach($submenu_list as $list)
                @if($list->submenu_id==$sub->id)
                <li><a  style="color:black;" href="{{url('service/'.$list->id)}}" title="">{{$list->item_name}}</a></li>
                @endif
        @endforeach
    @endif
  </ul>
  </div>
  @endif
   @endforeach


</div>




</div>



</div>

</div>
<!--  BODY Part4 -->

<div class="media_maindiv">


<div class="preferd_vendormainBG">

<div class="media_div" >
<div class="media_heading">Media & Events</div>

<div class="scroll_div">






<div class="owl-carousel1 owl-carousel owl-theme">
    @foreach($events as $event)
          <a href="{{route('event')}}" > <div class="item">
            <div class="producthomeDiv">

      <div class="panel_img"><img src="{{$event->image}}" class="img_css" alt="Tamluk Centre" /></div>



     <div class="panel_heading_new">{{$event->title}}<br />
<br />
</div>

     </div>

            </div></a>
@endforeach


</div>

</div>
</div>



</div>




<!--  BODY Part4 -->


<!--  BODY Part5 -->


<!--  BODY Social Media -->

<!--<div class="media_maindiv">


<div class="preferd_vendormainBG">

<div class="twitter_feeddiv"><a class="twitter-timeline" href="https://twitter.com/Fortunetweets" data-chrome=" nofooter noborders transparent" style="width:100%;" data-height="500">Tweets by FortuneDiagnostic</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

<div class="instagram_feeddiv"></div>

</div></div>-->

<!--  BODY Social Media -->

<!-- BODY Part5 -->

<div class="tieup_maindiv" style="padding-bottom:30px; ">


<div class="preferd_vendormainBG">

<div class="welcome_header" style="text-align:center;">

Corporate <span style="color:#16bd28d4 !important;">Partners</span>

</div>

<div class="tipup_scrollmaindiv">
<div class="franchisee_txt_div" >
  <span style="color: #16bd28d4 !important; font-weight: 400; font-size: 30px;"> What can we do for your company?</span><br/><br/>

      <ul style="list-style:none; margin-left:-35px;">
     @foreach($corporate_services as $service)
      <li>{{$service->service}}</li>
      @endforeach
      </ul>
</div>
<div class="franchisee_img_div">
  <div class="merchants-list">
    <div class="wrapper1">
    <div class="row">
      @foreach($partners as $part)
      <div class="col-md-3">
        <img style="height: 100px;" src="{{$part->image}}" alt="">
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>


</div>


</div>





<!--  BODY Part6 -->






<!--  BODY Part5 -->


</div>
@endsection
