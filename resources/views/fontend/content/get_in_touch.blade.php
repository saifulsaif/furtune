
@extends('fontend.app')
@section('content')


<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" style="margin-top:200px;">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Get in Touch	</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > Contact Us > Get in Touch</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

<div class="wb_address_div">

<span class="static_subheading">


<strong>Corporate office</strong> </span><br />
<strong>Suraksha Diagnostics Private Limited</strong><br />



12/1, Premises No. 02-0327,<br />


DG Block, Action Area 1D,<br />


New Town, Kolkata - 700156<br />


Phone: <a href="tel:03366059750" style="color:#333333; text-decoration:none;">(033) 66059750 </a><br />
Helpline No : <a href="tel:03366191000" style="color:#333333; text-decoration:none;"> 033-6619 1000</a><br />


E-mail: <a href="mailto:info@surakshanet.com" style="color:#333333; text-decoration:none;">info@surakshanet.com</a>


<br />
<br />
</div>

<form action="" method="post" name="get-in-touch" id="get-in-touch">

<div class="get_touch_formdiv">
<div class="address_form_heading static_subheading">GET IN TOUCH</div>

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


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection