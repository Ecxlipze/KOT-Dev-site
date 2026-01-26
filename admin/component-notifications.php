<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css" />
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
   <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Components</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Notifications</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Settings</button>
                  <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->


            <div class="row">
              <div class="col col-lg-10 mx-auto">

                <h6 class="mb-0 text-uppercase">Default Notifications</h6>
                <hr>
                <div class="card">
                  <div class="card-body">
                    <div class="row row-cols-auto g-3">
                      <div class="col">
                        <button type="button" class="btn btn-dark px-5" onclick="default_noti()">Default</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-info px-5" onclick="info_noti()"><i class="bx bx-info-circle mr-1"></i> Info</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-warning px-5" onclick="warning_noti()"><i class="bx bx-error mr-1"></i> Warning</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-danger px-5" onclick="error_noti()"><i class="bx bx-x-circle mr-1"></i> Danger</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-success px-5" onclick="success_noti()"><i class="bx bx-check-circle mr-1"></i> Success</button>
                      </div>
                    </div>
                    <!--end row-->
                  </div>
                </div>


                <h6 class="mb-0 text-uppercase">Default Notifications</h6>
                <hr>
                <div class="card">
                  <div class="card-body">
                    <div class="row row-cols-auto g-3">
                      <div class="col">
                        <button type="button" class="btn btn-dark px-5" onclick="round_default_noti()">Default</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-info px-5" onclick="round_info_noti()"><i class="bx bx-info-circle mr-1"></i>Info</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-warning px-5" onclick="round_warning_noti()"><i class="bx bx-error mr-1"></i>Warning</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-danger px-5" onclick="round_error_noti()"><i class="bx bx-x-circle mr-1"></i> Danger</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-success px-5" onclick="round_success_noti()"><i class="bx bx-check-circle mr-1"></i>Success</button>
                      </div>
                    </div>
                    <!--end row-->
                  </div>
                </div>
                 
                <h6 class="mb-0 text-uppercase">Rounded Corners Notifications</h6>
                <hr>
                <div class="card">
                  <div class="card-body">
                    <div class="row row-cols-auto g-3">
                      <div class="col">
                        <button type="button" class="btn btn-dark px-5" onclick="img_default_noti()">Default</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-info px-5" onclick="img_info_noti()"><i class="bx bx-info-circle"></i>Info</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-warning px-5" onclick="img_warning_noti()"><i class="bx bx-error"></i>Warning</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-danger px-5" onclick="img_error_noti()"><i class="bx bx-x-circle"></i> Danger</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-success px-5" onclick="img_success_noti()"><i class="bx bx-check-circle"></i>Success</button>
                      </div>
                    </div>
                    <!--end row-->
                  </div>
                </div>


                <h6 class="mb-0 text-uppercase">Notifications With image</h6>
                <hr>
                <div class="card">
                  <div class="card-body">
                    <div class="row row-cols-auto g-3">
                      <div class="col">
                        <button type="button" class="btn btn-dark px-5" onclick="img_default_noti()">Default</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-info px-5" onclick="img_info_noti()"><i class="bx bx-info-circle"></i>Info</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-warning px-5" onclick="img_warning_noti()"><i class="bx bx-error"></i>Warning</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-danger px-5" onclick="img_error_noti()"><i class="bx bx-x-circle"></i> Danger</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-success px-5" onclick="img_success_noti()"><i class="bx bx-check-circle"></i>Success</button>
                      </div>
                    </div>
                    <!--end row-->
                  </div>
                </div>

                <h6 class="mb-0 text-uppercase">Alternative Position</h6>
                <hr>
                <div class="card">
                  <div class="card-body">
                    <div class="row row-cols-auto g-3">
                      <div class="col">
                        <button type="button" class="btn btn-dark px-5" onclick="pos1_default_noti()">Default</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-info px-5" onclick="pos2_info_noti()"><i class="bx bx-info-circle mr-1"></i>Info</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-warning px-5" onclick="pos3_warning_noti()"><i class="bx bx-error"></i>Warning</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-danger px-5" onclick="pos4_error_noti()"><i class="bx bx-x-circle"></i> Danger</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-success px-5" onclick="pos5_success_noti()"><i class="bx bx-check-circle"></i>Success</button>
                      </div>
                    </div>
                    <!--end row-->
                  </div>
                </div>




              </div>
            </div><!--end row-->
          </main>
       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
        <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <!--notification js -->
	<script src="assets/plugins/notifications/js/lobibox.min.js"></script>
	<script src="assets/plugins/notifications/js/notifications.min.js"></script>
	<script src="assets/plugins/notifications/js/notification-custom-script.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <!--app-->
  <script src="assets/js/app.js"></script>
  

</body>

</html>