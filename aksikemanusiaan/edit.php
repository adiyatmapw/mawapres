<?php
include '../model/AksiKemanusiaan.php';
include '../config/auth.php';
include '../config/mahasiswa.php';

$db = new AksiKemanusiaan();
$AksiKemanusiaan = $db->getAksiKemanusiaan($_GET['id']);
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
                        <h5 class="card-title">Respon Hasil Karya</h5>
                        <form action="proses.php?action=edit" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <input type="hidden" name="id" class="form-control" value="<?= $AksiKemanusiaan['id'] ?>">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected><?= $AksiKemanusiaan['status'] ?></option>
                                    <?php
                                    if($AksiKemanusiaan['status'] == "Pending"){
                                        echo'
                                        <option name="status" value="ACC">ACC</option>
                                        <option name="status" value="Ditolak">Ditolak</option>';
                                    } else if($AksiKemanusiaan['status'] == "ACC"){
                                        echo'
                                        <option name="status" value="Pending">Pending</option>
                                        <option name="status" value="Ditolak">Ditolak</option>';
                                    } else {
                                        echo'
                                        <option name="status" value="Pending">Pending</option>
                                        <option name="status" value="ACC">ACC</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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