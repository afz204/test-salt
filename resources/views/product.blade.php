@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $typePage == 'product' ? 'Product' : 'Topup' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product.submit', $typePage) }}">
                        <input type="hidden" name="type" value="{{$typePage}}">
                        @csrf
                        @if ($typePage == 'product')
                            @include('components.product-form')
                        @else
                            @include('components.topup-form')
                        @endif
                        <div class="row col-md-12">
                            <button class="btn btn-primary btn-block" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
