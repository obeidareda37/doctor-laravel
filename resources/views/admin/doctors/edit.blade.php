
@extends('layouts.admin')

@section('title', 'Edit Doctor')


@section('content')
<div class="container">

<form action="{{ route('admin.doctors.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
<h3>Update Doctor </h3>

    @csrf
    @method('PUT')
    @include('admin.doctors._form')
</form>
</div>
@endsection
