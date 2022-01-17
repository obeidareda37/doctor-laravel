
@extends('layouts.admin')

@section('title', 'Edit Client')


@section('content')
<div class="container">

<form action="{{ route('admin.clients.update', $client->id) }}" method="post" enctype="multipart/form-data">

<h3>Update Client </h3>

    @csrf
    @method('PUT')
    @include('admin.clients._form')
</form>
</div>
@endsection
