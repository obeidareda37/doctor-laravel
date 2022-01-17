
@extends('layouts.admin')

@section('title', 'Edit Slider')


@section('content')

<form action="{{ route('admin.sliders.update', $slider->id) }}" method="post" enctype="multipart/form-data">
    <div class="container">

<h3>Update Slider </h3>

    @csrf
    @method('PUT')
    @include('admin.sliders._form')
</form>
</div>
@endsection
