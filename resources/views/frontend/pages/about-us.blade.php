@extends('frontend.layouts.master')

@section('title','THE CRAZIES || About Us')

@section('hero')

  @include("frontend.includes.header_section",["header_1"=>"ABOUT US","para"=>"The story behind our brand and what makes us different"])

  <section class="about-hero text-white" id="hero-section">
    <div class="container">
      <p>
        At The Crazies, we celebrate what makes you different. Our name reclaims the word “crazy,” turning it from a label into a symbol of pride.<br><br>
        For us, being called crazy means you're bold enough to break the rules, defy expectations, and chase your dreams without apology.<br><br>
        We're not just another cap brand. Every piece we create is a badge of honour, a statement for those who dare to go against the grain and push beyond limits.<br><br>
        The Crazies is for the dreamers, the rebels, the fearless, the ones who embrace their uniqueness and turn it into power.
      </p>
    </div>
  </section>

  <section class="values-section">
    <div class="container">
      <h2 class="mb-5">OUR VALUES</h2>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="value-box">
            <h5><strong>AUTHENTICITY</strong></h5>
            <p>We believe in being true to yourself. Our designs reflect individuality and the courage to express who you really are.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h5><strong>QUALITY</strong></h5>
            <p>Every product we create is made with premium materials and meticulous attention to detail, ensuring both style and durability.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="value-box">
            <h5><strong>CREATIVITY</strong></h5>
            <p>We push boundaries in design, always looking for innovative ways to stand out and make a statement with our collections.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
