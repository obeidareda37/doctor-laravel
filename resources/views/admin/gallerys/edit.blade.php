
@extends('layouts.admin')

@section('title', 'Edit Gallery')


@section('content')

<form action="{{ route('admin.gallerys.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
    <div class="container">

<h3>Update Gallery </h3>

    @csrf
    @method('PUT')
    @include('admin.gallerys._form')
</form>
</div>
@endsection
