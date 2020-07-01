
@extends('fontend.app')
@section('content')



<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" >

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Health Package</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> >Health Package</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">
<div class="static_pagetxt">

<div class="feedback_pagediv">
 <span style="font-size:28px; font-weight:bold;">EXECUTIVE HEALTH & WELL BEING CENTER </span>

</div>
</div>

<div class="static_pagetxt" style="margin-bottom:30px;">

</div>

<form action="" method="post" name="feedback">

<div class="static_pagetxt">

<div class="registration_div">
@foreach($health_package_list as $list)
<div class="registrationmain_divleft">
<div class="formtxt">
  <a style="color:black;text-decoration: none;" href="{{url('package-details/'.$list->id)}}"><i style="color:#4b9b4b;margin-right: 7px;" class="fa fa-chevron-circle-right" aria-hidden="true"></i>{{$list->package_name}} <span style="color:green;font-weight: 600;">Price: {{$list->rate}}</span></a>
</div>

</div>
@endforeach




</div>


















</form>



</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
