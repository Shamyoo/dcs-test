@extends('pelanggan.layout.index')

@section('content')

   <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/New-Balance-2002r.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/NIKE-LEBRON21.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/NIKE-DUNK.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
   </div>

   



<h4 class="mt-5"><strong>NEW</strong></h4>
<div class="content mt-5 d-flex flex-lg-wrap gap-4">
<div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/Lebron-21.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Lebron 21</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0 gap-1" style="font-size: 16px; font-weight:600;">Rp. 3,169,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/New-Balance.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">2002r</p>
            <p class="m-0 text-justify"><strong>New Balance</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,799,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/NOVABLAST4.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">NOVABLAST 4</p>
            <p class="m-0 text-justify"><strong>ASICS</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,999,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/Football.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Mercurial Vapor 15 Academy Fg Mg</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,099,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/Volley.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">V-swift Ff Mt 3</p>
            <p class="m-0 text-justify"><strong>ASICS</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,699,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>
   
    </div>
   
    </div>



   



    
    
@endsection