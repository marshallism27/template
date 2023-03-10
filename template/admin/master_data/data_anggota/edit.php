

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../css/me.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </head>
<body>
<?php include('../../menubar.php') ?>
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text"> Selamat Datang  di Perpustakaan</span>
  </div>
    <form action="" method ="POST" enctype = "multipart/form-data">
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Data Anggota</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Kode Anggota</label>
                        <input type="text" class="form-control" name = "kode" value="">
                        <input type="hidden" name="id" value="<?= $data_user["id"] ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Foto</label>
                        <input type="file" name ="foto" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">NIS</label>
                        <input name = "nis" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Username</label>
                        <input name = "username" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Fullname</label>
                        <input name="fullname" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Alamat</label>
                        <input type="text" name = "alamat" class="form-control" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Kelas</label>
                        <input name = "kelas" type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Verifikasi</label>
                        <select class = "form-select" name="verif" id="">
                            <option value="" disabled selected>-- Pilih Opsi --</option>
                            <option value="VERIFIED" >VERIFIED</option>
                            <option value="UNVERIFIED" >UNVERIFIED</option>
                        </select>
                    </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name ="submit">Simpan</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</form>

</section>

</body>
<script src="../../../css/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
