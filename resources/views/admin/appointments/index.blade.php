@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between">
            <h3 class="mb-5 text-success">Appointment</h3>



        </div>

        <div class="row">

            <div class="bg-light p-1 mb-3 col-sm-10">
                <form action="{{ route('admin.appointments.index') }}" method="get" class="form-inline">
                    <input type="text" name="name" class="form-control m-1" placeholder="Appointment Name..."
                        value="{{ $filters['name'] ?? '' }}">
                    <button type="submit" class="btn btn-primary m-1 glyphicon glyphicon-search"></button>
                </form>
            </div>
            <div>
                <button class="btn btn-warning delete_all" data-url="{{ route('admin.appointments.deleteAll') }}">Delete
                    All Selected</button>

            </div>
        </div>
        <table style="margin-top: 30px" class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Update At</th>
                    <th style="text-align:center;" width="50px"><label for="">All <input type="checkbox"
                                id="master"></label></th>

                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appointment)
                    <tr id="tr_{{ $appointment->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-success"><a
                                href="{{ route('admin.appointments.show', $appointment->id) }}">{{ $appointment->name }}</td>
                        <td>{{ $appointment->gender }}</td>
                        <td>{{ $appointment->age }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->created_at->format('m, d, Y ') }}</td>
                        <td>{{ $appointment->updated_at->format('m, d, Y ') }}</td>
                        <td style="text-align:center;">
                            <input type="checkbox" class="sub_chk" data-id="{{ $appointment->id }}">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No Appointment</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
