@extends('crudbooster::admin_template')
@section('content')

<p><a title="Return" href="http://localhost/furtune/admin/service_infos22"><i class="fa fa-chevron-circle-left "></i>
&nbsp; Back To List Data Service Details</a></p>

<div class="panel panel-default">

    <div class="panel-body" style="padding:20px 0px 0px 0px">
        <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{CRUDBooster::mainpath('edit')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="return_url" value="{{ url('admin/service_infos22') }}">
            <input type="hidden" name="ref_mainpath" value="{{ url('admin/service_infos22') }}">
            <input type="hidden" name="ref_parameter" value="return_url={{ url('admin/service_infos22&amp;parent_id=&amp;parent_field=') }}">
            <div class="box-body" id="parent-form-area">
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <div class="form-group header-group-0 " id="form-group-title" style="">
            <label class="control-label col-sm-2">
            Title
            <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
            <input type="text" title="Title" required="" placeholder="You can only enter the letter only" maxlength="70" class="form-control" name="title" id="title" value="{{$service->title}}">

            <div class="text-danger"></div>
            <p class="help-block"></p>

            </div>
            </div>    <div class="form-group header-group-0 " id="form-group-description" style="">
            <label class="control-label col-sm-2">Description
            <span class="text-danger" title="This field is required">*</span>
            </label>
            <div class="col-sm-10">
            <textarea name="description" id="description" required="" maxlength="5000" class="form-control" rows="5">{{$service->description}}</textarea>
            <div class="text-danger"></div>
            <p class="help-block"></p>
            </div>
            </div>

            {{-- @php
                dd($facilitys);
            @endphp --}}
            @foreach ($facilitys as $key => $facility)
                @if (count($facilitys) != $key+1)
                    <div class="form-group header-group-0 removeservice{{ $facility->id }}" id="form-group-facility" style="">
                        <label class="control-label col-sm-2">Facility.{{$key+1}}
                        </label>
                        <div class="col-sm-8">
                            <textarea name="facility[]" id="facility" class="form-control" rows="2">{{ $facility->note }}</textarea>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-danger" onclick="removeService({{ $facility->id }})">DELETE</a>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                @else
                    <div class="form-group header-group-0 removeservice{{ $facility->id }}" id="form-group-facility" style="">
                        <label class="control-label col-sm-2">Facility.{{$key+1}}
                        </label>
                        <div class="col-sm-8">
                            <textarea name="facility[]" id="facility" class="form-control" rows="2">{{ $facility->note }}</textarea>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-sm-1">
                            <a href="#" class="btn btn-danger" onclick="removeService({{ $facility->id }})">DELETE</a>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                        <div class="col-sm-1 addfacility" id="">
                            <a id="" class="form-control btn btn-success" onclick="addNewFacility()" rows="5">Add More</a>
                            <div class="text-danger"></div>
                            <p class="help-block"></p>
                        </div>
                    </div>
                @endif

            @endforeach
            <div class="new_facility"> </div>

            <div class="form-group header-group-0 " id="form-group-image" style="">
                <label class="col-sm-2 control-label">Image
                <span class="text-danger" title="This field is required">*</span>
                </label>
                <div class="col-sm-4">
                    <img src="{{ url($service->image) }}" alt="image" height="200px">
                    <div class="text-danger"></div>
                </div>
                <div class="col-sm-4">
                     <input type="file" id="image" title="Image" class="form-control" name="image">
                    <div class="text-danger"></div>
                </div>
            </div>
            <div class="form-group header-group-0 " id="form-group-menu_list_id" style="">
            <label class="control-label col-sm-2">Menu List Id
            <span class="text-danger" title="This field is required">*</span>
            </label>

            <div class="col-sm-10">
            <select style="width:100%" class="form-control" id="menu_list_id" required="" name="menu_list_id">

                @if (!empty($submenu))
                    @foreach ($submenu as $key => $data)
                        <option @if($data->id == $service->menu_list_id) selected @endif value="{{ $data->id }}"> {{ $data->item_name }}</option>
                    @endforeach
                @endif
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
            <a href="{{ url('admin/service_infos22') }}" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>


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

    function removeService(id){
        $('.removeservice'+id).remove();
    }
</script>

@endsection
