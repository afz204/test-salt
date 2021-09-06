<div class="form-group row">
    <div class="col-md-6">
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone Number">

        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-md-6">
        <select class="form-control @error('value') is-invalid @enderror" name="value" required>
            <option value="" selected>Pilih nominal</option>
            <option value="10000" @if(old('value') == 10000) selected @endif>10.000</option>
            <option value="50000" @if(old('value') == 50000) selected @endif>50.000</option>
            <option value="100000" @if(old('value') == 100000) selected @endif>100.000</option>
        </select>
        @error('value')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
