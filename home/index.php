<?php
include '../config/auth.php';
include('../navigation/index.php');
?>
    <div class="container mt-3 p-5">

        <?php if (isset($_GET['message'])) {
            if ($_GET['message'] == "unauthorized") {
        ?>
                <div class="alert alert-danger" role="alert">
                    You don't have the right to acces the page.
                </div>
        <?php }
        } ?>

        <div class="row justify-content-center ">
            <div class="col-lg-6">
                <img src="../images/timeline.png" class="img-thumbnail">
            </div>
            <div class="col-lg-6">
                <img src="../images/persyaratan.png" class="img-thumbnail">
            </div>
        </div>
        </div>
    </div>
    <div style="background-color: #692c2c" class="mt-3 p-3 bg-green text-white text-center">
        <p>Powered by Ensyse Laboratory 2023</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>