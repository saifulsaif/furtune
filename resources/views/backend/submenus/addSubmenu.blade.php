@extends('crudbooster::admin_template')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-bars"></i> Add Submenu a</strong>
    </div>

<div class="panel-body" style="padding:20px 0px 0px 0px">
    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{CRUDBooster::mainpath('save')}}">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="return_url" value="{{ url('admin/sub_menu') }}">
        <input type="hidden" name="ref_mainpath" value="{{ url('admin/sub_menu') }}">
        <input type="hidden" name="ref_parameter" value="return_url={{ url('sub_menu&amp;parent_id=&amp;parent_field=') }}">
        <div class="box-body" id="parent-form-area">

        <div class="form-group header-group-0 " id="form-group-sub_munu_name" style="">
            <label class="control-label col-sm-2">
                Sub Munu Name
                <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
                <input type="text" title="Sub Munu Name" required="" maxlength="255" class="form-control" name="sub_menu_name" id="sub_menu_name" value="">

                <div class="text-danger"></div>
                <p class="help-block"></p>

            </div>
        </div>
        <div class="form-group header-group-0 " id="form-group-route_name" style="">
            <label class="control-label col-sm-2">
                Route Name
                <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-9">
                <input type="text" title="Route Name"  class="form-control" name="route_name" id="route_name" value="">

                <div class="text-danger"></div>
                <p class="help-block"></p>
            </div>
        </div>
        {{-- @php
            dd($menus[0]->menu_name);
        @endphp --}}
        <div class="form-group header-group-0 " id="form-group-menu_id" style="">
            <label class="control-label col-sm-2">Menu Id
                <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-9">
                <select style="width:100%" class="form-control" id="menu_id" required="" name="menu_id">

                    <option value="">** Please select a Menu Id</option>

                    @if (!empty($menus))
                        @foreach ($menus as $key => $menu)
                            <option value="{{ $menu->id }}">{{ $menu->menu_name }}</option>
                        @endforeach
                    @endif
                    {{-- <option value="2">About Us</option>
                    <option value="3">Book An Appointment</option>
                    <option value="7">Contact Us</option>
                    <option value="6">Franchisee</option>
                    <option value="5">Health Packages</option>
                    <option value="4">Home Collection</option>
                    <option value="1">Our Service</option>                    <!--end-datatable-ajax--> --}}

                    <!--end-relationship-table-->

                    <!--end-datatable-->
                </select>
                <div class="text-danger">

                </div><!--end-text-danger-->
                <p class="help-block"></p>

            </div>
        </div>

        {{-- <div class="form-group header-group-0 " id="form-group-menu_id" style="">
            <label class="control-label col-sm-2">Facility
                <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-8">
                <textarea class="form-control" name="facility[]" id="exampleFormControlTextarea1" rows="2"></textarea>
                <div class="text-danger">

                </div><!--end-text-danger-->
                <p class="help-block"></p>

            </div>
            <div class="col-sm-2">
                <a type="button" class="btn btn-success addfacility" onclick="addNewFacility()">Add New Facility</a>
                <div class="text-danger">

                </div><!--end-text-danger-->
                <p class="help-block"></p>

            </div>
        </div> --}}

        <div class="new_facility">

        </div>
        </div><!-- /.box-body -->

    <div class="box-footer" style="background: #F5F5F5">

    <div class="form-group">
    <label class="control-label col-sm-2"></label>
    <div class="col-sm-10">
     <a href="{{ url('admin/sub_menu') }}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>

    <input type="submit" name="submit" value="Save &amp; Add More" class="btn btn-success">

    <input type="submit" name="submit" value="Save" class="btn btn-success">

    </div>
    </div>


    </div><!-- /.box-footer-->

    </form>

</div>
</div>
@endsection
{{-- <script type="text/javascript">
    function addNewFacility(){
        $('.addfacility').remove();
        $('.new_facility').append(` <div class="form-group header-group-0 " id="form-group-menu_id" style="">
             <label class="control-label col-sm-2">Facility
                 <span class="text-danger" title="This field is required">*</span>
             </label>

             <div class="col-sm-8">
                 <textarea class="form-control" name="facility[]" id="exampleFormControlTextarea1" rows="2"></textarea>
                 <div class="text-danger">

                 </div><!--end-text-danger-->
                 <p class="help-block"></p>

             </div>
             <div class="col-sm-2">
                 <a type="button" class="btn btn-success addfacility" onclick="addNewFacility()">Add New Facility</a>
                 <div class="text-danger">

                 </div><!--end-text-danger-->
                 <p class="help-block"></p>

             </div>
         </div>`)
    }
</script> --}}
