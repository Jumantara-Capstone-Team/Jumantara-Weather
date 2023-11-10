<!DOCTYPE html>
<html lang="en">

@include('components/admin/head/head')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('components/admin/sidebar/sidebar')


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('components/admin/topbar/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat datang di dalam Dashboard Admin
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">


                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Dashboard Admin</h6>
                            </div>
                            <div class="card-body">
                                <p>Selamat datang di admin dashboard Jumantara. Kami sangat senang dan berterima
                                    kasih atas kunjungan Anda yang berharga. Admin dashboard ini adalah jantung dari
                                    operasi kami, tempat di mana Anda akan mengendalikan dan mengelola berbagai aspek
                                    yang memungkinkan Website kami berfungsi dengan lebih efisien dan efektif. </p>
                                <p class="mb-0">Dari pelacakan data hingga analisis yang mendalam, semua alat yang
                                    Anda butuhkan ada di sini. Kami berkomitmen untuk terus meningkatkan pengalaman Anda
                                    di platform ini, sehingga Anda dapat dengan mudah mencapai tujuan Anda. Jangan ragu
                                    untuk mengeksplorasi, bertanya, dan memberikan masukan. Kami berharap Anda merasa
                                    nyaman dan siap untuk memulai perjalanan produktif di admin dashboard kami.</p>
                            </div>
                        </div>



                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Jumantara &copy; Website 2024</span>
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
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="collapse-item custom-button" class="btn btn-primary"
                                    type="submit">Logout</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap {core JavaScript-->
            <script src="{{ asset('vendor/vendor/fontawesome-free/css/all.min.css') }}"></script>
            <script src="{{ asset('vendor/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('vendor/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- Core plugin JavaScript-->
            <script src="{{ asset('vendor/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
            <!-- Custom scripts for all pages-->
            <script src="{{ asset('js/admin/sb-admin-2.min.js') }}"></script>

            <!-- Page level plugins -->
            <script src="{{ asset('vendor/vendor/chart.js/Chart.min.js') }}"></script>

            <!-- Page level custom scripts -->
            <script src="{{ asset('js/admin/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('js/admin/demo/chart-pie-demo.js') }}"></script>


</body>

</html>
