
@extends('fontend.app')
@section('content')





<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  -------------------> 

<div class="profile_aboutmaindiv">
  <h3 class="text-center" style="font-weight:700;"> {{$packageinfo->package_name}}</h3>
<div class="columns">
  <ul class="price" style="list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;">
    <li class="header" style="text-align: center;background-color: #40b176 !important;  color: #fff;  font-size: 20px;font-weight: 700;">Packages</li>
    @if (!empty($services))
        @foreach ($services as $item)
        <li style="border-bottom: 1px solid #ddd;padding: 10px;  text-align: center;color: #111;">{{$item->service_name}}</li>
        @endforeach
    @endif
    <li class="grey" style="text-align: center;background-color: #d21010 !important;  font-size: 18px;font-weight: 700;color: #fff;">Package Price (Tk) {{$packageinfo->rate}}/=</li>
  </ul>
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
