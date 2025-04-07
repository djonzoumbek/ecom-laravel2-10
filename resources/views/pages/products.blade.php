@extends('layouts.default')
@section('title', 'Ecom - Home')

@section('content')
    <main class="container">
        <section>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class=" card  shadow-sm p-2">
                            <img src="{{ $product->image }}" width="100%" alt="ye sais pas">

                            <div>
                                <a href="{{ route('product.details', $product->slug) }}">{{ $product->title }}</a>
                                <span>{{ $product->price }} €</span>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
            <div>{{ $products -> links() }}</div>
        </section>
    </main>
@endsection
