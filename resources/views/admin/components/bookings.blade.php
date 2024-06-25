@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <form action="{{ route('admin.booking.index') }}">
                        <div class="search-form row">
                            <div class="col-6 col-md-2">
                                <div class="search-item">
                                    <label for="id">აიდი</label>
                                    <input class="form-control" type="text" name="id" id="id" placeholder="id">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id">სტაუსი</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="">სტატუსი</option>
                                    <option value="1">ვერიფიცირებული</option>
                                    <option value="0">არავერიფიცირებული</option>
                                  </select>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id">გადახდის სტატუსი</label>
                                <select class="form-select" name="pay_status" aria-label="Default select example">
                                    <option value="">გადახდა</option>
                                    <option value="1">გადახდილი</option>
                                    <option value="0">გადაუხდელი</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id">საწყისი თარიღი</label>
                                <div class="search-item">
                                    <input class="form-control" type="date" name="start_date" id="start_date">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id">საბოლოო თარიღი</label>
                                <div class="search-item">
                                    <input class="form-control" type="date" name="end_date" id="end_date">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="search-item">
                                    <button class="btn btn-primary btn-search" type="submit">ძებნა</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                <td>{{ $booking->company->company_name }}</td>
                                <td>{{ $booking->hotel->name_ge }}</td>
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
                <div class="pagination">
                    {{ $bookings->links() }}
                </div>
            </div>

        </div>
    </div>
@stop
