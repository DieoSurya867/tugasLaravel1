@extends('layout.dashboard')


@section('title')
   Without menu - Layouts | Sneat - Bootstrap 5 HTML Admin Template - Pro
       
@endsection

@section('content')
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                  <img
                    src={{ asset ("sneat/assets/img/layouts/layout-without-menu-light.png")}}
                    class="img-fluid"
                    alt="Layout without menu"
                    data-app-light-img="layouts/layout-without-menu-light.png"
                    data-app-dark-img="layouts/layout-without-menu-dark.png"
                  />
                </div>
                <div class="layout-demo-info">
                  <h4>Layout without Menu (Navigation)</h4>
                  <button class="btn btn-primary" type="button" onclick="history.back()">Go Back</button>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>

          <!-- Vendors JS -->
    <script src={{ asset ("sneat/assets/vendor/js/menu.js")}}></script>
@endsection