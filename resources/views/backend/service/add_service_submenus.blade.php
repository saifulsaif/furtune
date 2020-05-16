@extends('crudbooster::admin_template')
@section('content')
    <div class="panel panel-default">
    <div class="panel-body" style="padding:20px 0px 0px 0px">
            <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{CRUDBooster::mainpath('save')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="return_url" value="{{ url('admin/service_infos22') }}">
            <input type="hidden" name="ref_mainpath" value="{{ url('admin/service_infos22') }}">
            <input type="hidden" name="ref_parameter" value="return_url={{ url('admin/service_infos22&amp;parent_id=&amp;parent_field=') }}">
            <div class="box-body" id="parent-form-area">

            <div class="form-group header-group-0 " id="form-group-title" style="">
            <label class="control-label col-sm-2">
            Title
            <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
            <input type="text" title="Title" required="" placeholder="You can only enter the letter only" maxlength="70" class="form-control" name="title" id="title" value="">

            <div class="text-danger"></div>
            <p class="help-block"></p>

            </div>
            </div>    <div class="form-group header-group-0 " id="form-group-description" style="">
            <label class="control-label col-sm-2">Description
            <span class="text-danger" title="This field is required">*</span>
            </label>
            <div class="col-sm-10">
            <textarea name="description" id="description" required="" maxlength="5000" class="form-control" rows="5"></textarea>
            <div class="text-danger"></div>
            <p class="help-block"></p>
            </div>
            </div>
            <div class="form-group header-group-0 " id="form-group-facility" style="">
                <label class="control-label col-sm-2">Facility </label>
                <div class="col-sm-8">
                    <textarea name="facility[]" id="facility" class="form-control" rows="3"></textarea>
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
                <div class="col-sm-2 addfacility" id="">
                    <a name="facility[]" id="" class="form-control btn btn-success" onclick="addNewFacility()" rows="5">Add More</a>
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="new_facility"> </div>

            <div class="form-group header-group-0 " id="form-group-image" style="">
                <label class="col-sm-2 control-label">Image
                    <span class="text-danger" title="This field is required">*</span>
                </label>

                <div class="col-sm-10">
                    <input type="file" id="image" title="Image" required="" class="form-control" name="image">
                    <p class="help-block"></p>
                    <div class="text-danger"></div>

                </div>

            </div>
            <div class="form-group header-group-0 " id="form-group-menu_list_id" style="">
            <label class="control-label col-sm-2">Menu List Id
            <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
            <select style="width:100%" class="form-control" id="menu_list_id" required="" name="menu_list_id">
                <option value="" disabled selected>Select ...</option>
                @foreach ($submenu as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->item_name }}</option>
                @endforeach

            </select>
            <div class="text-danger">

            </div><!--end-text-danger-->
            <p class="help-block"></p>

            </div>
            </div>
            </div><!-- /.box-body -->

            <div class="box-footer" style="background: #F5F5F5">

            <div class="form-group">
            <label class="control-label col-sm-2"></label>
            <div class="col-sm-10">
            <a href="{{url('admin/service_infos22')}}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>

            <input type="submit" name="submit" value="Save &amp; Add More" class="btn btn-success">

            <input type="submit" name="submit" value="Save" class="btn btn-success">

            </div>
            </div>


            </div><!-- /.box-footer-->

            </form>

        </div>
    </div>
    <script type="text/javascript">
        function addNewFacility(){
            $('.addfacility').remove();
            $('.new_facility').append(`<div class="form-group header-group-0 " id="form-group-facility" style="">
                <label class="control-label col-sm-2">Facility </label>
                <div class="col-sm-8">
                    <textarea name="facility[]" id="facility" class="form-control" rows="3"></textarea>
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
                <div class="col-sm-2 addfacility" id="">
                    <a name="facility[]" id="" class="form-control btn btn-success" onclick="addNewFacility()" rows="5">Add More</a>
                    <div class="text-danger"></div>
                    <p class="help-block"></p>
                </div>
            </div>`)
        }
    </script>


@endsection
