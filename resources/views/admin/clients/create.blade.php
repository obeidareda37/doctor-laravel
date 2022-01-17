@extends('layouts.admin')

@section('title', 'Add Client')


@section('content')
<div class="container">
<form action="{{ route('admin.clients.store') }}" method="post" enctype="multipart/form-data">
<h3>Create Client</h3>
    @csrf
    @include('admin.clients._form')
</form>
</div>
@endsection
