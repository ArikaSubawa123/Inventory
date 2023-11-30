<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=barangkeluar">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Tambah Barang Keluar</h3>
    <br>
    <form action="aksitambahbarangkeluar.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Barang</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
            <select class="form-control" id="exampleFormControlSelect1" name="idBrang">
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
          <label><b>Tanggal Keluar</b></label>
        </div>
        <div class="col-md-9">
          <div class="form-group">
            <input type="date" class="form-control" aria-describedby="button-addon2" name="tglKeluar">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Jumlah Keluar</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="number" class="form-control" placeholder="Jumlah Keluar" aria-label="Jumlah Keluar" aria-describedby="button-addon2" name="jmlKeluar">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Lokasi</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Lokasi" aria-label="Lokasi" aria-describedby="button-addon2" name="Lok">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Penerima</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namebrg">
                <input type="text" class="form-control" placeholder="Penerima" aria-label="Penerima" aria-describedby="button-addon2" name="penerima">
              </div>
        </div>
      </div>
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="http://localhost/Inventory/Index.php?p=barangkeluar" class="btn btn-warning">Cancel</a>
        </div>
    </form>
  </div>
</div>