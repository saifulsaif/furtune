
@extends('fontend.app')
@section('content')




<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Telemedicine</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > Telemedicine </div>

</div>

</div>

<div class="static_mainbody_div">

<div class="location_maindiv">

<div class="services_leftdiv" style="width:100%; margin-right:0px;">
<div class="service_image"><img src="{{$telemedicines->image}}" class="img_css" alt="service" /></div>

<div class="main_service_div">
<div class="location_leftdivtxt1">


  <span class="static_subheading" >{{$telemedicines->title}}</span><br /><br />
 <!--<div class="service_imgdesktop"><img src="images/service/xray.jpg" class="img_css" /></div>-->
<p>
{{$telemedicines->description}}</p>

</div>

<div class="service_facility " >



</div>

</div>

<div class="service_imagediv_main"> <div class="service_imgdesktop1"><img src="{{asset($telemedicines->image)}}" class="img_css" alt="service" /></div>

   </div>

</div>






<!--<div class="services_rightdiv">


</div>-->

</div>






</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->
@endsection
