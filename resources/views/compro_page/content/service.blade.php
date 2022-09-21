<section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            @foreach($service as $serv)
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon">
                <img src="{{ URL::to('/') }}/files/{{ $serv->filename }}" width="70px" height="70px" alt="">
              </div>
              <h4 class="title"><a>{{$serv->servicename}}</a></h4>
              <p class="description">{!!$serv->servicedesc!!}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section><!-- #services -->
