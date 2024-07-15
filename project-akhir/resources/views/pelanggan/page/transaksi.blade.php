@extends('pelanggan.layout.index')

@section('content')
<style>
    input[type="number"]::-webkit-inner-spin-button, 
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
    

    <h3 class="mt-5">Keranjang Kamu</h3>
<div class="card mb-4" style="width:1300px; box-shadow:6px 6px; color:black; border-radius: 10px">
        <div class="card-body d-flex gap-5">
            <img src="{{ asset('images/lebron-21.jpg') }}" alt="" style="width: 30%;height: 300px;border-radius: 10px">
            <div class="desc w-100">
                <p class="m-0 text-justify" style="font-size: 15px;"> Sepatu Basket</p>
                <p class="m-0 text-justify" style="font-size: 23px;"> Lebron 21 </p>
                <input type="number" class="form-control border-0 fs-2 mt-2" id="harga" value="3169000">
                <hr>
                <div class="row mb-3">
                    <label for="qty" class="col-sm-3 col-form-label fs-5">Quantity</label>
                    <div class="col-sm-5 d-flex">
                        <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                        <input type="number" name="qty" class="col-sm-6 form-control w-25 text-center" id="qty" min="0" max="999" value="1">
                        <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="price" class="col-sm-4 col-form-label fs-5">Total</label>
                    <input type="text" class="col-sm-4 form-control border-0 fs-6" readonly id="total">
                </div>
                <div class="row w-45 gap-1">
                    <a href="/checkout" class="btn btn-success col-sm-5">
                        <i class="fa fa-shopping-cart"></i>
                        Checkout
                    </a>
                    <button class="btn btn-danger col-sm-5">
                        <i class="fa fa-trash-alt"></i>
                        Delete
                    </button>
                </div>
            </div>
        </div>   
    </div>

    
    
@endsection