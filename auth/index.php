<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAWAPRES - Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <div class="container mt-3 p-5">
        <div class="row">
            <div class="col-1g-12">
                <h5 class="text-center">Silahkan Login menggunakan akun SSO</h5>
                <div class="card " style=" width: 75rem; height: 25rem;">
                    <div class="card-body">
                        <h3 class="card-title">Login</h3>
                        <?php
                        if (isset($_GET['message'])) {
                            if ($_GET['message'] == "failed") {
                                echo "<span class='text-alert'>Login gagal! username dan password salah!</span>";
                            } else if ($_GET['message'] == "logout") {
                                echo "<span class='text-success'>Logout berhasil</span>";
                            } else if ($_GET['message'] == "not_login") {
                                echo "<span class='text-success'>Login gagal! username dan password salah!</span>";
                            }
                        }
                        ?>
                        <form action="process.php?action=login" method="POST">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label fs-5 text">Username</label>
                                <input type="text" name="username" class="form-control">
                                <div id="emailHelp" class="form-text">Input your username.</div>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label fs-5 text">Password</label>
                                <input type="password" name="password" class="form-control">
                                <div id="emailHelp" class="form-text">Input your password.</div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg">Submit</button>
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
</body>

</html>