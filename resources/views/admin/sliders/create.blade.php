@extends('layouts.admin')

@section('title', 'Add Slider')


@section('content')

<form action="{{ route('admin.sliders.store') }}" method="post" enctype="multipart/form-data">
    <div class="container">

<h3>Create Slider </h3>
    @csrf
    @include('admin.sliders._form')
</form>
</div>
@endsection
