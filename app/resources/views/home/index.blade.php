@extends('layouts.main')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <h1>Home page</h1>

    /**
    * @var \Illuminate\Support\Collection $products
    */

    @foreach($filtered->chunk(4) as $chunk)
        <div class="row my-3">
            @foreach($chunk as $product)
                <div class="col-md-3">
                    {{ $product['title'] }}
                </div>
            @endforeach
        </div>
    @endforeach

@endsection

