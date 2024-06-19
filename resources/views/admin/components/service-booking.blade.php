@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-fluid flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <form action="{{ route('admin.service.booking.index') }}">
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
                <div class="pagination">
                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
