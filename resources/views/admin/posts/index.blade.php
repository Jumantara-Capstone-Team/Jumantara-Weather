<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Table News | Jumantara</title>

    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/icon.png') }}" rel="apple-touch-icon">


    <link href="{{ asset('vendor/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,
        300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">

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
                            <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts->sortByDesc('updated_at') as $post)
                                            <tr>
                                                <td>{{ $post->author }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>
                                                    @if ($post->created_at)
                                                        <time
                                                            datetime="{{ $post->created_at->format('d F Y') }}">{{ $post->created_at->format('d F Y') }}</time>
                                                    @else
                                                        <span>Published date not available</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="badge bg-info"
                                                        href="/dashboard/posts/{{ $post->slug }}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        <span></span>
                                                    </a>
                                                    <a class="badge bg-warning"
                                                        href="/dashboard/posts/{{ $post->slug }}/edit">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                        <span></span>
                                                    </a>
                                                    <form action="/dashboard/posts/{{ $post->slug }}" method="post"
                                                        class="d-inline">
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

</body>

</html>
