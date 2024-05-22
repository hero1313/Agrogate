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
                                <th>სტატუსი</th>
                                <th>მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                    <span class="fw-medium">31</span>
                                </td>
                                <td class="d-flex">
                                    <div class="avatar avatar-xs mr-5" data-bs-toggle="tooltip"><img
                                            src="/admin/assets/img/avatars/5.png" alt="Avatar"
                                            class="rounded-circle mr-4 pull-up"></div>
                                    <span class="ml-3">აჭარა ჯგუფი</span>
                                </td>
                                <td>დავით ნარიმანიძე</td>
                                <td>
                                    davit.narimanidze@gmail.com
                                </td>
                                <td>
                                    599 53 12 31
                                </td>
                                <td>
                                    00123142381
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-medium">31</span>
                                </td>
                                <td class="d-flex">
                                    <div class="avatar avatar-xs mr-5" data-bs-toggle="tooltip"><img
                                            src="/admin/assets/img/avatars/5.png" alt="Avatar"
                                            class="rounded-circle mr-4 pull-up"></div>
                                    <span class="ml-3">აჭარა ჯგუფი</span>
                                </td>
                                <td>დავით ნარიმანიძე</td>
                                <td>
                                    davit.narimanidze@gmail.com
                                </td>
                                <td>
                                    599 53 12 31
                                </td>
                                <td>
                                    00123142381
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
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
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-medium">31</span>
                                </td>
                                <td class="d-flex">
                                    <div class="avatar avatar-xs mr-5" data-bs-toggle="tooltip"><img
                                            src="/admin/assets/img/avatars/5.png" alt="Avatar"
                                            class="rounded-circle mr-4 pull-up"></div>
                                    <span class="ml-3">აჭარა ჯგუფი</span>
                                </td>
                                <td>დავით ნარიმანიძე</td>
                                <td>
                                    davit.narimanidze@gmail.com
                                </td>
                                <td>
                                    599 53 12 31
                                </td>
                                <td>
                                    00123142381
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
