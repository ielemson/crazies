@extends('frontend.layouts.master')

@section('title','THE CRAZIES || About Us')

@section('hero')

@include("frontend.includes.header_section",["header_1"=>"Newsletter","para"=>"Stay updated with our latest collections and exclusive offers"])

 <section class="newsletter-section">
    <div class="container">
      <h2>Join The Crazies Family</h2>
      <p>Be the first to know about new drops, exclusive collections, and special promotions.</p>
      <form class="newsletter-form">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName" class="form-label">FIRST NAME</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName" class="form-label">LAST NAME</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
          </div>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">EMAIL ADDRESS</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email address">
        </div>
        <button class="btn" type="submit">Subscribe to Newsletter</button>
      </form>
    </div>
  </section>

@endsection
