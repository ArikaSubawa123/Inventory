<h2><span><b>Peminjaman</b></span></h2>
<div class="container">
  <h3>
    <i class="fa fa-file"></i> Peminjaman
  </h3>
</div>
<nav aria-label="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
      <li class="breadcrumb-item"><a href="Index.php?p=tambahpinjaman">Add</a></li>
    </ol>
  </div>
</nav>
<div class="container">
	<div class="row">
	  <div class="col-md-6">
	  </div>
	  <div class="col-md-6">
	    <!-- Search Menu -->
	      <form action="http://localhost/Inventory/Index.php?p=Peminjaman" method="get" accept-charset="utf-8">
	        <div class="input-group mb-3">
	          <input type="hidden" name="p" value="Peminjaman">
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
              <th scope="col">ID</th>
              <th scope="col">Peminjam</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah Barang</th>
              <th scope="col">Tanggal Kembali</th>
              <th scope="col">Kondisi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
          	<?php 
            if (empty($_GET['katakunci'])) {
              # code...
              $sql = mysqli_query($koneksi, "select * from pinjam_barang order by id_pinjam");
            } else {
              #Find Item order By Category
              $katakunci ='%'.$_GET['katakunci'].'%';
              $sql = mysqli_query($koneksi, "select * from pinjam_barang where 
                peminjam like '$katakunci' order by id_pinjam");
            }
            while ($row = mysqli_fetch_array($sql)) {
              # code...
              echo "
              <tr>
                <td scope='row'>$row[id_pinjam]</td>
                <td scope='row'>$row[peminjam]</td>
                <td scope='row'>$row[tgl_pinjam]</td>
                <td scope='row'>$row[nama_barang]</td>
                <td scope='row'>$row[jml_barang]</td>
                <td scope='row'>$row[tgl_kembali]</td>
               	<td scope='row'>$row[kondisi]</td>
                <td>";
                  if($row['status']=='Pinjam') {
                    echo "
                    <a href='Index.php?p=editpinjaman&id=$row[id_pinjam]' class='btn btn-primary'>Edit</a>&nbsp;
                    <a href='Index.php?p=Pengembalian&id=$row[id_pinjam]' class='btn btn-success'>Return</a>&nbsp;
                    ";
                  } 
                echo "</td>
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