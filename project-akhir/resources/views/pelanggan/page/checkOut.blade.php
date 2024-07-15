@extends('pelanggan.layout.index')

@section('content')
<div class="row">
    <div class="col-sm-7 mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Alamat penerima</h3>

                <div class="row mb-3">
                    <label for="nama_penerima" class="col-form-label col-sm-3">Nama:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control col-sm-9" id="nama_penerima" name="namaPenerima" placeholder="Nama..." autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control col-sm-9" id="alamat_penerima" name="alamatPenerima" placeholder="Alamat Penerima...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tlp" class="col-form-label col-sm-3">No.Hp</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control col-sm-9" id="tlp" name="tlp" placeholder="...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                    <div class="col-sm-9">
                        <select name="ekspedisi" class="form-control" id="ekspedisi">
                            <option value="">--- Pilih Ekspidisi ---</option>
                            <option value="jnt">J&T Express</option>
                            <option value="jne">JNE Express</option>
                            <option value="sicepat">Si Cepat</option>
                            <option value="ninja">Ninja Express</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5 mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h3>Total Belanja</h3>
            </div>
            <div class="card-body">
                
                <div class="row mb-3">
                    <label for="totalBelanja" class="col-form-label col-sm-4 p-3">Total Belanja </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control col-sm-9" id="totalBelanja" name="totalBelanja" value="3169000" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="PPn" class="col-form-label col-sm-4">PPn </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control col-sm-9" id="PPn" name="PPn" value="28089">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="discount" class="col-form-label col-sm-4">Discount  </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control col-sm-9" id="discount" name="discount" value="0">
                    </div>
                </div>
                <hr>
                <div class="row mb-3">
                    <label for="dibayarkan" class="col-form-label col-sm-4">Yang harus dibayar </label>
                <div class="col-sm-8">
                        <input type="number" class="form-control col-sm-9" id="dibayarkan" name="dibayarkan" value="3169000">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="diterima" class="col-form-label col-sm-4">Uang diterima </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control col-sm-9" id="diterima" name="diterima" value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kembalian" class="col-form-label col-sm-4">Kembalian </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control col-sm-9" id="kembalian" name="kembalian" value="" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection