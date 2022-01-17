@extends('layouts.admin')

@section('title', 'Add Doctor')


@section('content')
<div class="container">

<form action="{{ route('admin.doctors.store') }}" method="post" enctype="multipart/form-data">
<h3>Create Doctor</h3>
    @csrf
    @include('admin.doctors._form')
</form>
</div>
@endsection
