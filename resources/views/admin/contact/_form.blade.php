@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">

    <div class="form-group">
        <label for="country"> Client Country</label>
        <input type="text" class="form-control  @error('country') is-invalid @enderror "
            value="{{ old('country', $contact->country) }}" id="country" name="country">
        @error('country')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="city"> Contact City</label>
        <input type="text" class="form-control  @error('city') is-invalid @enderror "
            value="{{ old('city', $contact->city) }}" id="city" name="city">
        @error('city')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="postal_code"> Postel Code</label>
        <input type="text" class="form-control  @error('postal_code') is-invalid @enderror "
            value="{{ old('postal_code', $contact->postal_code) }}" id="postal_code" name="postal_code">
        @error('postal_code')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone"> Contact Phone</label>
        <input type="text" class="form-control  @error('phone') is-invalid @enderror "
            value="{{ old('phone', $contact->phone) }}" id="phone" name="phone">
        @error('phone')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="email"> Contact Email</label>
        <input type="email" class="form-control  @error('email') is-invalid @enderror "
            value="{{ old('email', $contact->email) }}" id="email" name="email">
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="facebook_account"> Contact User Facebook</label>
        <input type="text" class="form-control  @error('facebook_account') is-invalid @enderror "
            value="{{ old('facebook_account', $contact->facebook_account) }}" id="facebook_account"
            name="facebook_account">
        @error('facebook_account')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="twitter_account"> Contact User Twitter</label>
        <input type="text" class="form-control  @error('twitter_account') is-invalid @enderror "
            value="{{ old('twitter_account', $contact->twitter_account) }}" id="twitter_account"
            name="twitter_account">
        @error('twitter_account')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="instagram_account"> Contact User Instagram</label>
        <input type="text" class="form-control  @error('instagram_account') is-invalid @enderror "
            value="{{ old('instagram_account', $contact->instagram_account) }}" id="instagram_account"
            name="instagram_account">
        @error('instagram_account')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="first_time"> Contact First Time</label>
        <input type="time" class="form-control  @error('first_time') is-invalid @enderror "
            value="{{ old('first_time', $contact->first_time) }}" id="first_time" name="first_time">
        @error('first_time')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="last_time"> Contact Last Time</label>
        <input type="time" class="form-control  @error('last_time') is-invalid @enderror "
            value="{{ old('last_time', $contact->last_time) }}" id="last_time" name="last_time">
        @error('last_time')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <div>
            <label for="bg_image">Back Ground</label>
        </div>
        <img id="blah" src="{{ $contact->background_url }}" height="150" alt="your image" class="d-block">
        <input type="file" class="form-control  @error('bg_image') is-invalid @enderror " id="bg_image" name='bg_image'
            onchange="readURL(this);">
        @error('bg_image')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="form-group">
        <div>
            <label for="logo">Logo</label>
        </div>
        <img id="blah1" src="{{ $contact->logo_url }}" height="150" alt="your image" class="d-block">
        <input type="file" class="form-control  @error('logo') is-invalid @enderror " id="logo" name='logo'
            onchange="readURL2(this);">

        @error('logo')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <button type="submit" class="btn btn-primary btn-lg fa fa-save"
        onclick="return confirm('Are you sure !!');"></button>
</div>
