<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Status</title>
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<div style="background-color: maroon;" class="container-fluid p-5 text-white text-center">
  <div class="row">
    <div class="col-lg-6">
      <div class="logo-container">
        <img class="logo" style="width: 25%;height:auto;margin-left: 210px;" src="../images/logotelu.png">
      </div>
    </div>
    <div class="col-lg-6 d-flex align-items-center">
      <div class="text-container">
        <h1>MAWAPRES</h1>
        <h5>Website Seleksi Mahasiswa Berprestasi</h5>
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C5C8CC;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../home">Informasi Mawapres</a>
                    </li>
                    <li class="nav-item dropdown" id="myDropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Data Mahasiswa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dokumen Mahasiswa &raquo;</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="../kompetensi">Kompetensi</a></li>
                                    <li><a class="dropdown-item" href="../rekognisi">Rekognisi</a></li>
                                    <li><a class="dropdown-item" href="../penghargaan">Penghargaan</a></li>
                                    <li><a class="dropdown-item" href="../karir">Karir Organisasi</a></li>
                                    <li><a class="dropdown-item" href="../hasilkarya">Hasil Karya</a></li>
                                    <li><a class="dropdown-item" href="../aksikemanusiaan">Aksi Kemanusiaan</a></li>
                                    <li><a class="dropdown-item" href="../kewirausahaan">Kewirausahaan</a></li>
                                </ul>
                            </li>
                            
                            <li><a class="dropdown-item" href="#">Dokumen Lain Mahasiswa &raquo;</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="../suratgagasan">Surat Gagasan Kreatif / Produk Inovatif</a></li>
                                    <li><a class="dropdown-item" href="../sertifikat">Sertifikat TOEFL / EPRT / IELTS / TOEIC</a></li>
                                    <li><a class="dropdown-item" href="../cv">Curriculum Vitae</a></li>
                                    <li><a class="dropdown-item" href="../pakta">Pakta Integritas</a></li>
    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown" id="myDropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Data Fakultas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../rekomendasi">Surat Rekomendasi Fakultas</a>
                        </ul>
                    </li>
                </ul>
                <?php if ($_SESSION['status'] == "login") { ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="../auth/process.php?action=logout" class="btn btn-outline-success">Logout</a>
                        </li>
                    </ul>
                <?php } else { ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="../auth/index.php" class="btn btn-outline-success">Login</a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </nav>
