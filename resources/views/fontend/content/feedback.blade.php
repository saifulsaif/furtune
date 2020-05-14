
@extends('fontend.app')
@section('content')




<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Feedback</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > Contact Us > Feedback</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">
<div class="static_pagetxt">

<div class="feedback_pagediv">
 <span style="font-size:28px; font-weight:bold;">Patient Satisfaction </span>
<br /><br />

Your opinion has weight! We encourage you to appraise our services.</div>

<div class="starrating_imgdiv" id="display_avg_ratting"><img src="{{asset('public/images/0.0.png')}}" class="img_css" /></div>
</div>
</div>

<div class="static_pagetxt" style="margin-bottom:30px;">
 <span style="font-size:28px; font-weight:bold; color:#990000;" >Assess Furtune </span>

</div>

<form action="{{action('PageController@saveFeedback')}}" method="post">
@csrf

<div class="static_pagetxt">

<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Are you happy with your experience at Furtune?</div>

<div class="feedbackformdiv" >
<select name="experiance" required id="experiance" class="form_style">

<option selected="selected"   value="">Please Choose</option>
<option value="Yes">Yes</option>
<option value="No">No</option>




</select>


</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">What was your best moment with us?</div>
<div class="feedbackformdiv"><input name="moment" required id="best_moment" type="text" class="form_style" placeholder="Please Enter Your Best Moment" autocomplete="off" /></div>

</div>


</div>

<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Do you suggest a new branch?</div>

<div class="feedbackformdiv" style="height:25px; padding-top:10px;">

<input type="radio" name="suggest" id="radio1" class="css-checkbox" value="Yes" /><label for="radio1" class="css-label radGroup1" style="margin-right:10px;">Yes</label>
<input type="radio" name="suggest" id="radio2" class="css-checkbox"  value="No"/><label for="radio2" class="css-label radGroup1">No</label>

</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">Where ?</div>
<div class="feedbackformdiv"><input  required  name="location" id="location" type="text" class="form_style" placeholder="Please Enter Where you suggest a new branch" autocomplete="off" /></div>

</div>


</div>

<!-- <div class="static_pagetxt" style="margin-bottom:30px;  margin-top:30px;">
 <span style="font-size:28px; font-weight:bold; color:#990000;" >Rate Your Experience</span>

</div>








<div class="registration_div" style="margin-bottom:5px;">

<div class="starreating_divleft">

<div class="reating_div">Booking Procedure</div>
<input type="hidden" name="booking" id="booking"  value="0"/>
<div class="starrating_div" > <div class="demo1 " ></div></div>

</div>

<div class="starreating_divmiddle">

<div class="reating_div">Waiting Time</div>
<input type="hidden" name="waiting_time" id="waiting_time"  value="0"/>
<div class="starrating_div"> <div class="demo2" ></div></div>
</div>

<div class="starreating_divright">
<div class="reating_div">Staff Willingness</div>
<input type="hidden" name="willingness" id="willingness" value="0" />
<div class="starrating_div" > <div class="demo3" ></div></div>
</div>

</div>


<div class="registration_div" style="margin-bottom:5px;">

<div class="starreating_divleft">

<div class="reating_div">Quality of Service</div>
<input type="hidden" name="qservice" id="qservice" value="0" />
<div class="starrating_div" > <div class="demo4" ></div></div>

</div>

<div class="starreating_divmiddle">

<div class="reating_div">Doctor Consultation</div>
<input type="hidden" name="consultation" id="consultation" value="0" />
<div class="starrating_div"> <div class="demo5" ></div></div>
</div>

<div class="starreating_divright">
<div class="reating_div">Report Delivery</div>
<input type="hidden" name="delivery_report" id="delivery_report"  value="0"/>
<div class="starrating_div" > <div class="demo6" ></div></div>
</div>

</div>


<div class="registration_div" style="margin-bottom:5px;">

<div class="starreating_divleft">

<div class="reating_div">On Floor Services</div>
<input type="hidden" name="fservice" id="fservice"  value="0"/>
<input type="hidden" name="Avg_Rating" id="Avg_Rating" />

<div class="starrating_div" > <div class="demo7" ></div></div>

</div>

<!--<div class="starreating_divmiddle">

<div class="reating_div">Doctor Consultation</div>
<div class="starrating_div"> <div class="demo4" ></div></div>
</div>

<div class="starreating_divright">
<div class="reating_div">Report Delivery</div>
<div class="starrating_div" > <div class="demo5" ></div></div>
</div>-->

<!-- </div>  -->

















<div class="static_pagetxt" style="margin-bottom:30px;  margin-top:30px;">
 <span style="font-size:28px; font-weight:bold; color:#990000; line-height:32px;" >Complaint, Request or Message</span>

</div>

<div class="registration_div">

<textarea name="complaint" id="complaint" required  cols="" rows="" class="form_style" style="resize:none; width:95%; height:100px;" placeholder="Please Enter Your Complaint, Request or Message" autocomplete="off"></textarea>

</div>

<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">First Name</div>

<div class="feedbackformdiv"><input name="f_name" required  id="f_name" type="text" class="form_style" placeholder="Please Enter First Name " autocomplete="off" />



</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">Last Name</div>
<div class="feedbackformdiv"><input name="l_name" required  id="l_name" type="text" class="form_style" placeholder="Please Enter Your Last Name" autocomplete="off" /></div>

</div>


</div>

<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Mobile No</div>

<div class="feedbackformdiv"><input name="phone" required  id="mob" type="text" class="form_style" placeholder="Enter Your Mobile No" autocomplete="off" onkeypress="return isNumberKey(event)" />



</div>

</div>


<div class="registrationmain_divright">
<div class="formtxt">Email Id</div>
<div class="feedbackformdiv"><input name="email" required  id="email" type="text" class="form_style" placeholder="Enter Your Email Id" autocomplete="off" /></div>

</div>


</div>



<div class="registration_div">

<div class="registrationmain_divleft">
<div class="formtxt">Centre you last visited</div>

<div class="feedbackformdiv"><input name="visited_center" required  id="last_visit" type="text" class="form_style" placeholder="Centre you last visited" autocomplete="off" />



</div>

</div>


<!--<div class="registrationmain_divright">
<div class="formtxt">Email Id</div>
<div class="feedbackformdiv"><input name="email" id="email" type="text" class="form_style" placeholder="Enter Your Email Id" autocomplete="off" /></div>

</div>-->


</div>


<div class="registration_div"><input name="submit" type="submit" class="feedback_submit_btn" value="SEND RATING "  /></div>

</div>

</form>



</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->


@endsection
