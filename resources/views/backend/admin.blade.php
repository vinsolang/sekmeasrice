<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('site-title')</title>
  <meta name="description" content="" />
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/logo/logo_rice.png') }}" />
  <!-- Fonts -->
  <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
  <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
  <link
    href="{{url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')}}"
    rel="stylesheet" />
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{asset('vendor/fonts/boxicons.css')}}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/css/pages/page-account-settings.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/css/pages/page-auth.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/css/pages/page-icons.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/css/pages/page-misc.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/highlight/highlight-github.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/highlight/highlight.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/apex-charts/apex-charts.css') }}" />

  {{-- Tailwind css --}}
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- Tailwind CSS --}}
  @vite('resources/css/app.css')

  {{-- Select2 --}}
  <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}">

  {{-- Jquery --}}
  <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js')}}"></script>

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

  {{--
  <script src="{{ asset('js/') }}"></script> --}}
  <script src="{{ asset('js/config.js') }}"></script>

</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo mt-4 mb-3 flex flex-col items-center relative">
          <a href="{{ route('home') }}" class="app-brand-link flex flex-col items-center text-center">
            <img src="{{ asset('frontend/assets/logo/logo_rice.png') }}" alt="Sek Meas Rice Logo"
              class="w-[80px] h-[60px] mb-2" />
            <span class="text-lg font-bold text-[#1E3E0F]">Sek Meas Rice</span>
          </a>

          <!-- Toggle button -->
          <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large d-block d-xl-none absolute right-4 top-4 z-20">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>
        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1 mt-2">
          <!-- Partner Logo -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-package"></i>
              <div data-i18n="Layouts">Local Sales</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{ route('local.sales.view') }}" class="menu-link">
                  <div data-i18n="Without menu">View product</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="{{ route('local.sales') }}" class="menu-link">
                  <div data-i18n="Without menu">Add product</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Award Wining -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-medal"></i>
              <div data-i18n="Layouts">Winning</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.award') }}" class="menu-link">
                  <div>View Award</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.award') }}" class="menu-link">
                  <div>Add Award</div>
                </a></li>
            </ul>
          </li>

          <!-- Certificate -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-certification"></i>
              <div data-i18n="Layouts">Credibility</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.credibility') }}" class="menu-link">
                  <div>View Certificate</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.credibility') }}" class="menu-link">
                  <div>Add Certificate</div>
                </a></li>
            </ul>
          </li>

          <!-- Products -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-export"></i>
              <div data-i18n="Layouts">For Export</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.export') }}" class="menu-link">
                  <div>View Product</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.export') }}" class="menu-link">
                  <div>Add Product</div>
                </a></li>
            </ul>
          </li>

          <!-- Business Registeration -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-building text-2xl"></i>
              <div data-i18n="Layouts">Business</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.Business') }}" class="menu-link">
                  <div>View Certificate</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.Business') }}" class="menu-link">
                  <div>Add Certificate</div>
                </a></li>
            </ul>
          </li>

          <!-- Approved Certificate -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-certification"></i>
              <div data-i18n="Layouts">Approved Certificate</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.approved') }}" class="menu-link">
                  <div>View Certificate</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.approved') }}" class="menu-link">
                  <div>Add Certificate</div>
                </a></li>
            </ul>
          </li>

          <!-- Activity Of Media -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-photo-album text-xl"></i>
              <div data-i18n="Layouts">Media</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.media') }}" class="menu-link">
                  <div>View Media</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.media') }}" class="menu-link">
                  <div>Add Media</div>
                </a></li>
            </ul>
          </li>

          <!-- News Blog -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-news text-xl"></i>
              <div data-i18n="Layouts">News Blog</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.news') }}" class="menu-link">
                  <div>View News</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.news') }}" class="menu-link">
                  <div>Add News</div>
                </a></li>
            </ul>
          </li>
          <!-- Profile -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user-pin text-xl"></i>
              <div data-i18n="Layouts">Admin Profile</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('profile') }}" class="menu-link">
                  <div>View Profile</div>
                </a></li>
            </ul>
          </li>
          <!-- Comment -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-news text-xl"></i>
              <div data-i18n="Layouts">Comment</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.comment') }}" class="menu-link">
                  <div>View Comment</div>
                </a></li>
              <li class="menu-item"><a href="{{ route('add.comment') }}" class="menu-link">
                  <div>Add Comment</div>
                </a></li>
            </ul>
          </li>
          <!-- User -->
          {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user text-xl"></i>
              <div data-i18n="Layouts">Users</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item"><a href="{{ route('view.user') }}" class="menu-link">
                  <div>View Users</div>
                </a></li>
            </ul>
          </li> --}}
        </ul>
      </aside>

      <!-- / Menu -->
      {{-- <ul class="menu-inner py-1 d-none" id="sidebarMenu">
        <!-- Dashboard -->
        <li class="menu-item">
          <a href="/admin" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
          </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-merge text-xl"></i>
            <div data-i18n="Layouts">Partner Logo</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('view_logo') }}" class="menu-link">
                <div data-i18n="Without menu">View Logo</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('logo') }}" class="menu-link">
                <div data-i18n="Without menu">Add Logo</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-image-add"></i>
            <div data-i18n="Layouts">Strategic</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('view_strategic') }}" class="menu-link">
                <div data-i18n="Without menu">View Strategic</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('strategic') }}" class="menu-link">
                <div data-i18n="Without menu">Add Strategic</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-certification"></i>
            <div data-i18n="Layouts">Certificate</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('view.certi') }}" class="menu-link">
                <div data-i18n="Without menu">View Certificate</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('add.certi') }}" class="menu-link">
                <div data-i18n="Without menu">Add Certificate</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-package"></i>
            <div data-i18n="Layouts">Products</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('view_product') }}" class="menu-link">
                <div data-i18n="Without menu">View Product</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('addpro') }}" class="menu-link">
                <div data-i18n="Without menu">Add Product</div>
              </a>
            </li>
          </ul>
        </li>


        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-group text-2xl"></i>
            <div data-i18n="Layouts">Our Team</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('view_team') }}" class="menu-link">
                <div data-i18n="Without menu">View Team</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('add_team') }}" class="menu-link">
                <div data-i18n="Without menu">Add Team</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-news text-xl"></i>
            <div data-i18n="Layouts">News Blog</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="/admin/list-category" class="menu-link">
                <div data-i18n="Without menu">View Post</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin/add-news" class="menu-link">
                <div data-i18n="Without menu">Add Post</div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-bolt-circle"></i>
            <div data-i18n="Layouts">Log Activity</div>
          </a>

          <ul class="menu-sub">
            <li class="menu-item">
              <a href="/admin/log-activity" class="menu-link">
                <div data-i18n="Without menu">View Post</div>
              </a>
            </li>
          </ul>
        </li>

      </ul> --}}

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <!-- Toggle Button -->
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)" id="menuToggle">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <h4 class="page-main-title m-0 fw-bold">
                @yield('page-main-title')
              </h4>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- admin -->
              @php
                // $admin = Auth::user(); // current logged-in admin
                 $admin = Auth::guard('web')->user();
              @endphp
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="{{ asset('assets/profile/' . $admin->profile) }}" alt
                      class="w-[200px] h-[200px] rounded-full" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="{{ route('profile') }}">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="{{ asset('assets/profile/' . $admin->profile) }}" alt
                              class="w-[100px] h-[100px] rounded-full" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"></span>
                          <small class="text-muted">{{ $admin->username }}</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        @yield('content')
        

      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="{{asset('vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>

  <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

  <script src="{{ asset('vendor/js/menu.js') }}"></script>
  <script src="{{ asset('vendor/js/helpers.js') }}"></script>
  <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('vendor/libs/masonry/masonry.js') }}"></script>
  <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('vendor/libs/highlight/highlight.js') }}"></script>
  <script src="{{ asset('vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <!-- endbuild -->


  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/theme.js') }}"></script>

  {{-- select2 --}}
  <script src="{{url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script>

  <!-- Page JS -->
  <script src="{{asset('js/form-basic-inputs.js')}}"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="{{url('https://buttons.github.io/buttons.js')}}"></script>
  {{-- CK Editor --}}
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

  <script src="{{ asset('js/dashboards-analytics.js') }}"></script>
  <script src="{{ asset('js/extended-ui-perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('js/form-basic-inputs.js') }}"></script>
  <script src="{{ asset('js/pages-account-settings-account.js') }}"></script>
  <script src="{{ asset('js/ui-modals.js') }}"></script>
  <script src="{{ asset('js/ui-popover.js') }}"></script>
  <script src="{{ asset('js/ui-toasts.js') }}"></script>
  {{--​ Script js Preview image --}}
  <script src="{{ asset('js/preview.js') }}"></script>
</body>

</html>