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
                        <h5 class="text-center">Upload Dokumen Mahasiswa</h5>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Kompetensi</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#kompetensiModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Rekognisi</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#rekognisiModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Penghargaan</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#penghargaanModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Karir Organisasi</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#organisasiModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Hasil Karya</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#karyaModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Aksi Kemanusiaan</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#aksikemanusiaanModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-label">Kewirausahaan</div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#kewirausahaanModal">Edit Pengajuan</button>
                                    </div>
                                </div>
                            </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Popup Kompetensi -->
        <div class="modal fade" id="kompetensiModal" tabindex="-1" aria-labelledby="kompetensiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../kompetensi/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="kompetensiModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="kompetensiModalLabel">Dokumen maximal 2MB</h1>
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
        
        <!-- Popup Rekognisi -->
        <div class="modal fade" id="rekognisiModal" tabindex="-1" aria-labelledby="rekognisiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../rekognisi/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="rekognisiModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="rekognisiModalLabel">Dokumen maximal 2MB</h1>
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
        
        <!-- Popup Penghargaan -->
        <div class="modal fade" id="penghargaanModal" tabindex="-1" aria-labelledby="penghargaanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../penghargaan/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="penghargaanModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="penghargaanModalLabel">Dokumen maximal 2MB</h1>
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
        
        <!-- Popup Karir Organisasi -->
        <div class="modal fade" id="organisasiModal" tabindex="-1" aria-labelledby="organisasiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../karir/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="organisasiModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="organisasiModalLabel">Dokumen maximal 2MB</h1>
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
        
        <!-- Popup Hasil Karya -->
        <div class="modal fade" id="karyaModal" tabindex="-1" aria-labelledby="karyaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../hasilkarya/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="karyaModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="karyaModalLabel">Dokumen maximal 2MB</h1>
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
        
        <!-- Popup Aksi Kemanusiaan -->
        <div class="modal fade" id="aksikemanusiaanModal" tabindex="-1" aria-labelledby="aksikemanusiaanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../aksikemanusiaan/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="aksikemanusiaanModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="aksikemanusiaanModalLabel">Dokumen maximal 2MB</h1>
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
        
        <!-- Popup Kewirausahaan -->
        <div class="modal fade" id="kewirausahaanModal" tabindex="-1" aria-labelledby="kewirausahaanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="POST" action="../kewirausahaan/proses.php?action=upload" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-body">
                <h1 class="fs-5 text-center" id="kewirausahaanModalLabel">Silahkan Unggah Evidence</h1>
                <p class="text-center">(Sertifikat/Foto Kegiatan/Foto Piala/Bukti Pendukung Lainnya)</p>
                <h1 class="fs-5 text-center" id="kewirausahaanModalLabel">Dokumen maximal 2MB</h1>
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
        <p>&copy Powered by Ensyse Lab 2023 </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>