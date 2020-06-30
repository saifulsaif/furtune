
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

<div class="static_pagetxt" >
<span  style="font-weight:600;">



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
<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

<div class="wb_address_div">


<strong>{{$site_infos->applicaton_name}}</strong><br />



Phone : <a href="{{$site_infos->phone}}" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;{{$site_infos->phone}} </a><br />
Hotline: <a href="{{$site_infos->hotline}}" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;{{$site_infos->hoteline}}</a></span>



<br />
<br />
</div>

<form action="" method="post" name="get-in-touch" id="get-in-touch">

<div class="get_touch_formdiv">
<div class="address_form_heading static_subheading">Contact Us</div>

<div class="feedbackformdiv"><input name="Uname" id="Uname" type="text" class="form_style" placeholder="Please Enter Name " autocomplete="off" /></div>

<div class="feedbackformdiv" style="margin-top:10px;"><input id="email" class="form_style" type="text" autocomplete="off" placeholder="Enter Your Email Id" name="email"></input></div>

<div class="feedbackformdiv" style="margin-top:10px;"><input id="mob" class="form_style" type="text" autocomplete="off" placeholder="Enter Your Mobile No" name="mob" onkeypress="return isNumberKey(event)" maxlength="10"></input></div>



<div class="feedbackformdiv" style="margin-top:10px; height:auto;"><textarea id="complaint" class="form_style" autocomplete="off" placeholder=" Enter Your Message" style="resize:none; width:100%; height:100px;" rows="" cols="" name="complaint"></textarea></div>


<div class="feedbackformdiv" style="margin-top:10px;"><input class="feedback_submit_btn" type="submit" value="SUBMIT " name="submit" style="width:100%; margin-right:0px; margin-top:15px;"></input></div>

</div>

</form>

</div>




</div>

</div>




<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
