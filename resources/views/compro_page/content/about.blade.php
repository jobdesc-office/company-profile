<section id="about" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
          <h2>About Us</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">
          @foreach($about as $ab)
          <div class="col-lg-6 about-img">
            <img src="{{ URL::to('/') }}/files/{{ $ab->filename }}" alt="">
          </div>
          <div class="col-lg-6 content">
            <h2>{!!$ab->descriptions!!}</h2>
          </div>
          @endforeach
        </div>
      </div>
</section><!-- #about -->