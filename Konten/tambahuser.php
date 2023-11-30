<nav aria-label="breadcrumb" class="pt-5">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="http://localhost/Inventory/Index.php?p=Pengguna">Data</a></li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</nav>
<div class="container">
  <div class="container" style="background: #f5f5f5;">
    <h3 class="pt-2 mb-2">Tambah Pengguna</h3>
    <br>
    <form action="aksitambahuser.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="pb-5">
      <input type="hidden" name="id_user" class="form-control" value="20">
      <div class="row">
        <div class="col-md-2">
          <label><b>Nama</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="nameusr">
                <input type="text" class="form-control" placeholder="Input Name.." aria-label="Input Name.." aria-describedby="button-addon2" name="namausr">
              </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <label><b>Username</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="nameusr">
                <input type="text" class="form-control" placeholder="Input Username.." aria-label="Input Username.." aria-describedby="button-addon2" name="user">
              </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <label><b>Password</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="nameusr">
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="button-addon2" name="pass">
              </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2">
          <label><b>Level</b></label>
        </div>
        <div class="col-md-9">
          <div class="input-group" id="namesup">
                <input type="text" class="form-control" placeholder="level" aria-label="level" aria-describedby="button-addon2" name="lvl">
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