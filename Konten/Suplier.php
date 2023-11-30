<h2><span><b>Suplier</b></span></h2>
<div class="container">
  <h3>
    <i class="fa fa-file"></i> Suplier
  </h3>
</div>
<nav aria-label="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
      <li class="breadcrumb-item"><a href="Index.php?p=tambahsuplier">Add</a></li>
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
          <input type="hidden" name="p" value="Suplier">
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
<section id="sup">
    <div class="container">
        <table class="table">
          <thead class="thead-dark">
            <tr class="text-center">
              <th scope="col">ID</th>
              <th scope="col">Nama Suplier</th>
              <th scope="col">Alamat Suplier</th>
              <th scope="col">Telepon</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php 
            if (empty($_GET['katakunci'])) {
              # code...
              $sql = mysqli_query($koneksi, "select * from suplier order by id_suplier");
            } else {
              #Find Item order By Category
              $katakunci ='%'.$_GET['katakunci'].'%';
              $sql = mysqli_query($koneksi, "select * from suplier where 
                nama_suplier like '$katakunci' order by id_suplier");
            }
            while ($row = mysqli_fetch_array($sql)) {
              # code...
              echo "
              <tr>
                <td scope='row'>$row[id_suplier]</td>
                <td scope='row'>$row[nama_suplier]</td>
                <td scope='row'>$row[alamat_suplier]</td>
                <td scope='row'>$row[telp_suplier]</td>
                <td>
                  <a href='Index.php?p=editsuplier&id=$row[id_suplier]' class='btn btn-primary'>Edit</a>&nbsp;&nbsp;&nbsp;
                  <a class='btn btn-danger' onclick=\"return confirm('Are You Sure Wanna Delete This?');\" href='aksihapussuplier.php?id=$row[id_suplier]'>Delete</a>
                </td>
              </tr>
              ";
            }
          ?>
          </tbody>
        </table>
    </div>
    <div class="container">
      <nav aria-label="..." class="pt-4">
      <ul class="pagination justify-content-end">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
        <li class="page-item active" aria-current="page">
          <span class="page-link">
            1
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    </div>
</section>