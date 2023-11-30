<h2><span><b>Level Pengguna</b></span></h2>
<div class="container">
  <h3>
    <i class="fa fa-file"></i> Level Pengguna
  </h3>
</div>
<nav aria-label="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
      <li class="breadcrumb-item"><a href="Index.php?p=tambahlevelpengguna">Add</a></li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
      <!-- Search Menu -->
        <form action="Index.php" method="get" accept-charset="utf-8">
          <div class="input-group mb-3">
            <input type="hidden" name="p" value="levelpengguna">
            <input type="text" class="form-control" placeholder="Search For.." aria-label="Search For.." aria-describedby="button-addon2" name="katakunci">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div>
          </div>
        </form>
      <!-- End Search Menu -->
    </div>
  </div>
</div>
<!-- next -->
<section id="lvl">
    <div class="container">
        <table class="table table-hover table-striped">
          <thead class="thead-dark">
            <tr class="text-center">
              <th scope="col">Level</th>
              <th scope="col">Deskripsi</th>
              <!-- <th scope="col">Akses Referensi</th>
              <th scope="col">Akses Pengadaan</th>
              <th scope="col">Akses Peminjaman</th>
              <th scope="col">Akses Barang Keluar</th>
              <th scope="col">Akses Stok</th>
              <th scope="col">Akses Laporan</th>
              <th scope="col">Akses Backup</th> -->
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
          	<?php 
            if (empty($_GET['katakunci'])) {
              # code...
              $sql = mysqli_query($koneksi, "select * from level order by level");
            } else {
              #Find Item order By Category
              $katakunci ='%'.$_GET['katakunci'].'%';
              $sql = mysqli_query($koneksi, "select * from level where 
                deskripsi like '$katakunci' order by level");
            }
            while ($row = mysqli_fetch_array($sql)) {
              # code...
              echo "
              <tr>
                <td scope='row'>$row[level]</td>
                <td scope='row'>$row[deskripsi]</td>
                <td>
                  <a href='Index.php?p=editlevelpengguna&id=$row[level]' class='btn btn-primary'>Edit</a>&nbsp;&nbsp;&nbsp;
                  <a class='btn btn-danger' onclick=\"return confirm('Are You Sure Wanna Delete This?');\" href='aksihapuslevelpengguna.php?id=$row[level]'>Delete</a>
                </td>
              </tr>
              ";
            }
          ?>
          </tbody>
        </table>
    </div>
</section>