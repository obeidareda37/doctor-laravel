@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between">
            <h3 class="mb-5 text-success">Services</h3>


        </div>
        @include('admin._alert')
        <div class="bg-light p-1 mb-3 ">
            <form action="{{ route('admin.services.index') }}" method="get" class="form-inline">
                <input type="text" name="name" class="form-control m-1" placeholder="Service Name..."
                    value="{{ $filters['name'] ?? '' }}">
                <button type="submit" class="btn btn-primary m-1 glyphicon glyphicon-search"></button>
            </form>
        </div>
        <div class="form-inline" style="margin-top:10px;">
            <a href="{{ route('admin.services.create') }}"
                class="btn btn-outline-primary btn-sm mb-3 glyphicon glyphicon-plus"></a>
            <button class="btn btn-warning delete_all" data-url="{{ route('admin.services.deleteAll') }}">Delete All
                Selected</button>




            <table style="margin-top: 30px" class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>#</th>
                        <th>name</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Status</th>
                        <th style="text-align:center;">Action</th>
                        <th style="text-align:center;" width="50px"><label for="">All <input type="checkbox"
                                    id="master"></label></th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr id="tr_{{ $service->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ $service->image_url }}" height="60" alt=""></td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->created_at->format('m, d, Y ') }}</td>
                            <td>{{ $service->updated_at->format('m, d, Y ') }}</td>
                        <td class="@if ($service->status == 'Active') bg-primary @else
                                bg-danger @endif">{{ $service->status }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-6" style="text-align:right;">
                                        <a class="btn btn-primary glyphicon glyphicon-edit"
                                            href="{{ route('admin.services.edit', [$service->id]) }}"></a>
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="{{ route('admin.services.destroy', $service->id) }}"
                                            class="form-inline "
                                            onclick="return confirm('Are you sure ({{ $service->name }}) Delete !!');"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td style="text-align:center;">
                                <input type="checkbox" class="sub_chk" data-id="{{ $service->id }}">
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">No Services</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endsection
