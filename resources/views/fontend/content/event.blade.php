
@extends('fontend.app')
@section('content')



<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" >

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Media and Events</div>

<div class="breadcrum_div"><a href="index-2.html" style="text-decoration:none; color:#333333;">Home</a> > Media and Events</div>

</div>

</div>

<div class="static_bodydiv">
@foreach($events as $event)
<div class="static_mainbody_div">



<div class="static_pagetxt" style="margin-bottom:25px;">

<a name="tamluk"><span class="static_subheading" style="text-transform:uppercase;"> {{$event->title}}</span></a><br />
 {{$event->description}}
</div>
<div class="media_image_maindiv">
    <div class="inner_imgbg mg-image">
       <div class="single-effect">
          <figure class="wpf-demo-1">
           <img src=" {{asset($event->image)}}" class="img_css" />
            <figcaption class="view-caption">
             <a  href="{{asset($event->image)}}" data-lightbox="tamluk-centre" data-title=" New Centre Launch at Tamluk" class=" example-image-link" style="text-decoration:none;">	 View</a>
            </figcaption>
          </figure>
        </div>
   </div>
</div>
</div>


@endforeach

</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
