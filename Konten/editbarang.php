<?php 
    $id = $_GET['id'];
    $query_brg = "select * from barang where id_barang='$id'";
    $sql_brg = mysqli_query($koneksi, $query_brg);
    $row_brg = mysqli_fetch_array($sql_brg);
 ?>
<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=Barang">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Edit Barang</h3>
    <br>
    <form action="aksiubahbarang.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <div class="row">
        <div class="col-md-2">
          <label><b>ID Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" aria-label="Input Name.." aria-describedby="button-addon2" name="idbrg" readonly="readonly" value="<?= $row_brg['id_barang'] ?>">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Input Name.." aria-label="Input Name.." aria-describedby="button-addon2" name="namabrg" value="<?= $row_brg['nama_barang'] ?>">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Spesifikasi</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="spek"><?= $row_brg['spesifikasi'] ?></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Lokasi</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Lokasi" aria-label="Lokasi" aria-describedby="button-addon2" name="lokasi" value="<?= $row_brg['lokasi'] ?>">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Kondisi</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Kondisi" aria-label="Kondisi" aria-describedby="button-addon2" name="kondisi" value="<?= $row_brg['kondisi'] ?>">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Jumlah Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="number" class="form-control" placeholder="Jumlah" aria-label="Jumlah" aria-describedby="button-addon2" name="jmlbrg" value="<?= $row_brg['jumlah_barang'] ?>">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Sumber Dana</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Sumber.." aria-label="Sumber.." aria-describedby="button-addon2" name="dana" value="<?= $row_brg['sumber_dana'] ?>">
              </div>
        </div>
      </div>
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="http://localhost/Inventory/Index.php?p=Barang" class="btn btn-warning">Cancel</a>
        </div>
    </form>
  </div>
</div>