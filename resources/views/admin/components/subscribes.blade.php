@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>email </th>
                                <th>subject</th>
                                <th>text</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribes as $subscribe)
                                <tr>
                                    <td>{{ $subscribe->id }}</td>
                                    <td>{{ $subscribe->name }}</td>
                                    <td>{{ $subscribe->email }}</td>
                                    <td>{{ $subscribe->subject }}</td>
                                    <td>{{ $subscribe->text }}</td>
                                </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop
