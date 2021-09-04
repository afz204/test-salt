@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $typePage == 'product' ? 'Product' : 'Topup' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @if ($typePage == 'product')
                            @include('components.product-form')
                        @else
                            @include('components.topup-form')
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
