<?php 
  $idr = $_GET['id'];
  $query3 = "select barang_masuk.*,nama_suplier from barang_masuk,suplier where barang_masuk.id_suplier = suplier.id_suplier and id='$idr'";
  $sql_3 = mysqli_query($koneksi,$query3);
  $r2 = mysqli_fetch_array($sql_3);
 ?>
<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=Pengadaan">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Edit Pengadaan</h3>
    <br>
    <form action="aksieditpengadaan.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <input type="hidden" name="idTrans" class="form-control" value="<?= $r2['id']; ?>"> <!-- id -->
      <input type="hidden" name="jmlAwal" value="<?= $r2['jml_masuk']; ?>">
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="idbrg">
              <option value="<?= $r2['id_barang'] ?>"><?= $r2['nama_barang'] ?></option>";
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Suplier</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="idsply">
              <option selected="" value="<?= $r2['id_suplier']; ?>"><?= $r2['nama_suplier']; ?></option>
              <?php 
                $query1 = "select * from suplier order by nama_suplier";
                $sql1 = mysqli_query($koneksi,$query1);
                while ($sply = mysqli_fetch_array($sql1)) {
                  # code...
                  echo "<option value=$sply[id_suplier]>$sply[nama_suplier]</option>";
                }
               ?>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Jumlah Masuk</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="Number" class="form-control" placeholder="Jumlah Masuk.." aria-label="Jumlah Masuk.." aria-describedby="button-addon2" name="jmlmsk" value="<?= $r2['jml_masuk']; ?>">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Tanggal Masuk</b></label>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="date" name="tglmasuk" data-provide="datepicker" class="form-control" aria-describedby="button-addon2" value="<?= $r2['tgl_masuk']; ?>">
          </div>
        </div>
      </div>
        <div class="col-md-12 text-center pb-4">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="http://localhost/Inventory/Index.php?p=Pengadaan" class="btn btn-warning">Cancel</a>
        </div>
    </form>
  </div>
</div>