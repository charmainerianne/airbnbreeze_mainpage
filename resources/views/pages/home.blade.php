@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero-bg">
  <img src="assets/images/airbnbreeze-bg.jpg" alt="AirBnBreeze" class="bg-img">
</div>

<main class="container">
  <section class="search-bar">
    <div class="location">
      <label><i data-lucide="map-pin"></i> Location</label>
      <input type="place" value="Cebu City, Cebu">
    </div>
    <div class="date">
      <label><i data-lucide="calendar"></i> Arrival Date</label>
      <input type="date" value="2025-06-24">
    </div>
    <div class="date">
      <label><i data-lucide="calendar"></i> Departure Date</label>
      <input type="date" value="2025-06-25">
    </div>
    <div class="guests">
      <label><i data-lucide="users"></i> Room & Guests</label>
      <input type="text" value="2 guests, 5 rooms">
    </div>
    <button class="search-btn"><i data-lucide="search"></i> Search</button>
  </section>

  <section class="filters">
    <button><i data-lucide="home"></i> House</button>
    <button><i data-lucide="building-2"></i> Apartment</button>
    <button><i data-lucide="home"></i> Tiny Home</button>
    <button><i data-lucide="chef-hat"></i> Bed & Breakfast</button>
    <button><i data-lucide="tent"></i> Cabin</button>
    <button><i data-lucide="tent"></i> Tent</button>
    <button><i data-lucide="caravan"></i> Camper Van</button>
    <button><i data-lucide="filter"></i></button>
  </section>

  <section class="listings">
  <div class="card">
    <img src="assets/images/house 1.jpg" alt="House 1">
    <div class="card-content">
      <h3>Limonsenro's Private House</h3>
      <p>Minglanilla, Cebu</p>
      <p><strong>₱1900 / night</strong></p>
      <div class="rating"><i data-lucide="star"></i> 4.9</div>
    </div>
  </div>
  <div class="card">
    <img src="assets/images/house 2.jpg" alt="House 2">
    <div class="card-content">
      <h3>Limonsenro's Private House</h3>
      <p>Minglanilla, Cebu</p>
      <p><strong>₱1900 / night</strong></p>
      <div class="rating"><i data-lucide="star"></i> 4.9</div>
    </div>
  </div>
  <div class="card">
    <img src="assets/images/house 3.jpg" alt="House 3">
    <div class="card-content">
      <h3>Limonsenro's Private House</h3>
      <p>Minglanilla, Cebu</p>
      <p><strong>₱1900 / night</strong></p>
      <div class="rating"><i data-lucide="star"></i> 4.9</div>
    </div>
  </div>
  <div class="card">
    <img src="assets/images/house 4.jpg" alt="House 4">
    <div class="card-content">
      <h3>Limonsenro's Private House</h3>
      <p>Minglanilla, Cebu</p>
      <p><strong>₱1900 / night</strong></p>
      <div class="rating"><i data-lucide="star"></i> 4.9</div>
    </div>
  </div>
  <div class="card">
    <img src="assets/images/house 5.jpg" alt="House 5">
    <div class="card-content">
      <h3>Limonsenro's Private House</h3>
      <p>Minglanilla, Cebu</p>
      <p><strong>₱1900 / night</strong></p>
      <div class="rating"><i data-lucide="star"></i> 4.9</div>
    </div>
  </div>
  <div class="card">
    <img src="assets/images/house 6.jpg" alt="House 6">
    <div class="card-content">
      <h3>Limonsenro's Private House</h3>
      <p>Minglanilla, Cebu</p>
      <p><strong>₱1900 / night</strong></p>
      <div class="rating"><i data-lucide="star"></i> 4.9</div>
    </div>
  </div>
</section>


  <div class="show-more">
    <button>Show More</button>
  </div>
</main>
@endsection
