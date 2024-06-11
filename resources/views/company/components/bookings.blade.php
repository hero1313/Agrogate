@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Hotel ID</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Pay Status</th>
                                <th>Pay Method</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->custom_id }}</td>
                                    <td>{{ $booking->hotel_id }}</td>
                                    <td>{{ $booking->total_price }}</td>
                                    <td>{{ $booking->status }}</td>
                                    <td>{{ $booking->pay_status }}</td>
                                    <td>{{ $booking->pay_method }}</td>
                                    <td>{{ $booking->start_date }}</td>
                                    <td>{{ $booking->end_date }}</td>
                                    <td>
                                        <button class="btn btn-primary" type="button" data-toggle="collapse"
                                            data-target="#details-{{ $booking->id }}" aria-expanded="false"
                                            aria-controls="details-{{ $booking->id }}">
                                            More
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop
