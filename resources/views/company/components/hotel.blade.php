@extends('admin.index')
@section('content')
<div class="layout-page">

<div class="container hotel-slider">
    <h4 class="py-3 mt-4 mb-4"><span class="text-muted fw-light">სასტუმრო /</span> #1</h4>
    <img src="https://www.welcome-hotels.com/site/assets/files/84580/welcome_hotel_darmstadt_musterziimmer_1.2560x1600.jpg" alt="">
</div>
<div class="container">
    <div class="row">
        <div class="col-xl">
            <div class="mb-4 card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Basic Layout</h5>
                <small class="text-muted float-end">Default label</small>
              </div>
              <div class="card-body row">
                <div class="col-6">
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Full Name</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Company</label>
                    <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="text"
                        id="basic-default-email"
                        class="form-control"
                        placeholder="john.doe"
                        aria-label="john.doe"
                        aria-describedby="basic-default-email2" />
                      <span class="input-group-text" id="basic-default-email2">@example.com</span>
                    </div>
                    <div class="form-text">You can use letters, numbers & periods</div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-phone">Phone No</label>
                    <input
                      type="text"
                      id="basic-default-phone"
                      class="form-control phone-mask"
                      placeholder="658 799 8941" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Message</label>
                    <textarea
                      id="basic-default-message"
                      class="form-control"
                      placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-fullname">Full Name</label>
                      <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Company</label>
                      <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-email">Email</label>
                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          id="basic-default-email"
                          class="form-control"
                          placeholder="john.doe"
                          aria-label="john.doe"
                          aria-describedby="basic-default-email2" />
                        <span class="input-group-text" id="basic-default-email2">@example.com</span>
                      </div>
                      <div class="form-text">You can use letters, numbers & periods</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-phone">Phone No</label>
                      <input
                        type="text"
                        id="basic-default-phone"
                        class="form-control phone-mask"
                        placeholder="658 799 8941" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-message">Message</label>
                      <textarea
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">სასტუმრო /</span> ოთახები</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Project</th>
              <th>Client</th>
              <th>Users</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                <span class="fw-medium">Angular Project</span>
              </td>
              <td>Albert Cook</td>
              <td>
                <ul class="m-0 list-unstyled users-list avatar-group d-flex align-items-center">
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Lilian Fuller">
                    <img src="/admin/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Sophia Wilkerson">
                    <img src="/admin/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Christina Parker">
                    <img src="/admin/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <i class="bx bxl-react bx-sm text-info me-3"></i> <span class="fw-medium">React Project</span>
              </td>
              <td>Barry Hunter</td>
              <td>
                <ul class="m-0 list-unstyled users-list avatar-group d-flex align-items-center">
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Lilian Fuller">
                    <img src="/admin/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Sophia Wilkerson">
                    <img src="/admin/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Christina Parker">
                    <img src="/admin/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-success me-1">Completed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-edit-alt me-2"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-2"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <i class="bx bxl-vuejs bx-sm text-success me-3"></i>
                <span class="fw-medium">VueJs Project</span>
              </td>
              <td>Trevor Baker</td>
              <td>
                <ul class="m-0 list-unstyled users-list avatar-group d-flex align-items-center">
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Lilian Fuller">
                    <img src="/admin/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Sophia Wilkerson">
                    <img src="/admin/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Christina Parker">
                    <img src="/admin/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-info me-1">Scheduled</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-edit-alt me-2"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-2"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <i class="bx bxl-bootstrap bx-sm text-primary me-3"></i>
                <span class="fw-medium">Bootstrap Project</span>
              </td>
              <td>Jerry Milton</td>
              <td>
                <ul class="m-0 list-unstyled users-list avatar-group d-flex align-items-center">
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Lilian Fuller">
                    <img src="/admin/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Sophia Wilkerson">
                    <img src="/admin/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                  </li>
                  <li
                    data-bs-toggle="tooltip"
                    data-popup="tooltip-custom"
                    data-bs-placement="top"
                    class="avatar avatar-xs pull-up"
                    title="Christina Parker">
                    <img src="/admin/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-warning me-1">Pending</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="p-0 btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-edit-alt me-2"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-2"></i> Delete</a
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
@stop