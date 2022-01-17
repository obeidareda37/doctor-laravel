@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="d-flex justify-content-between">
            <h3 class="mb-5 text-success">Gallerys</h3>



        </div>
        @include('admin._alert')


        <div class="bg-light p-1 mb-3 ">
            <form action="{{ route('admin.gallerys.index') }}" method="get" class="form-inline">
                <input type="date" name="date_form" class="form-control m-1" placeholder="Date Add here..."
                    value="{{ $filters['date_form'] ?? '' }}">
                <button type="submit" class="btn btn-primary m-1 glyphicon glyphicon-search"></button>
            </form>
        </div>
        <div class="form-inline" style="margin-top:10px;">
            <a href="{{ route('admin.gallerys.create') }}"
                class="btn btn-outline-primary btn-sm mb-3 glyphicon glyphicon-plus"></a>
            <button class="btn btn-warning delete_all" data-url="{{ route('admin.gallerys.deleteAll') }}">Delete All
                Selected</button>
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
                    <th style="text-align:center;" width="50px"><label for="">All <input type="checkbox"
                                id="master"></label></th>
                </tr>
            </thead>
            <tbody>
                @forelse($gallerys as $gallery)
                    <tr id="tr_{{ $gallery->id }}">

                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ $gallery->image_url }}" height="60" alt=""></td>
                        <td>{{ $gallery->created_at->format('m, d, Y ') }}</td>
                        <td>{{ $gallery->updated_at->format('m, d, Y ') }}</td>
                    <td class="@if ($gallery->status == 'Active') bg-primary @else
                            bg-danger @endif">{{ $gallery->status }}</td>
                        <td>
                            <div class="row">
                                <div class="col-sm-6" style="text-align:right;">
                                    <a class="btn btn-primary glyphicon glyphicon-edit"
                                        href="{{ route('admin.gallerys.edit', [$gallery->id]) }}"></a>
                                </div>
                                <div class="col-sm-6">
                                    <form action="{{ route('admin.gallerys.destroy', $gallery->id) }}" class="form-inline "
                                        onclick="return confirm('Are you sure !!');" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td style="text-align:center;">
                            <input type="checkbox" class="sub_chk" data-id="{{ $gallery->id }}">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No Gallerys</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
