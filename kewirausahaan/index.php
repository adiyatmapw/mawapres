<?php
include '../model/Kewirausahaan.php';
include '../config/auth.php';
include '../config/mahasiswa.php';

$db = new Kewirausahaan();
$Kewirausahaan = $db->allKewirausahaan();
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
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Data Kewirausahaan Mahasiswa</h5>
                            </div>
                        </div>
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Dokumen</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($Kewirausahaan as $Kewirausahaan) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $Kewirausahaan['nama'] ?></td>
                                        <td><?= $Kewirausahaan['nim'] ?></td>
                                        <td><a href="<?= $Kewirausahaan['dokumen'] ?>">Lihat Dokumen</a></td>
                                        <td><?= $Kewirausahaan['programstudi'] ?></td>
                                        <td>
                                            <?php
                                            if ($Kewirausahaan['status'] == "ACC") {
                                                echo '<span class="badge text-bg-success">' . $Kewirausahaan['status'] . '</span>';
                                            } elseif ($Kewirausahaan['status'] == "Pending"){
                                                echo '<span class="badge text-bg-warning">' . $Kewirausahaan['status'] . '</span>';
                                            } elseif ($Kewirausahaan['status'] == "Silahkan Registrasi"){
                                                echo '<span class="badge text-bg-danger">' . $Kewirausahaan['status'] . '</span>';
                                            }
                                            ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $Kewirausahaan['id'] ?>" class="btn btn-warning">Respons</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
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