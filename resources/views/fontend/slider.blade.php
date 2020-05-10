



<!--  Banner Start   -->




<script>
    function banner()
    {
        window.location.href='https://surakshanet.com/about-us/company-profile';
    }
</script>

<div class="banner_div" style="max-height:450px;">
    <div class="owl-carousel owl-theme" id="banner_slider">
        @if (!empty(getValueByTBName('slider')))
            @foreach(getValueByTBName('slider') as $slider)
              <div class="item">
                 <a href="#"> <img src="{{asset($slider->image_link)}}" style="max-height:450px;" alt="Banner"></a>
              </div>
           @endforeach
        @endif
    </div>
</div>







<!--  Banner End   -->
