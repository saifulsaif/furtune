@extends('crudbooster::admin_template')
@section('content')

<div class="panel panel-default">
    <div class="panel-body" style="padding:20px 0px 0px 0px">
            <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{CRUDBooster::mainpath('save')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body" id="parent-form-area">
                    <div class="form-group header-group-0 " id="form-group-package_name" style="">
                        <label class="control-label col-sm-2"> Package Name <span class="text-danger" title="This field is required">*</span> </label>
                        <div class="col-sm-10">
                            <input type="text" title="Package Name" required="" maxlength="255" class="form-control" name="package_name" id="package_name" value="">

                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group header-group-0 " id="form-group-rate" style="">
                        <label class="control-label col-sm-2"> Rate <span class="text-danger" title="This field is required">*</span> </label>
                        <div class="col-sm-10">
                            <input type="text" title="Rate" required="" maxlength="255" class="form-control" name="rate" id="rate" value="">
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group header-group-0 rem" id="form-group-rate" style="">
                        <label class="control-label col-sm-2"> Services </label>
                        <div class="col-sm-8">
                            <input type="text" title="service" required="" maxlength="255" class="form-control" name="service[]" id="rate" value="">
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-sm-2">
                            <div class="btnR"></div>
                            <input type="button" title="Rate"  maxlength="255" class="form-control btn btn-success" onclick="add()" id="addnew" value="Add New">
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="show">

                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer" style="background: #F5F5F5">
                    <div class="form-group">
                        <label class="control-label col-sm-2"></label>
                        <div class="col-sm-10">
                            <a href="{{url('admin/health_package_lists')}}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>
                                <input type="submit" name="submit" value="Save &amp; Add More" class="btn btn-success">
                                <input type="submit" name="submit" value="Save" class="btn btn-success">
                        </div>
                    </div>
                </div><!-- /.box-footer-->
            </form>
    </div>
</div>

@endsection
<script>
   function add(){
       $('#addnew').remove();

    //    $('.btnR').append(`<input type="button" title="remove"  maxlength="255" class="form-control btn btn-danger" onclick="remove()" value="Remove">`)
       $('.show').append(
           `<div class="form-group header-group-0 rem" id="form-group-rate" style="">
                        <label class="control-label col-sm-2"> </label>
                        <div class="col-sm-8">
                            <input type="text" title="service" maxlength="255" class="form-control" name="service[]" id="rate" value="">
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-sm-2">
                            <div class="btnR"></div>
                            <input type="button" title="Rate"  maxlength="255" class="form-control btn btn-success" onclick="add()" id="addnew" value="Add New">
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>`
       );
   }
</script>
