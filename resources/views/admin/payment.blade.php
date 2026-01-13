@extends('partials.layouts')

@section('title','Make Payment')

@section('content')
<div class="container">
    <h3 class="text-center mb-4">Choose Payment Method</h3>
    
    <div class="row justify-content-center">
        {{-- M-Pesa --}}
        <div class="col-md-5 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-mobile-alt fa-3x text-success mb-3"></i>
                    <h5>M-Pesa</h5>
                    <form method="POST" action="{{ route('admin.payment') }}">
                        @csrf
                        <input type="tel" name="phone" class="form-control mb-3" placeholder="2547XXXXXXXX" required>
                        <input type="hidden" name="amount" value="1000"> {{-- server-side verified in controller --}}
                        <button class="btn btn-success w-100">Pay with M-Pesa</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- PayPal --}}
       <!-- <div class="col-md-5 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <i class="fab fa-paypal fa-3x text-primary mb-3"></i>
                    <h5>PayPal</h5>
                    <form method="POST" action="{{ route('admin.payment') }}">
                        @csrf
                        <input type="hidden" name="amount" value="1000"> {{-- server-side verified --}}
                        <button class="btn btn-primary w-100">Pay with PayPal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
