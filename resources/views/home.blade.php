@extends('layouts.app')

@section('content')

<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Welcome to
             <strong>Our</strong> Website</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <a href="/contact" class="btn btn-primary btn-outline-white px-5 py-3">Get in touch</a></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-light">
  <section class="ftco-section-featured ftco-animate">
    <div class="container-fluid" data-scrollax-parent="true">
      <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

        <div class="col-md-3 mb-3">
          <a href="#" class="featured-img">
            <img src="{{ asset('img/ted.png') }}" class="img-fluid" alt="">
            
          </a>
        </div>
        
        <div class="col-md-6">
          <div class="row no-gutters">
            <div class="col-md-12">
              <div class="row no-gutters d-flex align-items-end">

                <div class="col-md-8">
                  <a href="#" class="featured-img">             
                    <img src="{{ asset('img/us.jpg') }}" class="img-fluid" alt="">       
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="#" class="featured-img">   
                    <img src="{{ asset('img/logo.jpg') }}" class="img-fluid" alt="">                
                  </a>
                </div>
                
              </div>
            </div>

            <div class="col-md-12">
              <div class="row no-gutters d-flex align-items-start">
                <div class="col-md-8">
                  <a href="#" class="featured-img">
                    <img src="{{ asset ('img/eunoia.jpg') }}" class="img-fluid" alt="">                        
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="featured-img">
    
                    <img src="{{ asset ('img/mrs_maryam.jpg') }}" class="img-fluid" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <a href="#" class="featured-img">
            <img src=" {{ asset ('img/image_2.jpg') }}" class="img-fluid" alt="">
          </a>
        </div>

      </div>
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="h1">What is <strong class="px-3">TEDx</strong>?
          <p style="font-size: 20px;">
            In the spirit of ideas worth spreading, 
            TED has created a program called TEDx. TEDx is a program of local, 
            self-organized events that bring people together to share a TED-like experience. 
            Our event is called TEDx[name], where x = independently organized TED event. 
            At our TEDx[name] event, TED Talks video and live speakers will combine to spark deep 
            discussion and connection in a small group. The TED Conference provides general guidance 
            for the TEDx program, 
            but individual TEDx events, including ours, are self-organized.</p>
        </div>
      </div>
    </div>
  </section>
  </div>
  

  

  <section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Subcribe to our Newsletter</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
            <div class="row d-flex justify-content-center mt-5">
              <div class="col-md-6">
                <form action="#" class="subscribe-form">
                  <div class="form-group">
                    <span class="icon icon-paper-plane"></span>
                    <input type="text" class="form-control" placeholder="Enter email address">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Speakers & Performers Says</span>
          <h2 class="mb-4">Our satisfied speakers says</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(img/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(img/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Interface Designer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(img/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(img/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(img/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">System Analytics</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-counter" id="section-counter">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <h2>Our achievements</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="400">0</strong>
              <span>Customers are satisfied with our professional support</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="1000">0</strong>
              <span>Amazing preset options to be mixed and combined</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="8000">0</strong>
              <span>Average response time on live chat support channel</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Blog</span>
          <h2>Recent Posts</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('img/image_1.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">July 12, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="100">
            <a href="blog-single.html" class="block-20" style="background-image: url('img/image_2.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-3">
                <div><a href="#">July 12, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="200">
            <a href="blog-single.html" class="block-20" style="background-image: url('img/image_3.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-3">
                <div><a href="#">July 12, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
