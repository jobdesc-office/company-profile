<section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
          @foreach($testimoni as $tes)
            <div class="testimonial-item">
              <p>
              <img src="{{ URL::to('/') }}/files/{{ $tes->filename }}" class="testimonial-img" alt="">
              <h3>{{$tes->testimonifrom}}</h3>
              </p>
              <img src="{{URL::asset('landing-page/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                {!!$tes->testimonidesc!!}
                <img src="{{URL::asset('landing-page/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
            </div>
          @endforeach
        </div>
      </div>
    </section><!-- #testimonials -->