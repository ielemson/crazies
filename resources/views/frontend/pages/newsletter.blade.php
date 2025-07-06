@extends('frontend.layouts.master')

@section('title','THE CRAZIES || About Us')

@section('hero')

@include("frontend.includes.header_section",["header_1"=>"Newsletter","para"=>"Stay updated with our latest collections and exclusive offers"])

 {{-- <section class="newsletter-section">
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
  </section> --}}

  <section class="newsletter-body">
    <h2>JOIN THE CRAZIES FAMILY</h2>
    <p>Be the first to know about new drops, exclusive collections, and special promotions.</p>
    <form method="POST" action="{{ route('newsletter.subscribe') }}" class="container">
    @csrf
    <div class="row justify-content-center mb-3">
      <div class="col-md-3">
        <label for="first_name" class="form-label fw-bold">FIRST NAME</label>
        <input type="text" name="first_name" id="first_name"
               class="form-control @error('first_name') is-invalid @enderror"
               placeholder="Enter your first name" value="{{ old('first_name') }}">
        @error('first_name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-3">
        <label for="last_name" class="form-label fw-bold">LAST NAME</label>
        <input type="text" name="last_name" id="last_name"
               class="form-control @error('last_name') is-invalid @enderror"
               placeholder="Enter your last name" value="{{ old('last_name') }}">
        @error('last_name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <label for="email" class="form-label fw-bold">EMAIL ADDRESS</label>
        <input type="email" name="email" id="email"
               class="form-control @error('email') is-invalid @enderror"
               placeholder="Enter your email address" value="{{ old('email') }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-auto">
        <button type="submit" class="subscribe-btn btn btn-danger px-4 py-2">
          Subscribe to Newsletter
        </button>
      </div>
    </div>
  </form>
  </section>
  
@endsection
