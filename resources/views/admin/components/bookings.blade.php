@extends('admin.index')
@section('content')
    <div class="layout-page">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">ადმინპანელი /</span> ჯავშნები</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">ჯავშნები</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>სასტუმრო</th>
                                <th>კომპანია</th>
                                <th>ჩექინი</th>
                                <th>ჩექაუთი</th>
                                <th>სრული თანხა</th>
                                <th>გადახდის სტატუსი</th>
                                <th>სტატუსი</th>
                                <th>დეტალები</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                    <span class="fw-medium">42</span>
                                </td>
                                <td>კაჭრეთი</td>
                                <td class="d-flex">
                                    <div class="avatar avatar-xs mr-5" data-bs-toggle="tooltip"><img
                                            src="/admin/assets/img/avatars/5.png" alt="Avatar"
                                            class="rounded-circle mr-4 pull-up"></div>
                                    <span class="ml-3">აჭარა ჯგუფი</span>
                                </td>
                                <td>05/19/24</td>
                                <td>05/24/24</td>
                                <td>927 ₾</td>
                                <td><span class="badge bg-label-danger me-1">გადაუხდელი</span></td>
                                <td><span class="badge bg-label-success me-1">დადასტურებული</span></td>
                                <td><button class="btn btn-primary">დეტალები</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop
