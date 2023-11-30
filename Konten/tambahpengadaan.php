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
    <h3 class="pt-2 mb-2">Tambah Pengadaan</h3>
    <br>
    <form action="aksitambahpengadaan.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <input type="hidden" name="id_barang" class="form-control" value="20">
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="idbrg">
              <?php 
                $query = "select * from barang order by nama_barang";
                $sql = mysqli_query($koneksi,$query);
                while ($brg = mysqli_fetch_array($sql)) {
                  # code...
                  echo "<option value=$brg[id_barang]>$brg[nama_barang]</option>";
                }
               ?>
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
                <input type="Number" class="form-control" placeholder="Jumlah Masuk.." aria-label="Jumlah Masuk.." aria-describedby="button-addon2" name="jmlmsk">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Tanggal Masuk</b></label>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="date" name="tglmasuk" data-provide="datepicker" class="form-control" aria-describedby="button-addon2">
          </div>
        </div>
      </div>
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="http://localhost/Inventory/Index.php?p=Pengadaan" class="btn btn-warning">Cancel</a>
        </div>
    </form>
  </div>
</div>