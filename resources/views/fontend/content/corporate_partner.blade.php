
@extends('fontend.app')
@section('content')




<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" style="margin-top:200px;">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Corporate Partners</div>

<div class="breadcrum_div"><a href="index.php" style="text-decoration:none; color:#333333;">Home</a>  >  Corporate Partners  </div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

@foreach($partners as $parter)
<div class="client_logobg">
  <a href="{{$parter->website_link}}">
  <img src="{{asset($parter->image)}}" class="img_css" alt="logo" />
</a>
</div>
@endforeach





























<!--<div class="client_logobg"><img src="images/corporate/logo17-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo20-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo24-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo3-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo26-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo27-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo38-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo46-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo41-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo42-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo44-inside.jpg" class="img_css" /></div>
<div class="client_logobg"><img src="images/corporate/logo47-inside.jpg" class="img_css" /></div>-->




</div>


</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
