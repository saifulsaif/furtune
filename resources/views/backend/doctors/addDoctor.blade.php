@extends('crudbooster::admin_template')
@section('content')
    <style media="screen">
        .form-group{
            margin:10px;
        }
    </style>
<div class="panel-body" style="padding:20px 0px 0px 0px">
    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{CRUDBooster::mainpath('save')}}">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="return_url" value="{{ url('admin/doctors') }}">
        <input type="hidden" name="ref_mainpath" value="{{ url('admin/doctors') }}">
        <input type="hidden" name="ref_parameter" value="return_url={{ url('admin/doctors&amp;parent_id=&amp;parent_field=') }}">
        <div class="box-body" id="parent-form-area">

        <div class="form-group header-group-0 " id="form-group-center" style="">
        <label class="control-label col-sm-2">
        Center
        <span class="text-danger" title="This field is required">*</span>
        </label>

        <div class="col-sm-10">
        <input type="text" title="Center" required="" maxlength="255" class="form-control" name="center" id="center" value="">

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
            <input type="text" title="Department" required="" maxlength="255" class="form-control" name="department" id="department" value="">

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
                <input type="text" title="Doctor Name" required="" maxlength="255" class="form-control" name="doctor_name" id="doctor_name" value="">

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
                <input type="text" title="Doctor Degree" required="" maxlength="255" class="form-control" name="doctor_degree" id="doctor_degree" value="">

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
                    <input type="checkbox" title="Status" required="" name="status" id="status">
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="form-group header-group-0 " id="form-group-status" style="">
                <label class="control-label col-sm-2">Time
                    <span class="text-danger" title="This field is required">*</span>
                </label>

                <div class="col-sm-10">
                    <a type="button" class="btn btn-success" onclick="time_add()">Set Time</a>
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
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

        <!-- Add Time Of Users  -->
            <div class="modal fade" id="add_time" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-success">
                    <h5 class="modal-title" id="exampleModalLabel">Set Time</h5>
                    <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Start Day</label>
                                        <select class="form-control" name="start_days" id="exampleFormControlSelect1">
                                          <option disabled>Select Day</option>
                                          <option value="Saturday">Saturday</option>
                                          <option value="Sunday">Sunday</option>
                                          <option value="Monday">Monday</option>
                                          <option value="Tuesday">Tuesday</option>
                                          <option value="Wednesday">Wednesday</option>
                                          <option value="Thursday">Thursday</option>
                                          <option value="Friday">Friday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Start Time</label>
                                      <input type="number" class="form-control" name="start_time" id="exampleFormControlInput1" placeholder="Start Time attech">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">END Day</label>
                                        <select class="form-control" name="end_days" id="exampleFormControlSelect1">
                                          <option disabled>Select Day</option>
                                          <option value="Saturday">Saturday</option>
                                          <option value="Sunday">Sunday</option>
                                          <option value="Monday">Monday</option>
                                          <option value="Tuesday">Tuesday</option>
                                          <option value="Wednesday">Wednesday</option>
                                          <option value="Thursday">Thursday</option>
                                          <option value="Friday">Friday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Time</label>
                                      <input type="number" class="form-control" name="end_time" id="exampleFormControlInput1" placeholder="End Time Attech">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Special Day</label>
                                        <select class="form-control" name="special_days" id="exampleFormControlSelect1">
                                          <option disabled>Select Day</option>
                                          <option value="Saturday">Saturday</option>
                                          <option value="Sunday">Sunday</option>
                                          <option value="Monday">Monday</option>
                                          <option value="Tuesday">Tuesday</option>
                                          <option value="Wednesday">Wednesday</option>
                                          <option value="Thursday">Thursday</option>
                                          <option value="Friday">Friday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">Start Time</label>
                                      <input type="number" class="form-control" name="special_start_time" id="exampleFormControlInput1" placeholder="Start time attech">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">End Time</label>
                                      <input type="number" class="form-control" name="special_end_time" id="exampleFormControlInput1" placeholder="End Time attech">
                                    </div>
                                </div>
                            </div>
                           <div class="col-md-12">
                               <div class="col-md-12">
                                   <div class="form-group">
                                     <label for="exampleFormControlTextarea1">Oinion</label>
                                     <textarea class="form-control" name="opinion" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                           </div>

                        </div>

                  </div>
                </div>
              </div>
            </div>


        </div><!-- /.box-footer-->

    </form>
</div>
@push('bottom')
    <script type="text/javascript">
        function time_add(){
            $('#add_time').modal('show');
        }
    </script>
@endpush
@endsection
