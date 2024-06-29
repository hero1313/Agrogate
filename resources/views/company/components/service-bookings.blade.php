@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="px-3 container-fluid flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <form id="serachForm" action="{{ route('company.service.booking.index') }}">
                        <div class="search-form row">
                            <div class="col-6 col-md-2">
                                <div class="search-item">
                                    <label for="id">აიდი</label>
                                    <input class="form-control" type="text" name="id" id="id"
                                        placeholder="id">
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
                        <input name="excel" id="excel" type="hidden" type="number">
                    </form>
                    <div class="search-item">
                        <button class="btn btn-success excel-btn" id="excelExport" type="submit">Excel Export</button>
                    </div>
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
                                    <td>
                                        <a href="{{ route('company.service.booking.show', $booking->id) }}">{{ $booking->id }}</a>
                                    </td>
                                    <td>
                                        @if (session('locale') == 'en')
                                            {{ $booking->service->name_en }}
                                        @else
                                            {{ $booking->service->name_ge }}
                                        @endif
                                    </td>
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
                <div class="pagination">
                    {{ $bookings->links() }}
                </div>
            </div>

        </div>
    </div>

    @foreach ($bookings as $booking)
        <div class="modal fade" id="pay_status_{{ $booking->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <option {{ $booking->pay_status == 0 ? 'selected' : '' }} value="0">გადაუხდელი
                                </option>
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

    <script>
        $(document).ready(function() {
            $('#excelExport').on('click', function(event) {
                $('#excel').val('1');
                $('#serachForm').submit();
            });
        });
    </script>
@stop
