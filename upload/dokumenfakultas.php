<?php
include '../config/auth.php';
include '../config/mahasiswa.php';
include('../navigation/index.php');
?>

<body>
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

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">Upload Dokumen Fakultas</h5>
                        <form action="production-rate-result.php" method="POST">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div id="emailHelp" class="form-label">Surat Rekomendasi</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Popup Surat Rekomendasi -->
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../rekomendasi/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="ModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="ModalLabel">Dokumen maximal 2MB</h1>
                <input type="file" class="form-control" name="file" accept=".jpeg, .png, .pdf">
                <p class="text-center">Ekstensi yang diterima hanya .jpeg .png .pdf</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            </form>
        </div>
        </div>
        <!-- -->
    </div>
    <div class="mt-4 p-3 bg-green text-white text-center">
        <p>&copy 2023 RYP x Ensyse Laboratory</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>