@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
        </div>
      </div>
    </div>
  </div>
  
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
              {{-- Img of the post --}}
            <a href="/post/id" class="block-20" style="background-image: url('images/image_1.jpg');">
            
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Date Posted</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> No of Comments</a></div>
              </div>
              <h3 class="heading"><a href="#">
                  Heading of the Post</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="100">
            <a href="/post/id" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-3">
                <div><a href="#">Date Posted</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span>  No of Comments</a></div>
              </div>
              <h3 class="heading"><a href="#">
                  Header</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="200">
            <a href="/post/id" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-3">
                <div><a href="#">Date Posted</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span>  No of Comments</a></div>
              </div>
              <h3 class="heading"><a href="#">
                  Header</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="/post/id" class="block-20" style="background-image: url('images/image_4.jpg');">
            </a>
            <div class="text p-4 d-block">
              <div class="meta mb-3">
                <div><a href="#">Date Posted</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span>  No of Comments</a></div>
              </div>
              <h3 class="heading"><a href="#">
                  Header </a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="100">
            <a href="/post/id" class="block-20" style="background-image: url('images/image_5.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-3">
                <div><a href="#">Date Posted</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span>  No of Comments</a></div>
              </div>
              <h3 class="heading"><a href="#">
                  Header</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry" data-aos-delay="200">
          <a href="/post/id" class="block-20" style="background-image: url('images/image_6.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-3">
                <div><a href="#">Date Posted</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span>  No of Comments</a></div>
              </div>
              <h3 class="heading"><a href="#">
                 Header</a></h3>
            </div>
          </div>
        </div>
      </div>
      {{-- PAGINATION --}}
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>@endsection