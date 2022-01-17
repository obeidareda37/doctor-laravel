<div class="container">


    <div class="form-group">
        <label for="name"> Client Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror "
            value="{{ old('name', $client->name) }}" id="name" name="name">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>

    <div class="form-group">
        <label for="comment"> Client Comment</label>
        <textarea id="editor" class="form-control @error('comment') is-invalid @enderror"
            name="comment">{{ old('comment', $client->comment) }}</textarea>
        @include('admin._TAScript')

        @error('comment')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="country"> Client Country</label>
        <input type="text" class="form-control  @error('country') is-invalid @enderror "
            value="{{ old('country', $client->country) }}" id="country" name="country">
        @error('country')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="city"> Client City</label>
        <input type="text" class="form-control  @error('city') is-invalid @enderror "
            value="{{ old('city', $client->city) }}" id="city" name="city">
        @error('city')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <div> <label for="file"> Client Image</label>
        </div>
        <img id="blah" src="{{ $client->image_url }}" alt="your image" height="250" alt="" class="d-block">
        <input type="file" class="form-control  @error('image') is-invalid @enderror " id="image" name='image'
            onchange="readURL(this);">

        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="form-group">
        <label for="name"> Status</label>
        <?php $value = ['Active', 'NotActive']; ?>
        <select name="status" id="status" class="form-control m-1">
            @foreach ($value as $valueI)
                <option value="{{ $valueI }}" @if ($valueI == old('status', $client->status)) selected @endif>
                    {{ $valueI }}</option>
            @endforeach
        </select>
        @error('status')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary btn-lg fa fa-save"></button>

</div>
