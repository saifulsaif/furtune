
@extends('fontend.app')
@section('content')




<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" style="margin-top:200px;">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">{{$service_info->title}}</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > Our Services > Imaging > X Ray</div>

</div>

</div>

<div class="static_mainbody_div">

<div class="location_maindiv">

<div class="services_leftdiv" style="width:100%; margin-right:0px;">
<div class="service_image"><img src="{{$service_info->image}}" class="img_css" alt="service" /></div>

<div class="main_service_div">
<div class="location_leftdivtxt1">


 <!--<div class="service_imgdesktop"><img src="images/service/xray.jpg" class="img_css" /></div>-->



  {{$service_info->description}}
</div>

<div class="service_facility " >
<span class="static_subheading" >OUR FACILITY:</span><br /><br />

<ul>
  @foreach($facilities as $faci)
   <li class="cre-animate" data-animation="slide-in-from-right" data-speed="1000" data-delay="0" data-offset="70%" data-easing="easeInOutBack">{{$faci->note}}</li>
@endforeach
</ul>


</div>

</div>

<div class="service_imagediv_main"> <div class="service_imgdesktop1"><img src="{{asset($service_info->image)}}" class="img_css" alt="service" /></div>

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
