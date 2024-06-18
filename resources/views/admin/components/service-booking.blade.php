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
                                <th>service name</th>
                                <th>user </th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>date</th>
                                <th>მომხმარებელი</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->service_item_id }}</td>
                                    <td>{{ $booking->user_id }}</td>
                                    <td>{{ $booking->quantity }}</td>
                                    <td>{{ $booking->total_price }}</td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->visitor_name }} {{ $booking->visitor_lastname }}</td>
                                </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop
