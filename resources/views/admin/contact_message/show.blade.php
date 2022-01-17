@extends('layouts.admin')

@section('title', 'Edit Doctor')


@section('content')
    <div class="container">
        <div class="col-sm-6 col-xs-12">
            <h3 class="text-success">Details</h3>
            <label class="lable-contact">Sender Name : </label>
            <h5>{{ $sender->name }}</h5>
            <label class="lable-contact">Sender Phone : </label>
            <h5>{{ $sender->phone }}</h5>
            <label class="lable-contact">Sender Email : </label>
            <h5>{{ $sender->email }}</h5>
            <label class="lable-contact">Sender Message : </label>
            <p>{{ $sender->message }}</p>
        </div>
    </div>
@endsection
