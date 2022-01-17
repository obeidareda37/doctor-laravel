
@extends('layouts.admin')

@section('title', 'Contact Us')


@section('content')
<div class="container">

<form action="{{ route('admin.contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
<h3 style="margin-left: 10px" class="text-success" >About Us</h3>
@include('admin._alert')
    @csrf
    @method('PUT')
    @include('admin.contact._form')
</form>
</div>

@endsection
