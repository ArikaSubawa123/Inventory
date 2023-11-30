<?php 
  $id = $_GET['id'];
  $query = "SELECT * FROM pinjam_barang WHERE id_pinjam='$id'";
  $sql = mysqli_query($koneksi,$query);
  $r = mysqli_fetch_array($sql);
 ?>
<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=Pengembalian">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Pengembalian</h3>
    <br>
    <form action="aksipengembalian.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <input type="hidden" name="idxPinjam" value="<?= $r['id_pinjam']; ?>" readonly>
      <input type="hidden" name="stokAwal" value="<?= $r['jml_barang']; ?>">
      <div class="row">
        <div class="col-md-2">
          <label><b>Peminjam</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Peminjam.." aria-label="Peminjam.." aria-describedby="button-addon2" name="peminjm" value="<?= $r['peminjam']; ?>" readonly>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Tanggal Pinjam</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="date" class="form-control" placeholder="Date.." aria-label="Date.." aria-describedby="button-addon2" name="tgl_pinjam" value="<?= $r['tgl_pinjam']; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Tanggal Kembali</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="date" class="form-control" placeholder="Date.." aria-label="Date.." aria-describedby="button-addon2" name="dateback">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Kondisi</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="kondisi" required>
              <option value="Baik">Baik</option>
              <option value="Rusak">Rusak</option>
              <option value="Hilang">Hilang</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="id_barang">
              <option selected="" value="<?= $r['id_barang']; ?>"><?= $r['nama_barang']; ?></option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Jumlah Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Jumlah Barang.." aria-label="Jumlah Barang.." aria-describedby="button-addon2" name="jmlbrg" value="<?= $r['jml_barang']; ?>" readonly>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-2">
          <label><b>Tanggal Kembali</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="date" class="form-control" placeholder="Date.." aria-label="Date.." aria-describedby="button-addon2" name="tglmsk">
              </div>
        </div>
      </div> -->
      <!-- <div class="row">
        <div class="col-md-2">
          <label><b>Kondisi</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="kndisi">
              <?php 
                //$query1 = "select kondisi from barang order by id_barang";
               // $sql1 = mysqli_query($koneksi,$query1);
                //while ($sply = mysqli_fetch_array($sql1)) {
                  # code...
                  //echo "<option value=$sply[kondisi]>$sply[kondisi]</option>";
               ?>
            </select>
          </div>
        </div>
      </div> -->
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="http://localhost/Inventory/Index.php?p=Pengembalian" class="btn btn-warning">Cancel</a>
        </div>
    </form>
  </div>
</div>