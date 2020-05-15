@extends('fontend.app')
@section('content')
<style media="screen">
    #appointment_model{
          z-index: 9999;
    }
    .modal{
        z-index: 9999 !important;
        display: fixed !important;
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

<div class="polyclinic_search_div">

  <select name="center" id="center" class="polyclinic_dropdown">
      <option value="Doctor">Search By Doctor's Name</option>
    <option value="Location">Search By Location</option>
    <option value="Department">Search By Department</option>


  </select>
</div>
<div class="findtestbox_div"><input name="doctor_name" id="doctor_name" type="text" class="polyclinic_txtbox" value="" autocomplete="off" style="padding:0px 2%;" placeholder="Search by Doctor's Name / Location / Department" onkeyup="search_doctor()"><div id="suggesstion-box"></div></div>
<div class="find_testbtndiv"><input name="find" type="submit" value="SEARCH" class="find_btn"></div>


</div>




</div>

</div>

</form>

<!--###################  Desktop Version     ######################-->


<div class="appointment_mainBG">

<div class="box-container-table">
    <div class="container-table">

        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
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
                            <td>C{{ $doctor->doctor_name }}</td>
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


                            {{-- <td class="text-center"><a type="button" onclick="appointment_modal({{ $doctor->id }})"><i class="fa fa-medkit" style="font-size:32px;color:red"></i></a> --}}
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
</div>



</div>


<!--###################  Desktop Version     ######################-->


<!--###################  Responsive Version     ######################-->


<div class="appointment_mainBG_responsive">

</div>


<div class="pagination_responsive"><ul class="pagination"><li class="details">Page 1 of 35</li><li><a class="current">Prev</a></li><li><a class="current">1</a></li><li><a href="?page=2">Next</a></li></ul></div>



<!--###################  Responsive Version     ######################-->
</div>
</div>
</div>
</div>



{{-- #appointment modal --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="appointment_model" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding:20px">
                    <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Comment</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Commet">
                    </div>
                    {{-- <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- #appointment modal Close --}}

<!------------------  profile ------------------->
</div>

<script type="text/javascript">
    function appointment_modal(){
        $('#appointment_model').modal('show');
    }
</script>
@endsection
