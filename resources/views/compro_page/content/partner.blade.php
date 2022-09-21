<section id="partner" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Partner</h2>
        </div>
      
        <div class="owl-carousel clients-carousel">
        @foreach($partner as $part)
        <a data-toggle="modal" data-target="#detail_part{{$part->partnerid}}" >
          <img src="{{ URL::to('/') }}/files/{{ $part->filename }}" alt="">
        </a>
        @endforeach
        </div>
      </div>
    </section><!-- #clients -->

    @foreach($partner as $pa)
    <div class="modal fade" id="detail_part{{$pa->partnerid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Partner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body w-100 text-center">		
				<div class="row px-2">
					<div class="col-md-12">
            <img class="img-fluid" src=" {{ URL::to('/') }}/files/{{ $pa->filename }}">						
						<p>{!!$pa->descriptions!!}</p>
					</div>
				</div>								
			</div>
      </div>
    </div>
  </div>
  @endforeach