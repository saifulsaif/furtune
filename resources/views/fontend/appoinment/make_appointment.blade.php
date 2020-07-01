@extends('fontend.app')
@section('content')
<link rel="stylesheet" href="{!! asset('public/css/appointment/main.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('public/css/appointment/util.css') !!}" type="text/css" />
<style media="screen">
    /* body{
        padding:20px 20px;
    } */

    .results tr[visible='false'],
        .no-result{
        display:none;
    }

    .results tr[visible='true']{
        display:table-row;
    }

    .counter{
        padding:8px;
        color:#ccc;
    }

</style>

<div class="body_maindiv" >

<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Doctor’s Appointment</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a> &gt;  Book an Appointment</div>
</div>
</div>

<div class="static_bodydiv">
@if ($errors->any())
        <div class="alert alert-{{$errors->all()[0]}}">
        {{$errors->all()[1]}}
    </div>
@endif
<div class="static_mainbody_div">



<div class="static_pagetxt">
<div class="polyclinic_searchmaindiv">

<div class="search_alphabet">

<div class="search_alphabet_heading" style="text-align:center; text-transform:uppercase; font-weight:600; margin-bottom:30px; line-height:34px;">Make An Appointment</div>

<div class="find_textmaindiv_new">


  <div class="static_pagetxt">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    	<button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    @endif
  <form action="{{action('PageController@make_an_appointment')}}" method="post" style="background-color: #fcfafa;">
      @csrf
      <div class="get_touch_formdiv">

      <div class="feedbackformdiv">
          <input name="name" style="background-color: #fcfafa;" id="Uname" type="text" class="form_style" placeholder="Please Enter Name " autocomplete="off" required/>
      </div>

      <div class="feedbackformdiv" style="margin-top:10px;">
          <input id="text" style="background-color: #fcfafa;" class="form_style" type="text" autocomplete="off" placeholder="Enter Your Age" name="age" required></input>
      </div>

      <div class="feedbackformdiv" style="margin-top:10px;">
          <input id="mob" style="background-color: #fcfafa;" class="form_style" type="text" autocomplete="off" placeholder="Enter Your Mobile No" name="phone" required onkeypress="return isNumberKey(event)" maxlength="10"></input>
      </div>



      <div class="feedbackformdiv" style="margin-top:10px; height:auto;">
        <select style="background-color: #fcfafa;" class="form_style" name="department" id="time" class="dropdown">
 <option class="form_style">---Select Department---</option>
@foreach($departments as $dept)
 <option value="{{$dept->department_name}}">{{$dept->department_name}}</option>
@endforeach

 </select>
      </div>


      <div class="feedbackformdiv" style="margin-top:10px;">
          <input class="feedback_submit_btn" type="submit" value="SEND" name="submit" style="width:100%; margin-right:0px; margin-top:15px;margin-bottom: 17px;"></input>
      </div>

      </div>

  </form>

    <div class="wb_address_div" style="  background-image: url({{asset('public/images/appointment.jpeg')}});
    height: 275px;">


   <div class="ppintment" style="    height: 100%;
    width: 100%;
    background-color: #98969487;">

   </div>
    </div>
  </div>

</div>




</div>

</div>

</form>


</div>
</div>
{{-- </div> --}}




<!------------------  profile ------------------->
{{-- </div> --}}

</div>

    <div class="modal fade" style="margin-top:5%;" id="appointment_model" tabindex="-1" role="dialog" aria-labelledby="appointment_model" aria-hidden="true">
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
                    </div>
                    <form class="contact100-form validate-form" action="{{ route('sendAppointment') }}" method="post">
                            @csrf
                            <input type="hidden" name="doctor_id" id="doctor_id" class="col-md-12" value="" >
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                                <span class="label-input100">Full Name:</span>
                                <input class="input100" type="text" name="firstName" required placeholder="Enter full name">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                                <span class="label-input100">Age:</span>
                                <input class="input100" type="text" name="lastName" required placeholder="Enter age">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <span class="label-input100">Email:</span>
                                <input class="input100" type="text" name="email" placeholder="Enter email addess">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <span class="label-input100">Date of appointment:</span>
                            <input class="input100" type="date" required name="dateOfAppoinment" placeholder="Enter Appointment date" value="{{date("Y-m-d")}}">
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate = "Time">
                                <span class="label-input100">Time:</span>

                            <input class="input100" type="time" name="timeAppoinment" id="time" placeholder="Enter Time " value="{{date("H:i:s")}}">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input" required data-validate="Phone is required">
                                <span class="label-input100">Phone:</span>
                                <input class="input100" type="text" name="phoneNumber" placeholder="Enter phone number">
                                <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                                <span class="label-input100">About Disease:</span>
                                <textarea class="input100" name="diseaseTopic" placeholder="Wrire something about your Disease..."></textarea>
                                <span class="focus-input100"></span>
                            </div>

                            <div class="float-right btn btn-center">
                                <button type="submit" class="btn btn-primary ">
                                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                    Book An Appintment</button>
                            </div>

                    </form>
                </div>



                </div>
            </div>

        </div>

@endsection
