@extends('company.index')
@section('content')


    <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="mb-3 nav nav-pills flex-column flex-md-row">
                            @if($booking->status == 1)
                            <li class="nav-item">
                                <button class="btn btn-primary"> {{__('public._accepted')}}</button>
                            </li>
                            @endif
                            @if($booking->status != 1)
                            <li class="nav-item">
                                <button class="btn btn-success" data-toggle="modal"
                                data-target="#status_success">{{__('public._accept_booking')}}</button>
                            </li>
                            @endif
                            @if($booking->status != 1)
                            <li class="ml-5 nav-item">
                                <button class="btn btn-danger" data-toggle="modal"
                                data-target="#booking_cancel">{{__('public._remove_booking')}}</button>
                            </li>
                            @endif
                        </ul>
                        <div class="mb-4 card">
                            <h5 class="card-header">{{__('public._booking_detail')}}</h5>
                            <div class="d-flex card-body">
                                <div class="gap-4 d-flex align-items-start align-items-sm-center">
                                    <img src="{{ $image->image }}" alt="user-avatar" class="rounded d-block" height="100"
                                        width="100" id="uploadedAvatar" />
                                </div>
                                <div class="mb-3 ml-3 hotel-info">
                                    <h5>{{ $hotel->name_ge }}</h5>
                                    <h5>{{ $hotel->address_ge }}</h5>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body booking-page">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public.booking_id')}}</span>
                                        <h5>{{ $booking->custom_id }}</h5>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._room_id')}}</span>
                                        <h5>{{ $room->id }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._adult_number')}}</span>
                                        <h5>{{ $room->seats }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label"></span>
                                        <h5>{{ $room->child_seats ?? __('public._child_number') }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._total_price')}}</span>
                                        <h5>
                                            <div class="d-flex">
                                                <span class="price d-block">{{ $totalPrice }}</span>
                                                <span class="api-currency">₾</span>
                                            </div>
                                        </h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._pay_method')}}</span>
                                        <h5>
                                            @if ($booking->pay_method == 1)
                                                {{__('public._invoice')}}
                                            @else
                                                {{__('public._cash')}}
                                            @endif
                                        </h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._status')}}</span>
                                            @if ($booking->status == 1)
                                                <h5 class="green">{{__('public._accepted')}}</h5>
                                            @else
                                                <h5 class="red">{{__('public._unaccepted')}}</h5>
                                            @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._pay_status')}}</span>
                                            @if ($booking->pay_status == 1)
                                                <h5 class="green">{{__('public._pay')}}</h5>
                                            @else
                                                <h5 class="red">{{__('public._not_pay')}}</h5>
                                            @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._start')}}</span>
                                        <h5>{{ $booking->start_date }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._end')}}</span>
                                        <h5>{{ $booking->end_date }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._visitor')}}</span>
                                        <h5>{{ $booking->visitor_name }} {{ $booking->visitor_last_name }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._visitor_number')}}</span>
                                        <h5>{{ $booking->visitor_number }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._visitor_email')}}</span>
                                        <h5>{{ $booking->visitor_email }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._visitor_id_number')}}</span>
                                        <h5>{{ $booking->visitor_id_number }}</h5>
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._check_in')}}</span>
                                        <h5>{{ $booking->check_in }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">{{__('public._check_out')}}</span>
                                        <h5>{{ $booking->check_out }}</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /Account -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header">{{__('public._services')}}</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('public._name')}}</th>
                                            <th>{{__('public._quantity')}}</th>
                                            <th>{{__('public._total_price')}}</th>
                                            <th>{{__('public._edit')}}</th>
                                            <th>{{__('public._delete')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($serviceBooking as $service)
                                            <tr>
                                                <td>
                                                    <span class="fw-medium">{{ $service->service->name_ge }}</span>
                                                </td>
                                                <td>
                                                    <span class="fw-medium">{{ $service->quantity }}</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <span class="price d-block">{{ $service->total_price }}</span>
                                                        <span class="api-currency">₾</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-info " data-toggle="modal"
                                                        data-target="#edit_service_{{ $service->id }}">
                                                        <i class="bx bx-edit-alt me-1"></i> რედაქტირება {{__('public._edit')}}
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" data-toggle="modal"
                                                        data-target="#delete_service_{{ $service->id }}">
                                                        <i class="bx bx-trash me-1"></i>{{__('public._delete')}}
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

            </div>
            <!-- / Content -->
        </div>

    </div>

    @foreach ($serviceBooking as $service)
        <!-- add service Modal -->
        <div class="modal fade" id="edit_service_{{ $service->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('company.service.booking.update', $service->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{__('public._service_edit')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="quantity" class="form-label">{{__('public._quantity')}}</label>
                                    <input class="form-control" value="{{ $service->quantity }}" type="number"
                                        id="quantity" name="quantity" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('public._close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('public._edit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- add service Modal -->
        <div class="modal fade" id="delete_service_{{ $service->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{ route('company.service.booking.destroy', $service->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{__('public._service_delete')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('public._close')}}</button>
                            <button type="submit" class="btn btn-primary">{{__('public._delete')}}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="status_success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('company.booking.status.success', $booking->id) }}" method="post">
                @csrf
                @method('put')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('public._booking_aprove')}}</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="modal-title">
                            @if($booking->pay_method == 1)
                                {{__('public._send_invoice')}}
                            @else
                                {{__('public._pay_cash')}}
                            @endif
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('public._close')}}</button>
                        <button type="submit" class="btn btn-primary">{{__('public._save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="booking_cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('company.booking.destroy', $booking->id) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{__('public._booking_decline')}}</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="modal-title">
                            {{__('public._send_text')}}
                        </h6>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">{{__('public._message')}}</label>
                            <textarea class="form-control" name="text" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('public._close')}}</button>
                        <button type="submit" class="btn btn-primary">{{__('public._save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
