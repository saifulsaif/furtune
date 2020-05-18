
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
Fortune takes extra care in ensuring customer satisfaction since it believes in reducing the pain of patients who walk in each day to get a clear assessment of their health condition. The main aim of Team Fortuneis to help patients and their families have a hassle-free experience during tests being conducted in our centers. <br />
<br />
Therefore, we employ a multi-channel approach to  customer care services for each and every one of our patients who avail  our services.
<br />
<br />
@foreach($customer_care as $care)
<span class="static_subheading">{{$care->title}}</span><br />
<p>{{$care->description}}</p> <br /><br />

@endforeach

<span  style="font-weight:600;">

West Bengal : <a href="tel:03366191000" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;033-6619-1000</a><br />

Delhi & NCR : <a href="tel:18001219541" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;1800-121-9541</a><br />

Bihar : <a href="tel:09523096399" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;<!--0612-669-2000-->0952-309-6399 </a><br />
Whatsapp: <a href="whatsapp://send?phone=+917044492525" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;7044492525</a></span><br />
<br />
<a href="https://www.facebook.com/SurakshaDiagnosticServices/" target="_blank" ><div class="customer_facebook"><img src="{{asset('public/images/facebook.png')}}" class="img_css" /></div></a>
<a  href="https://twitter.com/surakshatweets" target="_blank" ><div class="customer_facebook" style="margin-right:0px;"><img src="../../images/twitter.png" class="img_css" /></div></a>

<br />
</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->


@endsection
