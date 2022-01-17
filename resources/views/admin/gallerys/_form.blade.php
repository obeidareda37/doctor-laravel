<div class="container">

    <div class="form-group">
        <div> <label for="file">Image</label>

        </div>
        <img id="blah" src="{{ $gallery->image_url }}" height="250" alt="your image" class="d-block">
        <input type="file" class="form-control  @error('image') is-invalid @enderror " name='image'
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
                <option value="{{ $valueI }}" @if ($valueI == old('status', $gallery->status)) selected @endif>
                    {{ $valueI }}</option>
            @endforeach
        </select>
        @error('status')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-lg fa fa-save"></button>

</div>
