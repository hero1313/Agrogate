@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span>სასტუმროები</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">სასტუმროები</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>მფლობელი</th>
                                <th>დასახელება</th>
                                <th>ქალაქი</th>
                                <th>მისამართი</th>
                                <th>სტატუსი</th>
                                <th>მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td>
                                      <a href="{{ route('admin.hotel.show', $hotel->id) }}"><span class="fw-medium">{{ $hotel->id }}</span></a>
                                    </td>
                                    <td class="d-flex">
                                        <div class="mr-5 avatar avatar-xs" data-bs-toggle="tooltip"><img
                                                src="{{ $hotel->user_id }}" 
                                                class="mr-4 rounded-circle pull-up"></div>
                                        <span class="ml-3">{{ $hotel->user_id }}</span>
                                    </td>
                                    <td>{{ $hotel->name_ge }}</td>
                                    <td>{{ $hotel->city_ge }}</td>
                                    <td>{{ $hotel->address_ge }}</td>
                                    <td>
                                      @if($hotel->permission == 0)
                                      <span class="badge bg-label-danger me-1">არავერიფიცირებული</span>
                                      @else
                                      <span class="badge bg-label-primary me-1">ვერიფიცირებული</span>
                                      @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                                <div class="dropdown-item verif-div" data-toggle="modal" data-target="#hotel_update_{{ $hotel->id }}">სტატისოს ცვლილება</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @foreach ($hotels as $hotel)
      <div class="modal fade" id="hotel_update_{{ $hotel->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="{{ route('admin.hotel.update', $hotel->id) }}" method="post">
            @method('put')
            @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $hotel->name_ge }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label  for="">სტატუსი</label>
                <select class="form-select" name="permission">
                  <option value="{{ $hotel->permission }}">{{ $hotel->permission }}</option>
                  <option value="0">დახარვეზება</option>
                  <option value="1">ვერიფიცირება</option>
                </select>
                <label class="mt-3" >შეტყობინება მომხმარებელს</label>
                <div class="mt-1 form-floating">
                  <textarea name="text" class="form-control" style="height: 100px"></textarea>
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
    @endforeach

@stop
