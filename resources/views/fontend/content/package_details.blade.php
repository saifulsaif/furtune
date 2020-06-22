
@extends('fontend.app')
@section('content')





<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Health Package</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a>  >  Health Package  >  Executive Health  Package</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

<span class="static_subheading" style="font-weight:600; font-size:23px; line-height:28px;">{{$packages->package_name}}</span><br /><br />



<div class="healthpackage_new_maindiv">
<div class="healthpackage_imgdivmain"><div class="healthpackage_imgdiv"><img src="{{asset($packages->image)}}" style="width:100%;" alt="Executive Health  Package" /></div>

<div class="book_packagediv"><a class="various5" onclick="appointment_modal({{'2'}},'{{ 'Book Package' }}','{{ '' }}')" data-fancybox-type="iframe"><div class="feedback_submit_btn packagebooking1" style="float:left; width:100%; margin-top:10px;">BOOK PACKAGE</div></a></div>


</div>

<div class="healthpackage_details_maindiv">
<div class="healthpackage_detail">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  @foreach($package_details as $pack)
  <tr>
    <td width="20%" class="table_txt" style="border-right:2px solid #99cf4e; font-weight:600;" valign="top">{{$pack->service}}</td>
    <td width="80%" class="table_txt" style="padding-left:15px; border-bottom:2px solid #99cf4e; padding-bottom:10px;">{{$pack->description}}</td>
  </tr>
  @endforeach

</table>






</div>




</div>


</div>


</div>




</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

<div class="modal fade" style="margin-top:5%;" id="appointment_model_new" tabindex="-1" role="dialog" aria-labelledby="appointment_model_new" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header  bg-light">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: red">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="text-center bg-primary modal-head">
                      <h3 class="modal-title centerShow" id="doctor_nameShow"></h3>
                      <h5 class="modal-title doctor_nameShow" id="centerShow"></h5>
                  </div><br/>
                  <form class="contact100-form validate-form" >
                          @csrf
                          <input type="hidden" name="doctor_id" id="doctor_id" class="col-md-12" value="" >

                          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                              <input class="input100" placeholder="Please Enter Name" style="border: none;border-bottom: 1px solid #999999;width:100%" type="text" name="name" >
                              <span class="focus-input100"></span>
                          </div><br/>
                          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                              <input class="input100"  placeholder="Please Enter Email" type="text" name="email"  style="border: none;border-bottom: 1px solid #999999;width:100%" >
                              <span class="focus-input100"></span>
                          </div><br/>

                          <div class="wrap-input100 validate-input" required data-validate="Phone is required">

                              <input class="input100"  placeholder="Please Enter Phone" type="text"  style="border: none;border-bottom: 1px solid #999999;width:100%"  name="phoneNumber" >
                              <span class="focus-input100"></span>
                          </div><br/>
                          <div class="wrap-input100 validate-input" required data-validate="Phone is required">
                              <input class="input100" placeholder="Write Message" type="text"  style="border: none;border-bottom: 1px solid #999999;width:100%" >
                              <span class="focus-input100"></span>
                          </div><br/>



                          <div class="float-right btn btn-center">
                              <button type="submit" class="btn btn-primary ">
                                  <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                  Book Now</button>
                          </div>

                  </form>
              </div>



              </div>
          </div>

      </div>
@endsection
