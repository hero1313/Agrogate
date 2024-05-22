@extends('company.index')
@section('content')
<div class="layout-page">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">კომპანიის ადმინ-პანელი /</span> ჯავშნები</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">ჯავშნები</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>სასტუმრო</th>
                  <th>ჩექინი</th>
                  <th>ჩექაუთი</th>
                  <th>სრული თანხა</th>
                  <th>გადახდის სტატუსი</th>
                  <th>სტატუსი</th>
                  <th>დეტალები</th>
                  <th>შეტყობინება</th>
                  <th>მოქმედება</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                <tr>
                  <td>
                    <span class="fw-medium">42</span>
                  </td>
                  <td>კაჭრეთი</td>
                  <td>05/19/24</td>
                  <td>05/24/24</td>
                  <td>927 ₾</td>
                  <td><span class="badge bg-label-danger me-1">გადაუხდელი</span></td>
                  <td><span class="badge bg-label-success me-1">დადასტურებული</span></td>
                  <td><button class="btn btn-primary">დეტალები</button></td>
                  <td><button class="btn btn-info">შეტყობინება</button></td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> სტატუსის ცვლილება</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> წაშლა</a
                        >
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
