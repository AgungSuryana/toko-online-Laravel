@extends('pelanggan.layouts.index')
@section('content')

<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam aut fugit, nam praesentium
            architecto voluptates vitae facere quod at eius harum, magni accusamus atque quis illum earum! Expedita,
            repudiandae?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam aut fugit, nam praesentium
            architecto voluptates vitae facere quod at eius harum, magni accusamus atque quis illum earum! Expedita,
            repudiandae?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam aut fugit, nam praesentium
            architecto voluptates vitae facere quod at eius harum, magni accusamus atque quis illum earum! Expedita,
            repudiandae?
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{asset('assets/images/perusahaan.png')}}" style="width:100%;" alt="">
    </div>
</div>

<div class="d-flex justify-content-lg-between mt-5 fs-5">
    <div class="d-flex">
        <i class="fa-solid fa-users fa-2x"></i>
        <p class="m-0">+ 300 pelanggan</p>
    </div>
    <div class="d-flex">
        <i class="fa-solid fa-building-circle-check fa-2x"></i>
        <p class="m-0">+ 1000 pengunjung</p>
    </div>
    <div class="d-flex">
        <i class="fa fa-shirt fa-2x"></i>
        <p class="m-0">+ 500 produk</p>
    </div>

</div>

<h5 class="text-center mt-md-5 mb-md-2">Contact Us</h5>
<hr class="mb-5">
<div class="row mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary" style="width:100%; height:50vh; border-radius:10px;"></div>
    </div>

    <div class="col mb-md-5">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik dan Saran</h4>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="email" value=""
                            placeholder="Masukan Email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Pesan" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Masukan Pesan anda"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary mt-5 w-100">kirim kritik dan saran</button>
            </div>
        </div>

    </div>
</div>

@endsection