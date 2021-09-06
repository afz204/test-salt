<div class="form-group row">
    <div class="col-md-6">
        <textarea name="productName" id="productName" class="form-control @error('productName') is-invalid @enderror" cols="3" rows="1" required autofocus placeholder="Product Name">{{ old('productName') }}</textarea>
        @error('productName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" cols="3" rows="1" required placeholder="Address">{{ old('address') }}</textarea>
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-6">
        <input type="text" name="price" value="{{ old('price') }}" id="price" class="form-control @error('price') is-invalid @enderror" required placeholder="Price">
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
