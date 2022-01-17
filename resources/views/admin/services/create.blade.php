@extends('layouts.admin')

@section('title', 'Add Service')


@section('content')
<div class="container">
<form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
<h3>Create Service</h3>
    @csrf
    @include('admin.services._form')
</form>
</div>
@endsection
