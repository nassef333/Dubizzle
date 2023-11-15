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
                Products
              </h4>
              <!-- Search -->
              <div class="navbar-nav align-items-center">

              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
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





<div class="card">
  <h2 class="card-header text-center">requests</h2>
  <p class="text-center">Total requests: {{ $requests->total() }}</p>
  <div class="card-body">
    <div class="search mt-2 mb-5">
      <div class="buttons mb-2">
        {{-- <a href="/admin/requests/create" type="button" class="btn btn-outline-primary btn-sm">+ Add request</a> --}}
        <form action="" method="GET" class="form-inline mt-2 mb-2">
            @csrf
              <div class="input-group">
                  <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                  <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" name="searchTerm" value="{{ request('searchTerm') }}">
                  <button type="submit" class="btn btn-primary ml-2">Search</button>
              </div>
          </form>
        <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>User Name</th>
            <th>User Phone</th>
            <th>Part name</th>
            <th>message</th>
            <th>Sent at</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($requests as $request)
            <tr id="deleteRow{{$request->id}}">
              <td>{{ $request->username }}</td>
              <td>{{ $request->userphone }}</td>
              <td>{{ $request->name }}</td>
              <td>{{ $request->message }}</td>
              <td>{{ $request->created_at }}</td>
              <td class="text-center">
                <div class="btn-group">
                  <form action="/admin/request/{{$request->id}}/delete" method="GET">
                    @method('GET')
                    @csrf
                    <button type="button" onclick="showConfirmationModal({{$request->id}})" class="btn btn-outline-danger btn-sm">Delete</button>
                  </form>
              </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mb-1 mt-4">
        <nav aria-label="Page navigation">
          <ul class="pagination">

            <!-- First Page Link -->
            <li class="page-item {{ $requests->onFirstPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $requests->url(1) }}" aria-label="First">
                <span aria-hidden="true">&laquo;&laquo;</span>
                <span class="sr-only"></span>
              </a>
            </li>

            <!-- Previous Page Link -->
            <li class="page-item {{ $requests->onFirstPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $requests->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only"></span>
              </a>
            </li>

            <!-- Pagination Links -->
            @php
                $totalPages = $requests->lastPage();
                $currentPage = $requests->currentPage();
                $visiblePages = 5; // Number of visible pages (adjust as needed)
                $halfVisible = floor($visiblePages / 2);
                $startPage = max(min($currentPage - $halfVisible, $totalPages - $visiblePages + 1), 1);
                $endPage = min($startPage + $visiblePages - 1, $totalPages);
            @endphp

            @for ($page = $startPage; $page <= $endPage; $page++)
              <li class="page-item {{ $page == $requests->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $requests->url($page) }}">{{ $page }}</a>
              </li>
            @endfor

            <!-- Next Page Link -->
            <li class="page-item {{ $requests->currentPage() == $requests->lastPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $requests->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only"></span>
              </a>
            </li>

            <!-- Last Page Link -->
            <li class="page-item {{ $requests->currentPage() == $requests->lastPage() ? 'disabled' : '' }}">
              <a class="page-link" href="{{ $requests->url($requests->lastPage()) }}" aria-label="Last">
                <span aria-hidden="true">&raquo;&raquo;</span>
                <span class="sr-only"></span>
              </a>
            </li>

          </ul>
        </nav>
      </div>

      <!-- Page x of y -->
      <div class="d-flex justify-content-center">
        <p>Page {{ $requests->currentPage() }} of {{ $requests->lastPage() }}</p>
      </div>


  </div>
</div>
<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this request?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
      </div>
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

    <!-- Page JS -->
    <script>
      function showConfirmationModal(requestId) {
        var modal = $('#confirmationModal');
        var cancelBtn = modal.find('.btn-secondary');
        var confirmBtn = modal.find('#confirmDeleteBtn');

        cancelBtn.off('click').on('click', function() {
          modal.modal('hide');
        });

        confirmBtn.off('click').on('click', function() {
          deleterequest(requestId);
          modal.modal('hide');
        });

        modal.modal('show');
      }

      function deleterequest(requestId) {
        $.ajax({
          url: '/admin/request/' + requestId + '/delete',
          type: 'GET',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            $('#deleteRow' + requestId).remove();
          },
          error: function() {
            $('#deleteRow' + requestId).remove();
          }
        });
      }
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
