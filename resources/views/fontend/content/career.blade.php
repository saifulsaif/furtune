
@extends('fontend.app')
@section('content')

<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" style="margin-top:200px;">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Career</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> >  Contact Us > Career</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt" style="text-align:justify;">

Your search to the right job opportunity ends here. India’s fastest growing diagnostic network, Suraksha, offers a choice of opportunities fulfill your ambitions and exceed your expectations.

</div>

<div class="career_boxmaindiv">


@foreach($careers as $career)
<a href="shared-values.php"><div class="career_activityBG_new1 mg-image">

<div class="career_activityimg mg-image"><img src="{{asset($career->image)}}" class="img_css" alt="Shared Values" /></div>
<div class="career_activitytxt_maindiv"><div class="career_boxtxt1">{{$career->title}}</div></div>

</div></a>
@endforeach

</div>


</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->
@endsection
