<section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">
        @foreach($address as $add)
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>{{$add->type->typename}}</h3>
              <address>{!!$add->descriptions!!}</address>
            </div>
          </div>
        @endforeach
        @foreach($contact as $con)
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>{{$con->type->typename}}</h3>
              <p><a href="#">{!!$con->descriptions!!}</a></p>
            </div>
          </div>
        @endforeach
        @foreach($email as $em)
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>{{$em->type->typename}}</h3>
              <p><a href="#">{!!$em->descriptions!!}</a></p>
            </div>
          </div>
        @endforeach
        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://maps.google.com/maps?q=hyperdata%20solusindo%20mandiri&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <form action="/compro/email" method="POST" role="form" class="contactForm">
          {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="email_body" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->