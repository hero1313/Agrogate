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
                                <button class="btn btn-primary">დადასტურებული</button>
                            </li>
                            @endif
                            @if($booking->status != 1)
                            <li class="nav-item">
                                <button class="btn btn-success" data-toggle="modal"
                                data-target="#status_success">ჯავშნის დადასტურება</button>
                            </li>
                            @endif
                            @if($booking->status != 1)
                            <li class="ml-5 nav-item">
                                <button class="btn btn-danger" data-toggle="modal"
                                data-target="#booking_cancel">ჯავშნის გაუქმება</button>
                            </li>
                            @endif
                        </ul>
                        <div class="mb-4 card">
                            <h5 class="card-header">ჯავშნის დეტალები</h5>
                            <div class="d-flex card-body">
                                <div class="gap-4 d-flex align-items-start align-items-sm-center">
                                    <img src="{{ $image->image }}" alt="user-avatar" class="rounded d-block" height="100"
                                        width="100" id="uploadedAvatar" />
                                </div>
                                <div class="mb-3 ml-3 service-info">
                                    <h5>{{ $service->name_ge }}</h5>
                                    <h5>{{ $service->address_ge }}</h5>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body booking-page">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">დაჯავშნის აიდი</span>
                                        <h5>{{ $booking->id }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">სრული ღირებულება</span>
                                        <h5>{{ $booking->total_price }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">გადახდის მეთოდი</span>
                                        <h5>
                                            @if ($booking->pay_method == 1)
                                                ინვოისი
                                            @else
                                                ქეში
                                            @endif
                                        </h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">სტატუსი</span>
                                            @if ($booking->status == 1)
                                                <h5 class="green">დადასტურებული</h5>
                                            @else
                                                <h5 class="red">დასადასტურებელი</h5>
                                            @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">გადახდის სტატუსი</span>
                                            @if ($booking->pay_status == 1)
                                                <h5 class="green">გადახდილი</h5>
                                            @else
                                                <h5 class="red">გადაუხდელი</h5>
                                            @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">თარიღი</span>
                                        <h5>{{ $booking->date }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">სტუმარი</span>
                                        <h5>{{ $booking->visitor_name }} {{ $booking->visitor_last_name }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">სტუმრის ტელეფონის ნომერი</span>
                                        <h5>{{ $booking->visitor_number }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">სტუმრის ელ-ფოსტა</span>
                                        <h5>{{ $booking->visitor_email }}</h5>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <span class="form-label">სტუმრის პრიადი ნომერი</span>
                                        <h5>{{ $booking->visitor_id_number }}</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- /Account -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- / Content -->
        </div>

    </div>

    <div class="modal fade" id="status_success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('company.service.booking.status.success', $booking->id) }}" method="post">
                @csrf
                @method('put')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ჯავშნის დადასტურება</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="modal-title">
                            @if($booking->pay_method == 1)
                                მომხმარებელს ელფოსტაზე გაეგზავნება ინვოისი
                            @else
                                მომხმარებლის მიერ გადახდა მოხდება ადგილზე ქეშად
                            @endif
                        </h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                        <button type="submit" class="btn btn-primary">დამახსოვრება</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="booking_cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('company.service.booking.destroy', $booking->id) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ჯავშნის გაუქმება</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6 class="modal-title">
                            მომხმარებელი ელ-ფოსტაზე მიიღებს შესაბამის შეტყობინებას
                        </h6>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">შეტყობინება</label>
                            <textarea class="form-control" name="text" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">დახურვა</button>
                        <button type="submit" class="btn btn-primary">დამახსოვრება</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
