@extends('fontend.app')
@section('content')
<link rel="stylesheet" href="{!! asset('public/css/appointment/main.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('public/css/appointment/util.css') !!}" type="text/css" />

<div class="body_maindiv" >

<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

    <div class="header_bandmaindiv">
        <div class="header_banddiv">

            <div class="static_page_heading">Doctor’s Appointment</div>

            <div class="breadcrum_div"><a style="text-decoration:none; color:#333333;">Home</a> &gt;  Book an Appointment</div>
        </div>
    </div>

          <div class="container-contact100">
      		<div class="contact100-map"></div>

      		<div class="wrap-contact100">
      			<div class="contact100-form-title bg-primary">
      				<span class="contact100-form-title-1">
      					Doctor Name : {{ $doctors->doctor_name }}
      				</span>

      				<span class="contact100-form-title-2">
      					Center : {{ $doctors->center }}
      				</span>
      			</div>

                <form class="contact100-form validate-form" action="{{action('AppointmentController@sendAppointment')}}" method="post">
                    @csrf
                    <input type="hidden" name="doctor_id" class="col-md-12" value="{{ $doctors->id }}" >
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
      					<input class="input100" type="time" name="timeAppoinment" placeholder="Enter Time ">
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

      				<div class="container-contact100-form-btn">
      					<button type="submit" class="contact100-form-btn">
      						<span>
      							Book An Appointment
      							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      						</span>
      					</button>
      				</div>
      			</form>
      		</div>
      	</div>
    </div>

</div>
@endsection
