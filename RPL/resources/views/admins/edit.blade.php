<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('template_admin')

    <!-- Main -->
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Tambah Admin</h5>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="alert-title">
                        <h4>Whoops!</h4>
                    </div>
                    There are some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                <div class="alert alert-success">{{ session('error') }}</div>
                @endif

                <!-- Vertical Form -->
                <form class="row g-3" action="{{ route('admins.update', $admin->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="col-12">
                        <label for="ID" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ old('id', $admin->id) }}" readonly>
                    </div>

                    <div class="col-12">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama"
                            value="{{ old('Nama', $admin->Nama) }}">
                    </div>

                    <div class="col-12">
                        <label for="Jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="Jabatan" name="Jabatan"
                            value="{{ old('Jabatan', $admin->Jabatan) }}">
                    </div>

                    <div class="col-12">
                        <label for="Nohp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="Nohp" name="Nohp"
                            value="{{ old('Nohp', $admin->Nohp) }}">
                    </div>

                    <div class="col-12">
                        <label for="Kelamin" class="form-label">Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Kelamin" id="laki" value="Laki-laki" {{
                                old('Kelamin', $admin->Kelamin) === 'Laki-laki' ? 'checked' : '' }}>
                            <label class="form-check-label" for="laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Kelamin" id="perempuan" value="Perempuan"
                                {{ old('Kelamin', $admin->Kelamin) === 'Perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="Username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="Username" name="Username"
                            value="{{ old('Username', $admin->Username) }}">
                    </div>

                    <div class="col-12">
                        <label for="Password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="Password" name="Password"
                                value="{{ old('Password', $admin->Password) }}">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="hidden" class="form-control" id="Status" value="1" name="Status">
                    </div>

                    <div class="col-12">
                        <div class="text-end d-flex justify-content-between">
                            <a href="{{ route('admins.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>


                </form><!-- Vertical Form -->
            </div>
    </main>
    <!-- End - Main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Lihat password
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('Password');
            const fieldType = passwordField.getAttribute('type');

            if (fieldType === 'password') {
                passwordField.setAttribute('type', 'text');
            } else {
                passwordField.setAttribute('type', 'password');
            }
        });
    </script>

</body>

</html>