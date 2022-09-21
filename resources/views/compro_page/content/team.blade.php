<section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
        @foreach($test as $te)
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic">
                <a data-toggle="modal" data-target="#detail_team{{$te->teamid}}" >
                  <img src="{{ URL::to('/') }}/files/{{ $te->filename }}" alt="">
                </a>
              </div>
              <div class="details">
                <h4>{{$te->teamname}}</h4>
                <span>{{$te->teamjob}}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section><!-- #team -->

    @foreach($test as $tea)
    <div class="modal fade" id="detail_team{{$tea->teamid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Team</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body w-100 text-center">		
				<div class="row px-2">
					<div class="col-md-7">
						<h1>{{$tea->teamname}}</h1>
            <p>{{$tea->teamjob}}</p>
						<p>{!!$tea->descriptions!!}</p>
					</div>
					<div class="col-md-5">
						<img class="img-fluid" src=" {{ URL::to('/') }}/files/{{ $tea->filename }}" style="width:300px; height:300px">						
					</div>
				</div>								
			</div>
      </div>
    </div>
  </div>
  @endforeach