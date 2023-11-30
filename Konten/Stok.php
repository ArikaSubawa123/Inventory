<h2><span><b>Stok</b></span></h2>
<div class="container">
  <h3>
    <i class="fa fa-file"></i> Stok
  </h3>
</div>
<nav aria-label="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">List</li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
      <li class="breadcrumb-item">Add</li>
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
          <input type="hidden" name="p" value="Stok">
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
        <table class="table">
          <thead class="thead-dark">
            <tr class="text-center">
              <th scope="col">ID</th>
              <th scope="col">ID Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah Masuk</th>
              <th scope="col">Jumlah Keluar</th>
              <th scope="col">Total</th>
              <th scope="col">Jenis Transaksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
          	<?php 
          	$dataperhalaman=5;
			$mulai=0;
            if (empty($_GET['katakunci'])) {
              # code...
            	$katakunci = '';
            	$query = "select * from stok";
              	//$sql = mysqli_query($koneksi, "select * from stok order by id_stok");
            } else {
              #Find Item order By Category
              $katakunci ='%'.$_GET['katakunci'].'%';
              $query = "select * from stok where nama_barang like '$katakunci' order by id_stok";
              //$sql = mysqli_query($koneksi, "select * from stok where 
                //nama_barang like '$katakunci' order by id_stok");
            }
            $sql=mysqli_query($koneksi,$query);

            $jumlahdata=mysqli_num_rows($sql);
      			$jumlahhalaman=$jumlahdata/$dataperhalaman;
      			$jumlahhalaman=ceil($jumlahhalaman);
      			if(empty($_GET['hal'])){
      				$limit2=$mulai;
      			}else {
      				$limit2=($_GET['hal']*$dataperhalaman)-$dataperhalaman;
      			}
      	
      			$query2=$query." limit ".$limit2.",".$dataperhalaman;
      			$sql2=mysqli_query($koneksi,$query2);
            while ($row = mysqli_fetch_array($sql2)) {
              # code...
              echo "
              <tr>
                <td scope='row'>$row[id_stok]</td>
                <td scope='row'>$row[id_barang]</td>
                <td scope='row'>$row[nama_barang]</td>
                <td scope='row'>$row[jml_masuk]</td>
                <td scope='row'>$row[jml_keluar]</td>
                <td scope='row'>$row[total_barang]</td>
                <td scope='row'>$row[jenis_transaksi]</td>
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
          <?php
              for($i=1;$i<=$jumlahhalaman;$i++){
                echo "
                <li class='page-item active' aria-current='page'>
                    <span class='page-link'>
                        <a href=Index.php?p=Stok&katakunci=$katakunci&hal=$i class=text-white>$i</a>
                        <span class='sr-only'>(current)</span>
                    </span>
                </li>
                ";
              }
            ?>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    </div>
</section>