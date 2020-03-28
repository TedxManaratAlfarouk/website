@extends('layouts.app')

@section('content')

<!-- <div class="js-fullheight"> -->
<div class="hero-wrap js-fullheight">
  <div class="overlay"></div>
  <div id="particles-js"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
      </div>
    </div>
  </div>
</div>

<div class="bg-light">
  <section class="ftco-section-featured ftco-section-featured-2 ftco-animate">
    <div class="container-fluid" data-scrollax-parent="true">
      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="h1" style="color:red">TEDx, x = independently organized event <br>
            </h2>
          <p>In the spirit of ideas worth spreading, TEDx is a program of local,
            self-organized events that bring people together to share a
            TED-like experience. At a TEDx event, TED Talks video and live speakers
            combine to spark deep discussion and connection. These local,
            self-organized events are branded TEDx, where x = independently organized TED event.
            The TED Conference provides general guidance for the TEDx program, but individual
            TEDx events are self-organized. (Subject to certain rules and regulations.)</p>
            <h2 class="h1" style="color:red">TED <br>
            </h2>
          <p>TED is a
              nonprofit organization devoted to Ideas Worth Spreading.
              Started as a four-day conference in California 30 years ago,
              TED has grown to support its mission with multiple initiatives.
              The two annual TED Conferences invite the world's leading thinkers
              and doers to speak for 18 minutes or less. Many of these talks are
              then made available, free, at TED.com. TED speakers have included Bill Gates,
              Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck,
              Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman.
            The annual TED Conference takes place each spring in Vancouver,
            British Columbia. TED's media initiatives include TED.com, where new TED
            Talks are posted daily; TED Translators, which provides subtitles and interactive
            transcripts as well as translations from volunteers worldwide; the educational
            initiative TED-Ed. TED has established The Audacious Project that takes a collaborative
            approach to funding ideas with the potential to create change at thrilling scale;
            TEDx, which supports individuals or groups in hosting local, self- organized TED-style
             events around the world, and the TED Fellows program, helping world-changing innovators
             from around the globe to amplify the impact of their remarkable projects and activities.
             Follow TED on <a href="http://twitter.com/TEDTalks" style="color:red" target="_blank"> Twitter </a> ,
              or on <a href="http://www.facebook.com/TED" style="color:red" target="_blank"> Facebook </a> </p>

        </div>
      </div>
    </div>
  </section>
</div>

<div class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Team</span>
        <h2 class="mb-4">Our Team</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-5 ftco-animate">
        <div class="block-10">
          <div class="person-info mb-2">
            <span class="name">Maryam ElShafie</span>
            <span class="position"> Organizer </span>
          </div>
          <img src="img/mrs_maryam.jpg" alt="" class="img-fluid mb-3">
          <p>Cairo, Egypt</p>
        </div>
      </div>
      <div class="col-md-4 mb-5 ftco-animate">
        <div class="block-10">
          <div class="person-info mb-2">
            <span class="name">Asmaa Fawzy</span>
            <span class="position">Co-organizer </span>
          </div>
          <img src="" alt="" class="img-fluid mb-3">
          <p>Cairo, Egypt</p>
        </div>
      </div>

    </div>
    </div>
  </div>
</div>
</section>
@endsection
