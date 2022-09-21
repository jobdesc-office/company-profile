<section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          @foreach($portofolio as $por)
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a data-toggle="modal" data-target="#detail_porto{{$por->portofolioid}}" >
                <img style="margin: 10px 0px 0px 10px;"  src="{{ URL::to('/') }}/files/{{ $por->filename }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">{{$por->portofolioname}}</h2></div>
                </div>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- #portfolio -->

    @foreach($portofolio as $por)
    <div class="modal fade" id="detail_porto{{$por->portofolioid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Portofolio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body w-100 text-center">		
				<div class="row px-2">
					<div class="col-md-7">
						<h1>{{$por->portofolioname}}</h1>
						<p>{!!$por->descriptions!!}</p>
					</div>
					<div class="col-md-5">
						<img class="img-fluid" src=" {{ URL::to('/') }}/files/{{ $por->filename }}" style="width:300px; height:300px">						
					</div>
				</div>								
			</div>
      </div>
    </div>
  </div>
  @endforeach