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
                                    <td>{{ $service->name_ge }}</td>
                                    <td>{{ $service->company->company_name }}</td>
                                    <td>{{ $service->address_ge }}</td>
                                    <td>{{ $service->city_ge }}</td>
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
