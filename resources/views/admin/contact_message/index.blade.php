@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="d-flex justify-content-between">
            <h3 class="mb-5 text-success">Messages</h3>



        </div>

        <div class="row">
            <div class="bg-light p-1 mb-3 col-sm-10 ">
                <form action="{{ route('admin.messages.index') }}" method="get" class="form-inline">
                    <input type="text" name="name" class="form-control m-1" placeholder="Sender Name..."
                        value="{{ $filters['name'] ?? '' }}">
                    <button type="submit" class="btn btn-primary m-1 glyphicon glyphicon-search"></button>
                </form>


            </div>
            <div>
                <button class="btn btn-warning delete_all" data-url="{{ route('admin.contact.deleteAll') }}">Delete All
                    Selected</button>

            </div>
        </div>
        <table style="margin-top: 30px" class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Update At</th>
                    <th style="text-align:center;" width="50px"><label for="">All <input type="checkbox"
                                id="master"></label></th>
                </tr>
            </thead>
            <tbody>
                @forelse($contact_message as $message)
                    <tr id="tr_{{ $message->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-success"><a
                                href="{{ route('admin.messages.show', $message->id) }}">{{ $message->name }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->created_at->format('m, d, Y ') }}</td>
                        <td>{{ $message->updated_at->format('m, d, Y ') }}</td>
                        <td style="text-align:center;">
                            <input type="checkbox" class="sub_chk" data-id="{{ $message->id }}">
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No Message</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
