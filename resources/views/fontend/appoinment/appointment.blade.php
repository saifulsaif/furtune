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

<div class="static_mainbody_div">



<div class="static_pagetxt">
<form action="" method="get" name="search" id="search">
<div class="polyclinic_searchmaindiv">

<div class="search_alphabet">

<div class="search_alphabet_heading" style="text-align:center; text-transform:uppercase; font-weight:600; margin-bottom:30px; line-height:34px;">FIND AND BOOK AN APPOINTMENT WITH DOCTORS</div>

<div class="find_textmaindiv_new">

{{-- <div class="polyclinic_search_div">

  <select name="center" id="center" class="polyclinic_dropdown">
      <option value="Doctor">Search By Doctor's Name</option>
    <option value="Location">Search By Location</option>
    <option value="Department">Search By Department</option>


  </select>
</div> --}}
<div class="findtestbox_div" >
    <input name="doctor_name" id="searchDoctor" type="text" class="polyclinic_txtbox searchDoctor" value="" autocomplete="off" style="padding:0px 2%;" placeholder="Search by Doctor's Name / Location / Department">
    {{-- <div id="suggesstion-box"> </div> --}}
    <span class="counter pull-right"></span>


</div>
{{-- <div class="find_testbtndiv"><input name="find" type="submit" value="SEARCH" class="find_btn"></div> --}}


</div>




</div>

</div>

</form>

<!--###################  Desktop Version     ######################-->


<div class="appointment_mainBG">

    <table class="table table-hover table-bordered results findtestbox_div" id="">
        <thead>
            <tr>
                <th>Center</th>
                <th> Department</th>
                <th>Doctor's Name</th>
                <th>Doctor's Degree</th>
                <th>Timings</th>
                <th>Booking</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($doctors))
                @foreach ($doctors as $key => $doctor)
                    <tr>
                        <td>{{ $doctor->center }}</td>
                        <td>{{ $doctor->department }}</td>
                        <td>{{ $doctor->doctor_name }}</td>
                        <td>{{ $doctor->doctor_degree }}</td>
                        @if(!empty($doctor->times->start_days))
                            <td>{{ $doctor->times->start_days }}&nbsp;To&nbsp;{{ $doctor->times->end_days }}&nbsp;From&nbsp;{{ $doctor->times->strat_time }}&nbsp;To&nbsp;{{ $doctor->times->end_time }}</td>
                        @else
                            <td>NO Time</td>
                        @endif
                        {{-- <td class="text-center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointment_model">
                                            <i class="fa fa-medkit" style="font-size:32px;color:red"></i>
                                        </button>
                                    </td> --}}


                        <td class="text-center">
                            <a type="javascript.void(0)" onclick="appointment_modal({{ $doctor->id }},'{{ $doctor->doctor_name }}','{{ $doctor->center }}')">
                                <i class="fa fa-medkit" style="font-size:32px;color:green"></i>
                            </a>
                        {{-- <td class="text-center"><a type="button" href="{{ route('fortune.getAppoinmet',[$doctor->id]) }}"><i class="fa fa-medkit" style="font-size:32px;color:red"></i></a> --}}
                        </td>
                    </tr>
                @endforeach

                    <tr class="warning no-result text-center">
                        <td colspan="6"><i class="fa fa-warning "></i> No Doctor's Name / Location / Department Found!!</td>
                    </tr>
            @endif
        </tbody>
    </table>

    <div class="modal fade" style="margin-top:5%;" id="appointment_model" tabindex="-1" role="dialog" aria-labelledby="appointment_model" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header  bg-success">
            <h5 class="modal-title doctor_nameShow" id="contact100-form-title doctor_nameShow"></h5>
            <h3 class="modal-title centerShow" id="contact100-form-title centerShow"></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form class="contact100-form validate-form" action="{{action('AppointmentController@sendAppointment')}}" method="post">
                    @csrf
                    <input type="hidden" name="doctor_id" id="doctor_id" class="col-md-12" value="" >
      				<div class="wrap-input100 validate-input" data-validate="Name is required">
      					<span class="label-input100">First Name:</span>
      					<input class="input100" type="text" name="firstName" placeholder="Enter full name">
      					<span class="focus-input100"></span>
      				</div>
      				<div class="wrap-input100 validate-input" data-validate="Name is required">
      					<span class="label-input100">Last Name:</span>
      					<input class="input100" type="text" name="lastName" placeholder="Enter last name">
      					<span class="focus-input100"></span>
      				</div>

      				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
      					<span class="label-input100">Email:</span>
      					<input class="input100" type="text" name="email" placeholder="Enter email addess">
      					<span class="focus-input100"></span>
      				</div>
      				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
      					<span class="label-input100">Date of appointment:</span>
      					<input class="input100" type="date" name="dateOfAppoinment" placeholder="Enter Appointment date">
      					<span class="focus-input100"></span>
      				</div>
      				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Time:</span>

      					<input class="input100" type="time" name="timeAppoinment" id="time" placeholder="Enter Time ">
      					<span class="focus-input100"></span>
      				</div>

      				<div class="wrap-input100 validate-input" data-validate="Phone is required">
      					<span class="label-input100">Phone:</span>
      					<input class="input100" type="text" name="phoneNumber" placeholder="Enter phone number">
      					<span class="focus-input100"></span>
      				</div>

      				<div class="wrap-input100 validate-input" data-validate = "Message is required">
      					<span class="label-input100">About Disease:</span>
      					<textarea class="input100" name="diseaseTopic" placeholder="Wrire something about your Disease..."></textarea>
      					<span class="focus-input100"></span>
                      </div>
                      <div class="float-right btn-center">
                        <button type="button" class="btn btn-primary ">Book An Appintment</button>
                    </div>
        </div>
         </form>



    </div>
    </div>

</div>


<!--###################  Desktop Version     ######################-->


<!--###################  Responsive Version     ######################-->


<div class="appointment_mainBG_responsive">
<div class="pagination_responsive">

    <ul class="pagination">
        <div class="section-title" id="section-title">

            <table id="dtBasicExample" class="table table-striped table-bordered table-sm footable" cellspacing="0" style="width:auto !important">
                <thead>
                    <tr class="bg-primary">
                        <th>Center Location</th>
                        <th> Department</th>
                        {{-- <th>Doctor's Name</th>
                        <th>Doctor's Degree</th>
                        <th>Timings</th>--}}
                        <th>Booking</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($doctors))
                        @foreach ($doctors as $key => $doctor)
                            <tr>
                                <td><i class="fa fa-plus">&nbsp;</i>{{ $doctor->center }}</td>
                                <td>{{ $doctor->department }}</td>
                                {{-- <td>{{ $doctor->doctor_name }}</td>
                                <td>{{ $doctor->doctor_degree }}</td>
                                @if(!empty($doctor->times->start_days))
                                    <td>{{ $doctor->times->start_days }}&nbsp;To&nbsp;{{ $doctor->times->end_days }}&nbsp;From&nbsp;{{ $doctor->times->strat_time }}&nbsp;To&nbsp;{{ $doctor->times->end_time }}</td>
                                @else
                                    <td>NO Time</td>
                                @endif --}}
                               <td class="text-center"><a type="button" href="{{ route('fortune.getAppoinmet',[$doctor->id]) }}"><i class="fa fa-medkit" style="font-size:32px;color:red"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="4"><a class="bg-danger">No Record Found !!</a></th>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>

    </ul>
</div>
</div>






<!--###################  Responsive Version     ######################-->
</div>
</div>
</div>
</div>




<!------------------  profile ------------------->
</div>


@endsection


