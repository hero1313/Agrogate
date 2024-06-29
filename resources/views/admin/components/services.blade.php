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
                                <th>name</th>
                                <th>Company </th>
                                <th>address</th>
                                <th>city</th>
                                <th>price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>
                                        @if (session('locale') == 'en')
                                            {{ $service->name_en }}
                                        @else
                                            {{ $service->name_ge }}
                                        @endif
                                    </td>
                                    <td>{{ $service->company->company_name }}</td>
                                    <td>
                                        @if (session('locale') == 'en')
                                            {{ $service->address_en }}
                                        @else
                                            {{ $service->address_ge }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (session('locale') == 'en')
                                            {{ $service->city_en }}
                                        @else
                                            {{ $service->city_ge }}
                                        @endif
                                    </td>
                                    <td>{{ $service->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    {{ $services->links() }}
                </div>
            </div>

        </div>
    </div>
@stop
