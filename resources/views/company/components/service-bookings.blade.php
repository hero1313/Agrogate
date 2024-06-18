@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="px-3 container-fluid flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>სერვისი</th>
                                <th>სტატუსი</th>
                                <th>გადახდა</th>
                                <th>მეთოდი</th>
                                <th>თარიღი</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td><a href="{{ route('company.service.booking.show', $booking->id) }}">{{ $booking->id }}</a></td>
                                    <td>{{ $booking->service_item_id }}</td>
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
                                    <td>
                                        @if ($booking->pay_method == 1)
                                            <button class="btn btn-success">ინვოისი</button>
                                        @else
                                            <button class="btn btn-info">ქეში</button>
                                        @endif

                                    </td>
                                    <td>{{ $booking->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @foreach ($bookings as $booking)
        <div class="modal fade" id="pay_status_{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('company.service.booking.status.update', $booking->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">გადახდის სტატუსის რედაქტირება</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <select class="form-select" name="pay_status" aria-label="Default select example">
                                <option value="1">გადახდილი</option>
                                <option {{ $booking->pay_status == 0 ? "selected" : "" }} value="0">გადაუხდელი</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                            <button type="submit" class="btn btn-primary">დამახსოვრება</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@stop
