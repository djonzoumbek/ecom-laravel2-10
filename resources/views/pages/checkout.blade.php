@extends('layouts.default')
@section('title', 'Checkout')

@section('content')
    <main class="container" style="max-width: 900px">
        <section>
            <h2>Check out</h2>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="pincode" class="form-label">Pin Code</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" required>
                </div>

                <button type="submit" class="btn btn-primary">Proceed to Payment</button>
            </form>
        </section>
    </main>
@endsection
