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
                                <th>Customer ID</th>
                                <th>User ID</th>
                                <th>Hotel ID</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Pay Status</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->custom_id }}</td>
                                <td>{{ $booking->user_id }}</td>
                                <td>{{ $booking->hotel_id }}</td>
                                <td>{{ $booking->total_price }}</td>
                                <td>
                                    @if ($booking->status == 1)
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#status_{{ $booking->id }}">დადასტურებული</button>
                                    @else
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#status_{{ $booking->id }}">დასადასტურებელი</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($booking->pay_status == 1)
                                        <button class="btn btn-success" data-toggle="modal"
                                            data-target="#pay_status_{{ $booking->id }}">გადახდილი</button>
                                    @else
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#pay_status_{{ $booking->id }}">გადაუხდელი</button>
                                    @endif
                                </td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->end_date }}</td>
                                <td>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#details-{{ $booking->id }}" aria-expanded="false" aria-controls="details-{{ $booking->id }}">
                                        More
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse" id="details-{{ $booking->id }}">
                                <td colspan="13">
                                    <h5 class="mt-4">Room Bookings</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Room</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($booking->roomBookings as $roomBooking)
                                            <tr>
                                                <td>adult: {{ $roomBooking->room->seats }} / child: {{ $roomBooking->room->child_seats }}</td>
                                                <td>{{ $roomBooking->price }}</td>
                                                <td>{{ $roomBooking->date }}</td>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h5 class="mt-4">Service Bookings</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($booking->serviceBookings as $serviceBooking)
                                            <tr>
                                                <td>{{ $serviceBooking->service->name_ge }}</td>
                                                <td>{{ $serviceBooking->quantity }}</td>
                                                <td>{{ $serviceBooking->total_price }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
