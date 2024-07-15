@extends('pelanggan.layout.index')

@section('content')

<div class="d-flex flex-row gap-3 mt-2">
        <div class="" style="width: 30%;">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    PRODUCT
                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    KATEGORY
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="celana Pria">
                                            <span>Basket</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="baju Pria">
                                            <span>Sneakers</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Running</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Football</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="aksesoris Pria">
                                            <span>Volley</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    BRANDS
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="celana Wanita">
                                                <span>NIKE</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory" value="baju Wanita">
                                                <span>NEW BALANCE</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>ADIDAS</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>ASICS</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>MIZUNO</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>PUMA</span>
                                            </div>
                                            <div class="d-flex flex-row gap-3">
                                                <input type="checkbox" name="kategory" class="kategory"
                                                    value="aksesoris Wanita">
                                                <span>HOKA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-md-10 d-flex flex-wrap gap-2 mb-3">
        <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/Lebron-21.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Lebron 21</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 3,169,000</p>
            <a href="/transaksi">
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
            </a>
         </div>
     </div>

     <div class="card" style="width:200px;">
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

     <div class="card" style="width:200px;">
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

     <div class="card" style="width:200px;">
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

     <div class="card" style="width:200px;">
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
    
     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/JaMorant1-EpYearOfTheDragon.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Ja Morant 1 Ep Year Of The Dragon</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,599,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/Nike-dunk.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Dunk Low Retro</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,599,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/AirZoomPegasus41Blueprint.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Air Zoom Pegasus 41 Blueprint</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 2,099,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/PhantomGxAcademyFgMg.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Phantom Gx Academy Fg Mg</p>
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

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/WaveLighting27.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Wave Lighting 27</p>
            <p class="m-0 text-justify"><strong>MIZUNO</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 1,499,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/MB03BEYOU.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">MB 03 Be You</p>
            <p class="m-0 text-justify"><strong>PUMA</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 2,599,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/SambaAdv.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Samba Adv</p>
            <p class="m-0 text-justify"><strong>ADIDAS</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 2,200,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/WmnsClifton9.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Wmns Clifton 9</p>
            <p class="m-0 text-justify"><strong>HOKA</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 2,499,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/HypervenomPhantomliFg.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Hypervenom Phantom li Fg</p>
            <p class="m-0 text-justify"><strong>NIKE</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 2,399,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>

     <div class="card" style="width:200px;">
        <div class="card-header m-auto" style="border-radius:5px;">
            <img src="{{asset('images/gelrocket10.jpg')}}" alt="Sepatu Basket" style="width: 100%;">
         </div>
         <div class="card-body">
            <p class="m-0 text-justify">Gel Rocket 10</p>
            <p class="m-0 text-justify"><strong>ASICS</strong></p>
            <p class="m-0" ><i class="fa-regular fa-star"></i> 5+</p>

         </div>
         <div class="card-footer d-flex flex-row justify-content-beetween align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp. 799,000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
         </div>
     </div>
    
    </div>
   
    </div>
</div>





    
@endsection