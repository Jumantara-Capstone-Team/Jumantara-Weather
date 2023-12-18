<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Table Air Quality | Jumantara</title>

    <link rel="apple-touch-icon" sizes="180x180" href="  {{ asset('/img/main/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="  {{ asset('/img/main/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="  {{ asset('/img/main/logo.png') }}" />


    <link href="{{ asset('vendor/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,
        300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.tutorialjinni.com/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.tutorialjinni.com/startbootstrap-sb-admin-2/4.1.4/css/sb-admin-2.min.css" />

</head>


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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">Data Table Post News</h6>
                        </div>

                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <a href="/dashboard/quality/create" class="btn btn-primary mb-3">Create New Post</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Country</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($quality->sortByDesc('updated_at') as $pageairquality)
                                            <tr>
                                                <td>{{ $pageairquality->author }}</td>
                                                <td>{{ $pageairquality->title }}</td>
                                                <td>{{ $pageairquality->selected_country }}
                                                <td>
                                                    @if ($pageairquality->created_at)
                                                        <time
                                                            datetime="{{ $pageairquality->created_at->format('d F Y') }}">{{ $pageairquality->created_at->format('d F Y') }}</time>
                                                    @else
                                                        <span>Published date not available</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="badge bg-info"
                                                        href="/dashboard/quality/{{ $pageairquality->slug }}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span></span>
                                                    </a>
                                                    <a class="badge bg-warning"
                                                        href="/dashboard/quality/{{ $pageairquality->slug }}/edit">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                        <span></span>
                                                    </a>
                                                    <form action="/dashboard/quality/{{ $pageairquality->slug }}"
                                                        method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0"
                                                            onclick="return confirm('Are you sure?')">
                                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
                        <span>Copyright &copy; Jumantara 2023</span>
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

    @include('components/admin/all/all')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.min.js"
        integrity="sha512-+QnjQxxaOpoJ+AAeNgvVatHiUWEDbvHja9l46BHhmzvP0blLTXC4LsvwDVeNhGgqqGQYBQLFhdKFyjzPX6HGmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.4/js/sb-admin-2.js"
        integrity="sha512-M82XdXhPLLSki+Ld1MsafNzOgHQB3txZr8+SQlGXSwn6veeqtYhPLbQeAfk9Y/Q9/gXcfa1jWT4YYUeoei6Uow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('components/admin/all/js/js')
    @include('components/admin/all/js/min')

</body>

</html>
