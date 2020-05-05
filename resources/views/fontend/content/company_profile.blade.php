
@extends('fontend.app')
@section('content')
<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" style="margin-top:218px;">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Company Profile</div>

<div class="breadcrum_div"><a href="../index-2.html" style="text-decoration:none; color:#333333;">Home</a>  >  About Us  </div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt" style="border-bottom:1px solid #333333;">

@foreach($com_profiles as $pro)
<span class="static_subheading"  style="font-weight:500; font-size:18px;">{{$pro->title}}</span><br />

{{$pro->description}}
<br />
<br />
@endforeach
</div>


<!-- <div class="static_pagetxt" style="margin-top:20px;">

<span class="static_subheading" style="font-weight:600; font-size:26px;">Our Mission </span><br />
To serve the society with leading edge, world class diagnostic services at an affordable price and to make Reliable, Economical and Latest diagnostic facilities with Global Quality Standards - available to a major segment of the society in India. <br />
<br /><br />


<span class="static_subheading" style="font-weight:600; font-size:26px;">Our Vision</span><br />
To be the leading complete diagnostic solution provider in the country; to build a chain of diagnostic centers throughout Eastern India and be recognized as the best in the country.

</div> -->

</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
