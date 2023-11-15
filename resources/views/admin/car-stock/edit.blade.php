@include('admin.statics.head')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('admin.statics.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
          class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center mt-3" id="navbar-collapse">
            <h4 class="">
              Cars
            </h4>
            <!-- Search -->
            <div class="navbar-nav align-items-center">

            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">{{Auth::user()->name}}</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>

                    <div class="dropdown-divider"></div>
                  <li>
                    <a class="dropdown-item" href="/admin/logout">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item lh-1 me-3">
                <p>
                  {{Auth::user()->name}}
                  <br>
                  <span class="text-success">
                    {{Auth::user()->role}}
                  </span>
                </p>
                <p></p>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->




              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-4">Edit {{$car->name}}</h4>
                    <small class="text-muted float-end">Edit Car</small>
                  </div>
                  <div class="card-body">
                    <form action="/admin/stock/{{$car->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="_method" value="PUT">
                      <input type="text" name="car_id" id="" value="{{ request()->segment(3) }}" hidden>
                      <div class="row">
                          <div class="mb-3 col">
                              <label class="form-label" for="basic-default-fullname">price</label>
                              <input type="text" class="form-control" id="basic-default-fullname" placeholder="price" name="price" value="{{ $carStock->price }}">
                              @error('price')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="mb-3 col">
                              <label class="form-label" for="basic-default-fullname">Old Price</label>
                              <input type="text" class="form-control" id="basic-default-fullname" placeholder="old_price" name="old_price" value="{{ $carStock->old_price }}">
                              @error('old_price')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                            </div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">description</label>
                          <textarea class="form-control" id="basic-default-fullname" placeholder="description" name="description"> {{ $carStock->description }}</textarea>
                          @error('description')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="row">
                        <div class="mb-3 col">
                            <label class="form-label" for="basic-default-fullname">Select Car status</label>
                            <select class="form-control" id="basic-default-fullname" name="status">
                                <option value="New" {{ $carStock->status === 'new' ? 'selected' : '' }}>New</option>
                                <option value="Used - like new" {{ $carStock->status === 'used' ? 'selected' : '' }}>Used</option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label class="form-label" for="basic-default-fullname">Mileage</label>
                            <input type="text" class="form-control" id="basic-default-fullname" placeholder="Select Mileage Kilometers" name="mileage" value="{{ $carStock->mileage }}">
                            @error('mileage')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col">
                            <label class="form-label" for="basic-default-fullname">Select Fuel Type</label>
                            <select class="form-control" id="basic-default-fullname" name="fuel_type">
                                <option value="Gasoline" {{ $carStock->fuel_type === 'Gasoline' ? 'selected' : '' }}>Gasoline</option>
                                <option value="Diesel" {{ $carStock->fuel_type === 'Diesel' ? 'selected' : '' }}>Diesel</option>
                                <option value="Electricity" {{ $carStock->fuel_type === 'Electricity' ? 'selected' : '' }}>Electricity</option>
                                <option value="Hybrid" {{ $carStock->fuel_type === 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                            @error('fuel_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label class="form-label" for="basic-default-fullname">Select Gearbox</label>
                            <select class="form-control" id="basic-default-fullname" name="gearbox">
                                <option value="Automatic" {{ $carStock->gearbox === 'Automatic' ? 'selected' : '' }}>Automatic</option>
                                <option value="Manual" {{ $carStock->gearbox === 'Manual' ? 'selected' : '' }}>Manual</option>
                                <option value="Hybrid" {{ $carStock->gearbox === 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                            </select>
                            @error('gearbox')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Edit Series</button>
                    </form>
                  </div>
                </div>
              </div>









              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="mb-2 mb-md-2" style="text-align: center;">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , powered by
                <a href="https://wa.me/201112377882" target="_blank" class="footer-link fw-bolder">Nassef</a>,
                all rights reserved.
              </div>
          </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js /assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
