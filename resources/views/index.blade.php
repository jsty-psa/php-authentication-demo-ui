<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Authentication Demo Application</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/index.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            Authentication Demo Application Eyyyy!!
                        </div>
                    </div>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">ID Authentication Demo Application</h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Authentication Type</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-type-fp">
                                        <label class="form-check-label" for="auth-type-fp">
                                          Fingerprint
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-type-iris">
                                        <label class="form-check-label" for="auth-type-iris">
                                          Iris
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-type-face">
                                        <label class="form-check-label" for="auth-type-face">
                                          Face
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-type-otp">
                                        <label class="form-check-label" for="auth-type-otp">
                                          OTP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-type-demo">
                                        <label class="form-check-label" for="auth-type-demo">
                                          Demographic
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-type-ekyc">
                                        <label class="form-check-label" for="auth-type-ekyc">
                                          eKYC
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-lg-6">

                            <!-- Brand Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">PhilSys ID Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="individual-id" class="form-label">Individual ID</label>
                                        <input type="text" class="form-control" id="individual-id" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="individual-id-type" class="form-label">Individual ID Type</label>
                                        <select class="form-control" id="individual-id-type">
                                            <option selected>--- Select One ---</option>
                                            <option value="PCN">PCN</option>
                                            <option value="AlyasPSN">Alyas PSN</option>
                                            <option value="UIN">UIN</option>
                                            <option value="VID">VID</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="card shadow mb-4" id="biometric-authentication-form">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Biometric Authentication</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="fingers-count" class="form-label">Fingers Count</label>
                                        <select class="form-control" id="fingers-count">
                                            <option selected>--- Select One ---</option>
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="iris-type" class="form-label">Iris Type</label>
                                        <select class="form-control" id="iris-type">
                                            <option selected>--- Select One ---</option>
                                            <option value="left">Left Iris</option>
                                            <option value="right">Right Iris</option>
                                            <option value="both">Both Iris</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" id="biometric-capture">Capture</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="card shadow mb-4" id="otp-authentication-form">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">OTP Authentication</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <p><button class="btn btn-primary" id="otp-request">Request OTP</button></p>
                                        <label for="otp-value" class="form-label">Enter OTP</label>
                                        <input type="text" class="form-control" id="otp-value" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">


                            <div class="card shadow mb-4" id="demographic-authentication-form">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Demographic Authentication</h6>
                                </div>
                                <div class="card-body">
                                    <label for="demographic-value" class="form-label">Identity Data</label>
                                    <textarea class="form-control" id="demographic-value" aria-describedby="emailHelp"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 mb-4">
                            <button class="btn btn-success" id="send-auth-request">Send Request</button>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; DCRPID Authentication Demo Application 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
