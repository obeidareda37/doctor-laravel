
@extends('layouts.admin')

@section('title', 'Edit Service')


@section('content')

<form action="{{ route('admin.services.update', $service->id) }}" method="post" enctype="multipart/form-data">
    <div class="container">

<h3>Update Service </h3>

    @csrf
    @method('PUT')
    @include('admin.services._form')
</form>
</div>
@endsection
