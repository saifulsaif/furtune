
@extends('fontend.app')
@section('content')




<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Customer Care</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > About Us >  Customer Care</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

<br />
@foreach($customer_care as $care)
<span class="static_subheading">{{$care->title}}</span><br />
<p>{{$care->description}}</p> <br /><br />

@endforeach

<span  style="font-weight:600;">

Phone : <a href="tel:{{$site_infos->phone}}" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;{{$site_infos->phone}}</a><br />

HotLine : <a href="tel:{{$site_infos->hoteline}}" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;{{$site_infos->hoteline}}</a><br />


<br />
<!-- <a href="https://www.facebook.com/SurakshaDiagnosticServices/" target="_blank" ><div class="customer_facebook"><img src="{{asset('public/images/facebook.png')}}" class="img_css" /></div></a>
<a  href="https://twitter.com/surakshatweets" target="_blank" ><div class="customer_facebook" style="margin-right:0px;"><img src="../../images/twitter.png" class="img_css" /></div></a> -->

<br />
</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->


@endsection
