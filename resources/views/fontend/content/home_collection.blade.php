
@extends('fontend.app')
@section('content')


<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Home Collection Services</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a> > Home Collections</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt" style="margin-bottom:25px;">





</div>


<div class="static_pagetxt">

<div class="static_pagetxt" ><span class="static_subheading" style="font-weight:500;">To book your home collection, call us at:  </span></div>

<div class="static_pagetxt" >
<span  style="font-weight:600;">

Phone : <a href="{{$site_infos->phone}}" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;{{$site_infos->phone}} </a><br />
Hotline: <a href="{{$site_infos->hotline}}" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;{{$site_infos->hoteline}}</a></span>





</div>



<div class="static_pagetxt" style="margin-bottom:40px;"><span class="static_subheading" style="font-weight:500;">Main Benefits of Home Collection Services: </span></div>

<div class="static_pagetxt1" >

@foreach($home_collection as $home)
<div class="collection_benefitdiv">
<div class="benifiticon_maindiv"><div class="{{$home->icon}}"></div></div>
<div class="comfortiblediv_txt">{{$home->service}}</div>
</div>
@endforeach


</div>






</div>

</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
