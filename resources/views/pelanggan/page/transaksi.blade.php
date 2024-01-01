@extends('pelanggan.layouts.index')
@section('content')

<style>
input[type="number"]::-webkit-inner-spin-button,
input[type="number"] ::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>

<h3 class="mt-5"> Keranjang Belanja</h3>
<div class="card">
    <div class="card-body d-flex">
        <img src="{{asset('assets/images/kemeja.png')}}">
        <div class="desc">
            <p style="font-size:24px; font-weight:700;">kemeja kerja</p>
            <h3>Rp 300.000</h3>
            <p>Quantity : </p>
            <div class="d-flex">
                <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                <input type="number" name="qty" class="form-control w-50 text-center id=" qty" min="0" max="999"
                    value="1">
                <button class="rounded-end bg-secondary p-2 border border-0" id="minus ">-</button>
            </div>
        </div>
    </div>
</div>

@endsection