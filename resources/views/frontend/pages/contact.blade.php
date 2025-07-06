@extends('frontend.layouts.master')

@section('title','THE CRAZIES || About Us')

@section('hero')

@include("frontend.includes.header_section",["header_1"=>"CONTACT US","para"=>"We'd love to hear from you. Reach out to us through any of these channels."])

<section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>GET IN TOUCH</h2>
          <h5>PHONE</h5>
          <p>+1 (555) 123-4567</p>

          <h5>EMAIL</h5>
          <p>hello@thecrazies.com</p>

          <h5>ADDRESS</h5>
          <p>123 Fashion Street<br>Style District<br>New York, NY 10001</p>
        </div>
        <div class="col-md-6">
          <h2>FOLLOW US</h2>
          <div class="social-card">
            <i class="bi bi-instagram"></i>
            <div>
              <strong>INSTAGRAM</strong><br>
              <span>@thecrazies</span>
            </div>
          </div>
          <div class="social-card">
            <i class="bi bi-facebook"></i>
            <div>
              <strong>FACEBOOK</strong><br>
              <span>@thecraziesofficial</span>
            </div>
          </div>
          <div class="social-card">
            <i class="bi bi-twitter"></i>
            <div>
              <strong>TWITTER</strong><br>
              <span>@thecraziesteam</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
