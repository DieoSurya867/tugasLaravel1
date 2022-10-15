@extends('layout.dashboard')


@section('title')
    Dashboard - Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro
     
@endsection
@section('content')
    

   <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <a href="{{ url('admin/create') }}" class="ms-4 mb-4 btn btn-sm  btn-outline-primary">Tambah Data</a>
                  <a href="{{ route('admin.create') }}" class="ms-4 mb-4 btn btn-sm  btn-outline-primary">Tambah Data Pakai Route</a>
                  <table class="table table-bordered table-hover">
                    
                    <thead>
                      <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Sekolah</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($data2 as $item)                      
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{  $item['project'] }}</strong></td>
                        <td>{{ $item['client'] }}</td>
                        <td>{{ $item->sekolah->namaSekolah }}</td>
                        
                        {{-- <td>{{ $item->client }}</td> --}}
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src={{ asset ("sneat/assets/img/avatars/5.png")}} alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src={{ asset ("sneat/assets/img/avatars/6.png")}} alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src={{ asset ("sneat/assets/img/avatars/7.png")}} alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">{{ $item['status'] }}</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ URL::to('admin/' . $item->id . '/edit') }}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="{{ url('deleteadmin/'. $item->id) }}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                              <a class="dropdown-item" href="{{ route('deleteadmin', $item->id) }}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >

                              
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />

              
              <!--/ Responsive Table -->
</div>
            <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>

        @endsection