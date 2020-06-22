
@extends('fontend.app')
@section('content')
<!-----------------  Body Start  ------------------ -->
<div class="body_maindiv">
<!------------------  profile  ------------------->
<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Team of Experts</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > About Us > Team of Experts</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">


@foreach($experts as $expert)
<div class="expartBG_main">

<div class="expart_maindiv">

<div class="expartsimage"><img src="{{asset($expert->image)}}" class="img_css" alt="Suparba Chakrabarti" /></div>
<div class="teamtxt_mainBG">
<span class="team_name">{{$expert->name}}</span><br />
<strong>{{$expert->specialization}} </strong><br />
<br />
<strong>Designation : </strong> {{$expert->designation}}
<br />
<br />
<strong>From : </strong> {{$expert->from}}
<br />
<br />


<strong>Specialization :</strong>{{$expert->specialization}} <br />
<br />


<strong>Experiance : </strong>{{$expert->experience}}
<br />
<br />
<strong>Area of Interest : </strong>{{$expert->intertest}}
<br />
<br />

<strong>Description : </strong> {{$expert->descreption}}
<br />
<br />

</div>

</div>

</div>
@endforeach


</div>

</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->
@endsection
