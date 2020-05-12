
@extends('fontend.app')
@section('content')







<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->
<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Franchisee</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a> > Franchisee</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">
<div class="static_pagetxt" style="text-align:left;">
 <span style="font-size:28px; font-weight:bold; line-height:35px;">WANT TO BE A FURTUNE FRANCHISEE? </span>
<br /><br />

Fill in your details here:
</div>
</div>



<form action="{{action('PageController@saveFranchisee')}}" method="post">
@csrf

<div class="static_pagetxt">



<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt"> Name</div>

<div class="feedbackformdiv"><input name="name" id="name" type="text" class="form_style" placeholder="Please Enter Your Name " autocomplete="off" />



</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">Age</div>
<div class="feedbackformdiv"><input name="age" id="age" type="text" class="form_style" placeholder="Please Enter Your Age" autocomplete="off" onkeypress="return isNumberKey(event)" /></div>

</div>


</div>


<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Locality </div>

<div class="feedbackformdiv"><input name="locality" id="locality" type="text" class="form_style" placeholder="Enter Your Locality Name" autocomplete="off" />



</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">Carpet Area of Commercial Property </div>
<div class="feedbackformdiv"><div class="carpet_area"><input name="area" id="carpet_area" type="text" class="form_style" placeholder="Enter Your Carpet Area of Commercial Property" autocomplete="off" onkeypress="return isNumberKey(event)"/></div>sq.ft.</div>

</div>


</div>

<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Mobile No</div>

<div class="feedbackformdiv"><input name="phone" id="mob" type="text" class="form_style" placeholder="Enter Your Mobile No" autocomplete="off"  onkeypress="return isNumberKey(event)"/>



</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">Email Id</div>
<div class="feedbackformdiv"><input name="email" id="email" type="text" class="form_style" placeholder="Enter Your Email Id" autocomplete="off" /></div>

</div>


</div>



<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Pincode </div>

<div class="feedbackformdiv"><input name="pin" id="pin" type="text" class="form_style" placeholder="Enter Your Pin Code" autocomplete="off" onkeypress="return isNumberKey(event)" />



</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">
Captcha Code



</div>

<div class="feedbackformdiv">
<div class="catcha_div"><div style="float:right; width:40px;height:auto; cursor:pointer;"><a href='javascript: refreshCaptcha_appoint();'><img src="../images/button-rotate-cw_sticker.png" width="35" /></a></div> <img src="captcha-demo.php" id="capt" style="float:left; margin-top:10px;"></div>


<div class="captcha_txtboxdiv"><input name="captcha" id="captcha" type="text" class="form_style" placeholder="Enter Your Captcha Code" autocomplete="off" /></div></div>
<span id="captha_message" style="color:#FF0000; display:none" >The Validation code does not match!</span>
</div>


</div>


<div class="registration_div"><input name="submit" type="submit" class="feedback_submit_btn" value="SUBMIT "  /></div>

</div>

</form>



</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
