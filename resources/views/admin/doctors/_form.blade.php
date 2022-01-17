<div class="container">

    <div class="form-group">
        <label for="name"> Doctor Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror "
            value="{{ old('name', $doctor->name) }}" id="name" name="name">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="description"> Doctor Description</label>
        <textarea id="editor" class="form-control @error('description') is-invalid @enderror" id="description"
            name="description">{{ old('description', $doctor->description) }}</textarea>
        @include('admin._TAScript')

        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <div> <label for="image"> Doctor Image</label>
        </div>
        <img id="blah" src="{{ $doctor->image_url }}" alt="your image" height="250" class="d-block">
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
                <option value="{{ $valueI }}" @if ($valueI == old('status', $doctor->status)) selected @endif>
                    {{ $valueI }}</option>
            @endforeach
        </select>
        @error('status')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-lg fa fa-save"></button>

</div>
