@extends('mornieslayouts.app')

@section('content')
<div class="container">
    <h1>Penghargaan</h1>
    <div class="row">
        @foreach($awards as $award)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/' . $award['image']) }}" class="card-img-top" alt="{{ $award['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $award['title'] }}</h5>
                    <p class="card-text">{{ $award['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
