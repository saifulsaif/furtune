@extends('fontend.app')
@section('content')
    <style>
  html, body {
  min-height: 100%;
  }
  body, div, form, input, select, p {
  padding: 0;
  margin: 0;
  outline: none;
  font-family: Roboto, Arial, sans-serif;
  font-size: 14px;
  color: #666;
  line-height: 22px;
  }
  h1 {
  margin: 15px 0;
  font-weight: 400;
  }
  .testbox {
  display: flex;
  justify-content: center;
  align-items: center;
  height: inherit;
  padding: 3px;
  }
  form {
  width: 100%;
  padding: 20px;
  background: #fff;
  box-shadow: 0 2px 5px #ccc;
  }
  input, select, textarea {
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  }
  input:hover, select:hover, textarea:hover {
  outline: none;
  border: 1px solid #095484;
  }
  input {
  width: calc(100% - 10px);
  padding: 5px;
  }
  select {
  width: 100%;
  padding: 7px 0;
  background: transparent;
  }
  textarea {
  width: calc(100% - 6px);
  }
  .item {
  position: relative;
  margin: 10px 0;
  }

  .btn-block {
  margin-top: 20px;
  text-align: center;
  }
  button {
  width: 150px;
  padding: 10px;
  border: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  background-color: #095484;
  font-size: 16px;
  color: #fff;
  cursor: pointer;
  }
  button:hover {
  background-color: #0666a3;
  }
</style>

<div class="body_maindiv" >

<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

    <div class="header_bandmaindiv">
        <div class="header_banddiv">

            <div class="static_page_heading">Doctor’s Appointment</div>

            <div class="breadcrum_div"><a style="text-decoration:none; color:#333333;">Home</a> &gt;  Book an Appointment</div>
        </div>
    </div>
      <div class="container">
          <div class="col-md-12 bg-primary" style="margin:5px">
              <h1>Doctor Name : {{ $doctors->doctor_name }}</h1>
              <h5>Center Name : {{ $doctors->center }}</h5>
          </div>
          <form action="{{ route('fortune.sendAppointment') }}" method="post">
              @csrf
              <input type="hidden" name="doctor_id" value="{{ $doctors->id }}" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="item">
              <p>Your name</p>
              <div>
                <input type="text" name="firstName" placeholder="First Name" />
                <input type="text" name="lastName" placeholder="Last Name" />
              </div>
            </div>
            <div class="item">
              <p>Your email</p>
              <input type="email" name="email"/>
            </div>
            <div class="item">
              <p>Date of appointment</p>
              <input type="date" style="width:20%" name="dateOfAppoinment"/>
              <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
              <p>Time</p>
              <input type="time" required name="timeAppoinment"/>
            </div>
            <div class="item">
              <p>Phone Number</p>
              <input type="number" required name="phoneNumber"/>
            </div>
            <div class="item">
              <p>Wrire something about your Disease</p>
              <textarea rows="3" name="diseaseTopic"></textarea>
            </div>
            <div class="btn-block">
              <button type="submit" class="btn btn-success">Book An Appointment</button>
            </div>
          </form>
      </div>
    </div>

</div>
@endsection
