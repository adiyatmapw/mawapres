<?php
include '../config/auth.php';
include '../config/mahasiswa.php';
include('../navigation/index.php');
?>

<body>
    <div class="container mt-4">
        <div class="row">

            <?php if (isset($_GET['message'])) {
                if ($_GET['message'] == "success") {
            ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully changed.
                    </div>
            <?php }
            } ?>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="process.php?action=add" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control">
                                <label for="exampleInputEmail1" class="form-label">NIM</label>
                                <input type="number" name="nim" class="form-control">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div id="emailHelp" class="form-label">Program Studi</div>
                                        <input type="text" name="programstudi" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <div id="emailHelp" class="form-label">Fakultas</div>
                                        <input type="text" name="fakultas" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Semester</label>
                                <input type="text" name="semester" class="form-control">
                                <label for="exampleInputEmail1" class="form-label">No HP. yang dapat dihubungi</label>
                                <input type="number" name="nohp" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-danger">Registrasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 p-3 bg-green text-white text-center">
        <p>&copy 2023 RYP x Ensyse Laboratory</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>