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
                <tr>
                  <td>
                    <span class="fw-medium">2</span>
                  </td>
                  <td>დავით ჯაში</td>
                  <td>თელავი</td>
                  <td>ტაბიძის #14</td>
                  <td>კაჭრეთი ამბასადორი</td>
                  <td><span class="badge bg-label-primary me-1">აქტიური</span></td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i>სტატუსის ცვლილება</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Delete</a
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
