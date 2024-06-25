@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span> კომპანიები</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">კომპანიები</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>კომპანია</th>
                                <th>მფლობელი</th>
                                <th>ელ-ფოსტა</th>
                                <th>ნომერი</th>
                                <th>პირადი ნომერი</th>
                                {{-- <th>მოქმედება</th> --}}
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($companies as $company)
                                
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $company->id }}</span>
                                </td>
                                <td class="d-flex">
                                    <div class="mr-5 avatar avatar-xs" data-bs-toggle="tooltip"><img
                                            src="{{ $company->image }}" 
                                            class="mr-4 rounded-circle pull-up"></div>
                                    <span class="ml-3">{{ $company->company_name }}</span>
                                </td>
                                <td>{{ $company->name }}</td>
                                <td>
                                    {{ $company->email }}
                                </td>
                                <td>
                                    {{ $company->number }}
                                </td>
                                <td>
                                    {{ $company->id_number }}
                                </td>
                                {{-- <td>
                                    <div class="dropdown">
                                        <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> სტატუსის ცვლილება</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> წაშლა</a>
                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
