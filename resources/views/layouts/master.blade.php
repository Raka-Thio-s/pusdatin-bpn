<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSDATIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            padding-top: 20px; /* Tambahkan sedikit ruang antara navbar dan konten */
        }

        .navbar-brand img {
            width: 40px; /* Set lebar agar logo proposional */
            height: 40px; /* Set tinggi agar logo proposional */
            margin-right: 10px;
            object-fit: cover; /* Pastikan logo tidak terdistorsi dan menutupi wadah */
        }

        .navbar {
            padding: 10px; /* Sesuaikan padding untuk tampilan yang lebih bersih */
            background-color: #4C7673; /* Warna latar belakang navbar yang diperbarui */
            margin-bottom: 20px; /* Tambahkan margin 20px di bagian bawah navbar */
        }

        /* Gaya untuk sidebar */
        #sidebar {
            min-height: 100vh;
            border-right: 1px solid #dee2e6;
            background-color: #629F9A; /* Warna latar belakang sidebar yang diperbarui */
            margin-top: -56px; /* Hapus ruang antara sidebar dan navbar */
        }

        #sidebar ul.nav.flex-column {
            margin-top: 30px;
        }

        #sidebar .nav-item {
            padding: 10px;
            text-align: center;
        }

        #sidebar .nav-item a {
            font-size: 16px; /* Ukuran font sedikit lebih kecil agar mudah dibaca */
            font-weight: bold;
            color: #333;
        }

        #sidebar .nav-item a:hover {
            background-color: #d1d5db;
            color: #000;
        }

        /* Gaya tambahan untuk membuat sidebar terlihat lebih baik pada layar yang lebih kecil */
        @media (max-width: 991.98px) {
            #sidebar {
                margin-top: 0; /* Hapus ruang antara sidebar dan navbar */
                position: fixed;
                top: 0;
                left: -250px;
                transition: all 0.3s;
                z-index: 1040; /* Pastikan sidebar muncul di atas navbar */
            }

            #sidebar.show {
                left: 0;
            }

            #sidebar .navbar-brand {
                display: block;
                text-align: center;
                padding: 10px;
                border-bottom: 1px solid #dee2e6;
            }

            #sidebar .navbar-brand img {
                margin-right: 0;
            }

            #sidebar ul.nav.flex-column {
                margin-top: 0;
            }

            /* Sesuaikan konten utama untuk menyesuaikan sidebar tetap */
            main {
                margin-left: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://i.ibb.co/XzZ3QqN/logo-pusdatin-bpn.png" alt="Erteestlogo3" width="40" height="40" border="0">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/divisi">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Divisi</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/divisi/1/detail">Divisi IT</a></li>
                            <li><a class="dropdown-item" href="/divisi/2/detail">Divisi Gedung</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/divisi">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Analytics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Konten utama akan diisi di sini -->
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
