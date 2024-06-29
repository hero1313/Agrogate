@extends('company.index')
@section('content')
    <div class="layout-page">
        <div class="px-3 container-fluid flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">{{ __('public._company_admin') }} /</span>
                {{ __('public._bookings') }}</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header"> {{ __('public._bookings') }}</h5>
                <div class="table-responsive text-nowrap">
                    <form id="serachForm" action="{{ route('company.booking.index') }}">
                        <div class="search-form row">
                            <div class="col-6 col-md-2">
                                <div class="search-item">
                                    <label for="id">აიდი {{ __('public._id') }}</label>
                                    <input class="form-control" type="text" name="id" id="id"
                                        placeholder="id">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id"> {{ __('public._status') }}</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value=""> {{ __('public._status') }}</option>
                                    <option value="1"> {{ __('public._verified') }}</option>
                                    <option value="0"> {{ __('public._unverified') }}</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id"></label>
                                <select class="form-select" name="pay_status" aria-label="Default select example">
                                    <option value=""> {{ __('public._pay') }}</option>
                                    <option value="1"> {{ __('public._payed') }}</option>
                                    <option value="0"> {{ __('public.not_payed') }}</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id"> {{ __('public._start_date') }}</label>
                                <div class="search-item">
                                    <input class="form-control" type="date" name="start_date" id="start_date">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <label for="id">{{ __('public._end_date') }}</label>
                                <div class="search-item">
                                    <input class="form-control" type="date" name="end_date" id="end_date">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <div class="search-item">
                                    <button class="btn btn-primary btn-search" type="submit">
                                        {{ __('public._search') }}</button>
                                </div>
                            </div>
                            <input name="excel" id="excel" type="hidden" type="number">
                        </div>
                    </form>
                    <div class="search-item">
                        <button class="btn btn-success excel-btn" id="excelExport" type="submit">
                            {{ __('public._excel_export') }}</button>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID </th>
                                <th> {{ __('public._hotel') }}</th>
                                <th> {{ __('public._status') }}</th>
                                <th> {{ __('public._pay') }}</th>
                                <th> {{ __('public._method') }}</th>
                                <th> {{ __('public._chack_in') }}</th>
                                <th> {{ __('public._check_out') }}</th>
                                <th> {{ __('public._created_date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td><a
                                            href="{{ route('company.booking.show', $booking->id) }}">{{ $booking->custom_id }}</a>
                                    </td>
                                    <td>
                                        @if (session('locale') == 'en')
                                            {{ $booking->hotel->name_en }}
                                        @else
                                            {{ $booking->hotel->name_ge }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($booking->status == 1)
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#status_{{ $booking->id }}">
                                                {{ __('public._approve') }}</button>
                                        @else
                                            <button class="btn btn-danger" data-toggle="modal"
                                                data-target="#status_{{ $booking->id }}">
                                                {{ __('public._not_approve') }}</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($booking->pay_status == 1)
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#pay_status_{{ $booking->id }}">
                                                {{ __('public._pay') }}</button>
                                        @else
                                            <button class="btn btn-danger" data-toggle="modal"
                                                data-target="#pay_status_{{ $booking->id }}">
                                                {{ __('public._not_pay') }}</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($booking->pay_method == 1)
                                            <button class="btn btn-success"> {{ __('public._invoice') }}</button>
                                        @else
                                            <button class="btn btn-info"> {{ __('public._cash') }}</button>
                                        @endif

                                    </td>
                                    <td>{{ $booking->start_date }}</td>
                                    <td>{{ $booking->end_date }}</td>
                                    <td>{{ $booking->created_at }}</td>
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
                <form action="{{ route('company.booking.status.update', $booking->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> {{ __('public._pay_status_edit') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <select class="form-select" name="pay_status" aria-label="Default select example">
                                <option value="1">{{ __('public._pay') }}</option>
                                <option {{ $booking->pay_status == 0 ? 'selected' : '' }} value="0">
                                    {{ __('public._not_pay') }}</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ __('public._close') }}</button>
                            <button type="submit" class="btn btn-primary"> {{ __('public._save') }}</button>
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
