@extends('layouts.admin')

@section('title', 'Add Gallery')


@section('content')

<form action="{{ route('admin.gallerys.store') }}" method="post" enctype="multipart/form-data">
    <div class="container">

<h3>Create Gallery </h3>
    @csrf
    @include('admin.gallerys._form')
</form>
</div>
@endsection
