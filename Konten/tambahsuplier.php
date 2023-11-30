<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=Suplier">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Tambah Suplier</h3>
    <br>
    <form action="aksitambahsuplier.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <input type="hidden" name="id_suplier" class="form-control" value="20">
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama Suplier</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namesup">
                <input type="text" class="form-control" placeholder="Input Name.." aria-label="Input Name.." aria-describedby="button-addon2" name="namasup">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Alamat Suplier</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namesup">
                <input type="text" class="form-control" placeholder="Input Alamat.." aria-label="Input Alamat.." aria-describedby="button-addon2" name="alamatsup">
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <label><b>Telepon</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namesup">
                <input type="number" class="form-control" placeholder="Tlp" aria-label="Tlp" aria-describedby="button-addon2" name="tlpsup">
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