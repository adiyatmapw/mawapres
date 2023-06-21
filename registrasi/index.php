<?php
error_reporting(0);
include '../model/Registrasi.php';
include '../config/auth.php';
include '../config/mahasiswa.php';

$db = new Registrasi();
$registrasi = $db->allRegistrasi($_SESSION['username']);
$Kompetensi = $db->getKompetensi($_SESSION['username']);
$Rekognisi = $db->getRekognisi($_SESSION['username']);
$Penghargaan = $db->getPenghargaan($_SESSION['username']);
$KarirOrganisasi = $db->getKarirOrganisasi($_SESSION['username']);
$HasilKarya = $db->getHasilKarya($_SESSION['username']);
$AksiKemanusiaan = $db->getAksiKemanusiaan($_SESSION['username']);
$Kewirausahaan = $db->getKewirausahaan($_SESSION['username']);
$SuratRekomendasi = $db->getSuratRekomendasi($_SESSION['username']);
$SuratGagasan = $db->getSuratGagasan($_SESSION['username']);
$Cv = $db->getCv($_SESSION['username']);
$Pakta = $db->getPakta($_SESSION['username']);
$Sertifikat = $db->getSertifikat($_SESSION['username']);
?>


    <?php include('../navigation/index.php') ?>
    <div class="container mt-4">
        <div class="row">

            <?php if (isset($_GET['message'])) {
                if ($_GET['message'] == "add-success") {
            ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully added.
                    </div>
                <?php } elseif ($_GET['message'] == "edit-success") { ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully edited.
                    </div>

                <?php } elseif ($_GET['message'] == "delete-success") { ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully deleted.
                    </div>

            <?php }
            } ?>

            <div class="m-3 p-4 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0 font-weight-bold">Informasi Pengajuan</h5>
                                <a href="registrasi.php" class="btn btn-primary">Registrasi Disini</a>
                            </div>
                        </div>
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">Fakultas</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($registrasi as $registrasii) { ?>
                                    <tr>
                                        <th scope="row">#</th>
                                        <td><?= $registrasii['nama'] ?></td>
                                        <td><?= $registrasii['nim'] ?></td>
                                        <td><?= $registrasii['programstudi'] ?></td>
                                        <td><?= $registrasii['fakultas'] ?></td>
                                        <td><?= $registrasii['semester'] ?></td>
                                        <td>Registrasi</td>
                                        <td>
                                            <?php
                                            if ($registrasii['status'] == "ACC") {
                                                echo '<span class="badge text-bg-success">' . $registrasii['status'] . '</span>';
                                            } elseif ($registrasii['status'] == "Pending"){
                                                echo '<span class="badge text-bg-warning">' . $registrasii['status'] . '</span>';
                                            } elseif ($registrasii['status'] == "Silahkan Registrasi"){
                                                echo '<span class="badge text-bg-danger">' . $registrasii['status'] . '</span>';
                                            } else {
                                                echo '<span class="badge text-bg-danger">' . $registrasii['status'] . '</span>';
                                            }
                                            ?></td>
                                            <?php $i++;
                                            } ?>
                                            <tr>
                                                <th scope="row">#</th>
                                                <td><?= $registrasii['nama'] ?></td>
                                                <td><?= $registrasii['nim'] ?></td>
                                                <td><?= $registrasii['programstudi'] ?></td>
                                                <td><?= $registrasii['fakultas'] ?></td>
                                                <td><?= $registrasii['semester'] ?></td>
                                                <td>Dokumen Kompetensi</td>
                                        <?php $i = 1;
                                        foreach ($Kompetensi as $Kompetensii) { ?>
                                                <td>
                                                    <?php
                                                    if ($Kompetensii['status'] == "ACC") {
                                                        echo '<span class="badge text-bg-success">' . $Kompetensii['status'] . '</span>';
                                                    } elseif ($Kompetensii['status'] == "Pending"){
                                                        echo '<span class="badge text-bg-warning">' . $Kompetensii['status'] . '</span>';
                                                    } elseif ($Kompetensii['status'] == "Silahkan Registrasi"){
                                                        echo '<span class="badge text-bg-danger">' . $Kompetensii['status'] . '</span>';
                                                    } else {
                                                        echo '<span class="badge text-bg-danger">' . $Kompetensii['status'] . '</span>';
                                                    }
                                                    ?></td>
                                                    <?php $i++;
                                                    } ?>
                                            </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Rekognisi</td>
                                            <?php $i = 1;
                                            foreach ($Rekognisi as $Rekognisii) { ?>
                                                    <td>
                                                        <?php
                                                        if ($Rekognisii['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $Rekognisii['status'] . '</span>';
                                                        } elseif ($Rekognisii['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $Rekognisii['status'] . '</span>';
                                                        } elseif ($Rekognisii['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $Rekognisii['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">' . $Rekognisii['status'] . '</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Penghargaan</td>
                                            <?php $i = 1;
                                            foreach ($Penghargaan as $Penghargaann) { ?>
                                                    <td>
                                                        <?php
                                                        if ($Penghargaann['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $Penghargaann['status'] . '</span>';
                                                        } elseif ($Penghargaann['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $Penghargaann['status'] . '</span>';
                                                        } elseif ($Penghargaann['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $Penghargaann['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Karir Organisasi</td>
                                            <?php $i = 1;
                                            foreach ($KarirOrganisasi as $KarirOrganisasii) { ?>
                                                    <td>
                                                        <?php
                                                        if ($KarirOrganisasii['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $KarirOrganisasii['status'] . '</span>';
                                                        } elseif ($KarirOrganisasii['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $KarirOrganisasii['status'] . '</span>';
                                                        } elseif ($KarirOrganisasii['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $KarirOrganisasii['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Hasil Karya</td>
                                            <?php $i = 1;
                                            foreach ($HasilKarya as $HasilKaryaa) { ?>
                                                    <td>
                                                        <?php
                                                        if ($HasilKaryaa['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $HasilKaryaa['status'] . '</span>';
                                                        } elseif ($HasilKaryaa['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $HasilKaryaa['status'] . '</span>';
                                                        } elseif ($HasilKaryaa['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $HasilKaryaa['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Aksi Kemanusiaan</td>
                                            <?php $i = 1;
                                            foreach ($AksiKemanusiaan as $AksiKemanusiaann) { ?>
                                                    <td>
                                                        <?php
                                                        if ($AksiKemanusiaann['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $AksiKemanusiaann['status'] . '</span>';
                                                        } elseif ($AksiKemanusiaann['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $AksiKemanusiaann['status'] . '</span>';
                                                        } elseif ($AksiKemanusiaann['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $AksiKemanusiaann['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Kewirausahaan</td>
                                            <?php $i = 1;
                                            foreach ($Kewirausahaan as $Kewirausahaann) { ?>
                                                    <td>
                                                        <?php
                                                        if ($Kewirausahaann['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $Kewirausahaann['status'] . '</span>';
                                                        } elseif ($Kewirausahaann['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $Kewirausahaann['status'] . '</span>';
                                                        } elseif ($Kewirausahaann['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $Kewirausahaann['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Surat Rekomendasi</td>
                                            <?php $i = 1;
                                            foreach ($SuratRekomendasi as $SuratRekomendasii) { ?>
                                                    <td>
                                                        <?php
                                                        if ($SuratRekomendasii['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $SuratRekomendasii['status'] . '</span>';
                                                        } elseif ($SuratRekomendasii['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $SuratRekomendasii['status'] . '</span>';
                                                        } elseif ($SuratRekomendasii['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $SuratRekomendasii['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Surat Gagasan</td>
                                            <?php $i = 1;
                                            foreach ($SuratGagasan as $SuratGagasann) { ?>
                                                    <td>
                                                        <?php
                                                        if ($SuratGagasann['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $SuratGagasann['status'] . '</span>';
                                                        } elseif ($SuratGagasann['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $SuratGagasann['status'] . '</span>';
                                                        } elseif ($SuratGagasann['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $SuratGagasann['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Curriculum vitae</td>
                                            <?php $i = 1;
                                            foreach ($Cv as $Cvv) { ?>
                                                    <td>
                                                        <?php
                                                        if ($Cvv['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $Cvv['status'] . '</span>';
                                                        } elseif ($Cvv['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $Cvv['status'] . '</span>';
                                                        } elseif ($Cvv['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $Cvv['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Pakta Integritas</td>
                                            <?php $i = 1;
                                            foreach ($Pakta as $Paktaa) { ?>
                                                    <td>
                                                        <?php
                                                        if ($Paktaa['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $Paktaa['status'] . '</span>';
                                                        } elseif ($Paktaa['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $Paktaa['status'] . '</span>';
                                                        } elseif ($Paktaa['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $Paktaa['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <td><?= $registrasii['nama'] ?></td>
                                                    <td><?= $registrasii['nim'] ?></td>
                                                    <td><?= $registrasii['fakultas'] ?></td>
                                                    <td><?= $registrasii['programstudi'] ?></td>
                                                    <td><?= $registrasii['semester'] ?></td>
                                                    <td>Dokumen Sertifikat</td>
                                            <?php $i = 1;
                                            foreach ($Sertifikat as $Sertifikatt) { ?>
                                                    <td>
                                                        <?php
                                                        if ($Sertifikatt['status'] == "ACC") {
                                                            echo '<span class="badge text-bg-success">' . $Sertifikatt['status'] . '</span>';
                                                        } elseif ($Sertifikatt['status'] == "Pending"){
                                                            echo '<span class="badge text-bg-warning">' . $Sertifikatt['status'] . '</span>';
                                                        } elseif ($Sertifikatt['status'] == "Silahkan Registrasi"){
                                                            echo '<span class="badge text-bg-danger">' . $Sertifikatt['status'] . '</span>';
                                                        } else {
                                                            echo '<span class="badge text-bg-danger">Silahkan Ajukan</span>';
                                                        }
                                                        ?></td>
                                                        <?php $i++;
                                                        } ?>
                                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #692c2c" class="mt-3 p-3 bg-green text-white text-center">
        <p>Powered by Ensyse Laboratory 2023</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- Page level plugins -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../script.js"></script>
</body>

</html>