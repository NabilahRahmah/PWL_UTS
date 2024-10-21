@extends('mornieslayouts.app')

@section('content')
<div class="container">
    <h1>Tentang Mornies</h1>
    <p>Program Mahasiswa Wirausaha Politeknik Negeri Malang (PMW MORNIES) adalah sebuah usaha yang dirintis oleh sekelompok mahasiswa dengan fokus utama pada produk brownies.</p>

    <div class="about-us">
        <img src="{{ asset('images/about-us.jpg') }}" alt="Tentang Kami" style="width:100%;">
        <p>Mornies berdiri untuk memberikan cita rasa brownies yang khas dengan inovasi terbaru. Kami memiliki produk unggulan seperti:</p>
        <ul>
            <li>Fudgy Brownies</li>
            <li>Brownies Crispy</li>
        </ul>
        <a href="#" class="btn btn-primary">Order Sekarang</a>
    </div>
</div>
@endsection
