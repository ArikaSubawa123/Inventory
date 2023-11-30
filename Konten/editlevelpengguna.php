<?php 
  $lvl = $_GET['id'];
  $query = "select * from level where level=$lvl";
  $sql = mysqli_query($koneksi,$query);
  $r = mysqli_fetch_array($sql);
 ?>
<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=levelpengguna">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container mb-5">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Edit Level Pengguna</h3>
    <br>
    <form action="aksieditlevelpengguna.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <div class="row">
        <div class="col-md-2">
          <label><b>Level</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
            <input type="number" class="form-control" placeholder="Input Level.." aria-label="Input Level.." aria-describedby="button-addon2" name="lvl" value="<?= $r['level']; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Deskripsi</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Input Deskripsi.." aria-label="Input Deskripsi.." aria-describedby="button-addon2" name="deskripsi" value="<?= $r['deskripsi']; ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Referensi</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="referensi">
              <?php 
               if ($r['a_referensi'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Pengadaan</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect2" name="pengadaan">
              <?php 
               if ($r['a_pengadaan'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Peminjaman</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="pinjaman">
              <?php 
               if ($r['a_peminjaman'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Barang Keluar</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="barangkeluar">
              <?php 
               if ($r['a_barangkeluar'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Stok</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="stok">
              <?php 
               if ($r['a_stok'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Laporan</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="laporan">
              <?php 
               if ($r['a_laporan'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Akses Backup</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="backup">
             <?php 
               if ($r['a_backup'] == 1) {
                 # code...
                 echo "<option value='1'>Ya</option>";
               } else {
                 echo "<option value='0'>Tidak</option>";
               }
               ?>
               <option value="1">Ya</option>
               <option value="0">Tidak</option>
            </select>
          </div>
        </div>
      </div>
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="http://localhost/Inventory/Index.php?p=levelpengguna" class="btn btn-warning">Cancel</a>
        </div>
    </form>
  </div>
</div>