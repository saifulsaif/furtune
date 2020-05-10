@extends('crudbooster::admin_template')
@section('content')
    <style media="screen">
        .form-group{
            margin:10px;
        }
    </style>
<div class="panel-body" style="padding:20px 0px 0px 0px">
    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{CRUDBooster::mainpath('edit')}}">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="return_url" value="{{ url('admin/doctors') }}">
        <input type="hidden" name="ref_mainpath" value="{{ url('admin/doctors') }}">
        <input type="hidden" name="ref_parameter" value="return_url={{ url('admin/doctors&amp;parent_id=&amp;parent_field=') }}">
        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
        <div class="box-body" id="parent-form-area">

        <div class="form-group header-group-0 " id="form-group-center" style="">
        <label class="control-label col-sm-2">
        Center
        <span class="text-danger" title="This field is required">*</span>
        </label>

        <div class="col-sm-10">
        <input type="text" title="Center" required="" maxlength="255" class="form-control" name="center" id="center" value="{{ $doctor->center }}">

        <div class="text-danger"></div>
        <p class="help-block"></p>

        </div>
        </div>
        <div class="form-group header-group-0 " id="form-group-department" style="">
            <label class="control-label col-sm-2">
            Department
            <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
            <input type="text" title="Department" required="" maxlength="255" class="form-control" name="department" id="department" value="{{ $doctor->department}}">

            <div class="text-danger"></div>
            <p class="help-block"></p>

            </div>
        </div>
        <div class="form-group header-group-0 " id="form-group-doctor_name" style="">
            <label class="control-label col-sm-2">
                Doctor Name
                <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
                <input type="text" title="Doctor Name" required="" maxlength="255" class="form-control" name="doctor_name" id="doctor_name" value="{{ $doctor->doctor_name }}">

                <div class="text-danger"></div>
                <p class="help-block"></p>

            </div>
        </div>
        <div class="form-group header-group-0 " id="form-group-doctor_degree" style="">
            <label class="control-label col-sm-2">
                Doctor Degree
                <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
                <input type="text" title="Doctor Degree" required="" maxlength="255" class="form-control" name="doctor_degree" id="doctor_degree" value="{{ $doctor->doctor_degree }}">

                <div class="text-danger"></div>
                <p class="help-block"></p>

            </div>
        </div>
            <div class="form-group header-group-0 " id="form-group-status" style="">
                <label class="control-label col-sm-2">Status
                    <span class="text-danger" title="This field is required">*</span>
                </label>

                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label> --}}

                <div class="col-sm-10">
                    <input type="checkbox" title="Status" @if($doctor->status == 1) checked @endif required="" name="status" id="status">
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
            </div>

            {{-- <div class="form-group header-group-0 " id="form-group-status" style="">
                <label class="control-label col-sm-2">Time
                    <span class="text-danger" title="This field is required">*</span>
                </label>

                <div class="col-sm-10">
                    <a type="button" class="btn btn-success" onclick="time_add()">Set Time</a>
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
            </div> --}}
            {{-- <div class="col-md-12"> --}}
                <div class="col-md-6">
                    <div class="form-group header-group-0 " id="form-group-department" style="">
                        <label class="control-label col-sm-2">
                        Start days
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                        <select class="form-control" name="start_days" id="exampleFormControlSelect1">
                          <option disabled>Select Day</option>
                          <option @if($doctor->times->start_days == 'Saturday') selected @endif value="Saturday">Saturday</option>
                          <option @if($doctor->times->start_days == 'Sunday') selected @endif value="Sunday">Sunday</option>
                          <option @if($doctor->times->start_days == 'Monday') selected @endif value="Monday">Monday</option>
                          <option @if($doctor->times->start_days == 'Tuesday') selected @endif value="Tuesday">Tuesday</option>
                          <option @if($doctor->times->start_days == 'Wednesday') selected @endif value="Wednesday">Wednesday</option>
                          <option @if($doctor->times->start_days == 'Thursday') selected @endif value="Thursday">Thursday</option>
                          <option @if($doctor->times->start_days == 'Friday') selected @endif value="Friday">Friday</option>
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group header-group-0 " id="form-group-start_time" style="">
                        <label class="control-label col-sm-2">
                        Time
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                        <input type="text" title="Department" required="" maxlength="255" class="form-control" name="start_time" id="start_time" value="{{ $doctor->times->strat_time }}">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>

            {{-- </div> --}}
            {{-- <div class="col-md-12"> --}}
                <div class="col-md-6">
                    <div class="form-group header-group-0 " id="form-group-start_time" style="">
                        <label class="control-label col-sm-2">
                        End Day
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                            <select class="form-control" name="end_days" id="exampleFormControlSelect1">
                              <option disabled>Select Day</option>
                              <option @if($doctor->times->end_days == 'Saturday') selected @endif value="Saturday">Saturday</option>
                              <option @if($doctor->times->end_days == 'Sunday') selected @endif value="Sunday">Sunday</option>
                              <option @if($doctor->times->end_days == 'Monday') selected @endif value="Monday">Monday</option>
                              <option @if($doctor->times->end_days == 'Tuesday') selected @endif value="Tuesday">Tuesday</option>
                              <option @if($doctor->times->end_days == 'Wednesday') selected @endif value="Wednesday">Wednesday</option>
                              <option @if($doctor->times->end_days == 'Thursday') selected @endif value="Thursday">Thursday</option>
                              <option @if($doctor->times->end_days == 'Friday') selected @endif value="Friday">Friday</option>
                            </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group header-group-0 " id="form-group-end_time" style="">
                        <label class="control-label col-sm-2">
                        Time
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                        <input type="text" title="Department" required="" maxlength="255" class="form-control" name="end_time" id="end_time" value="{{ $doctor->times->end_time }}">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            {{-- <div class="col-md-12"> --}}
                <div class="col-md-4">
                    <div class="form-group header-group-0 " id="form-group-start_time" style="">
                        <label class="control-label col-sm-2">
                        Special Day
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                            <select class="form-control" name="special_days" id="exampleFormControlSelect1">
                                <option @if($doctor->times->special_days == 'Saturday') selected @endif value="Saturday">Saturday</option>
                                <option @if($doctor->times->special_days == 'Sunday') selected @endif value="Sunday">Sunday</option>
                                <option @if($doctor->times->special_days == 'Monday') selected @endif value="Monday">Monday</option>
                                <option @if($doctor->times->special_days == 'Tuesday') selected @endif value="Tuesday">Tuesday</option>
                                <option @if($doctor->times->special_days == 'Wednesday') selected @endif value="Wednesday">Wednesday</option>
                                <option @if($doctor->times->special_days == 'Thursday') selected @endif value="Thursday">Thursday</option>
                                <option @if($doctor->times->special_days == 'Friday') selected @endif value="Friday">Friday</option>
                            </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group header-group-0 " id="form-group-end_time" style="">
                        <label class="control-label col-sm-2">
                        Start Time
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                        <input type="text" title="Department" required="" maxlength="255" class="form-control" name="special_start_time" id="end_time" value="{{ $doctor->times->special_strat_time }}">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group header-group-0 " id="form-group-end_time" style="">
                        <label class="control-label col-sm-2">
                        End Time
                        <span class="text-danger" title="This field is required">*</span>
                        </label>

                        <div class="col-sm-10">
                        <input type="text" title="Department" required="" maxlength="255" class="form-control" name="special_end_time" id="end_time" value="{{ $doctor->times->special_end_time }}">

                        <div class="text-danger"></div>
                        <p class="help-block"></p>

                        </div>
                    </div>
                </div>
            {{-- </div> --}}

            <div class="col-md-12">
                <div class="form-group header-group-0 " id="form-group-end_time" style="">
                    <label class="control-label col-sm-2">
                    Opnion
                    <span class="text-danger" title="This field is required">*</span>
                    </label>

                    <div class="col-sm-10">
                    <textarea class="form-control" name="opinion" id="exampleFormControlTextarea1" rows="3">{{ $doctor->times->opinion }}</textarea>

                    <div class="text-danger"></div>
                    <p class="help-block"></p>

                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer" style="background: #F5F5F5">

        <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
                <a href="{!! url('admin/doctors') !!}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>

                <input type="submit" name="submit" value="Save" class="btn btn-success">

            </div>
        </div>




        </div><!-- /.box-footer-->

    </form>
</div>
@endsection
