@extends('layouts.admin')

@section('content')
<div class="container">
<div class="d-flex justify-content-between">
<h3 class="mb-5 text-success">SLiders</h3>



</div>
@include('admin._alert')


<div class="bg-light p-1 mb-6">
    <form action="{{ route('admin.sliders.index') }}" method="get" class="form-inline">
        <input type="date" name="date_form" class="form-control m-1" placeholder="Date Add here..." value="{{ $filters['date_form'] ?? '' }}">
        <button type="submit"  class="btn btn-primary m-1 glyphicon glyphicon-search"></button>
    </form>
</div>
<div class="form-inline" style="margin-top:10px;">
        <a href="{{ route('admin.sliders.create') }}" class="btn btn-outline-primary glyphicon glyphicon-plus"></a>
        <button  class="btn btn-warning delete_all" data-url="{{ route('admin.sliders.deleteAll') }}">Delete All Selected</button>
</div>
<table style="margin-top: 30px" class="table table-striped table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th>ID</th>
            <th>#</th>
            <th>Created At</th>
            <th>Update At</th>
            <th>Status</th>
            <th style="text-align:center;">Action</th>
            <th style="text-align:center;" width="50px"><label for="">All   <input type="checkbox" id="master"></label></th>

        </tr>
    </thead>
    <tbody>
            @forelse($sliders as $slider)
            <tr id="tr_{{$slider->id}}">

                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ $slider->image_url }}" height="60" alt=""></td>
                <td>{{ $slider->created_at->format('m, d, Y ') }}</td>
                <td>{{ $slider->updated_at->format('m, d, Y ') }}</td>
                <td class="@if($slider->status == 'Active') bg-primary @else bg-danger @endif">{{ $slider->status }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-6" style="text-align:right;">
                            <a class="btn btn-primary glyphicon glyphicon-edit" href="{{ route('admin.sliders.edit', [$slider->id]) }}"></a>
                        </div>
                        <div class="col-sm-6">
                        <form action="{{ route('admin.sliders.destroy', $slider->id) }}" class="form-inline "onclick="return confirm('Are you sure !!');" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
                        </form>
                        </div>
                    </div>
                </td>
                <td style="text-align:center;">
                    <input type="checkbox" class="sub_chk" data-id="{{$slider->id}}"></td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center">No Sliders</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>
@endsection
