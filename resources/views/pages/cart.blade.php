@extends('layouts.default')
@section('title', 'Ecom - Home')

@section('content')
    <main class="container">
        <section>
            <div class="row">
                @foreach($cartItems as $cart)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $cart->image }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{ route('product.details', $cart->slug) }}" class="card-title">{{ $cart->title }}</a>
                                    <p class="card-text">{{ $cart->description }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $cart->price }} €</small></p>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
            <div>
                {{ $cartItems -> links() }}
            </div>
        </section>
    </main>
@endsection
