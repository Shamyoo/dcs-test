@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
               <h5><strong>Hubungi Kami</strong></h5><br>
               <h6><b>Email:</b> auzoranov18@gmail.com</h6>
               <h6><b>Telepon:</b>081368608088</h6>
               <h6><b>Instagram:</b>@auzoranov</h6><br>

               <h6><b>Email:</b> annisachaerin0@gmail.com</h6>
               <h6><b>Telepon:</b>085274834791</h6>
               <h6><b>Instagram:</b>@930privates</h6><br>

               <h6><b>Email:</b> dandylanemorabil31@gmail.com</h6>
               <h6><b>Telepon:</b>089623479137</h6>
               <h6><b>Instagram:</b>@dndylann</h6><br>



            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/Logo-DCS-removebg-preview.png') }}" style="width:100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-home fa-2x"> </i>
            <p class="m-0 fs-5"> +500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-shirt fa-2x"></i>
            <p class="m-0 fs-5">+ 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    
@endsection