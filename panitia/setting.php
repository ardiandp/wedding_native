

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting   <?php echo $_SESSION['username']; ?>  
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>


<section class="content">
<div class="row">

<div class="col-md-6">

<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Setting Title Dan Description</h3>
</div>

<?php 
$id=$_SESSION['user_id'];
$seting=mysqli_query($conn,"SELECT * FROM setting where username='$id' ");
$data=mysqli_fetch_array($seting);
?>
<form method="post" action="?page=update_setting">
<div class="box-body">
<div class="form-group">
<label for="exampleInputEmail1">title Web</label>
<input type="text" value="<?php echo  $data['title'] ?>" class="form-control" name="title" id="exampleInputEmail1" placeholder="title Web">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Text 1</label>
<input type="text" value="<?php echo  $data['text1'] ?>" class="form-control" name="text1" id="exampleInputEmail1" placeholder="Judul Di Hal 1">
</div>

<div class="form-group">
<label for="exampleInputEmail1">Tanggal Pernikahan</label>
<input type="text" value="<?php echo  $data['waktu'] ?>" class="form-control" name="waktu" id="exampleInputEmail1" placeholder="ex: JUNE 28 2024">
</div>

</div>
<div class="box-footer">
<button type="submit" name="update" class="btn btn-warning">Simpan Pengaturan</button>
</div>
</form>
</div>









</div>


<div class="col-md-6">

<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Nama calon Suami dan Istri</h3>
</div>
<form method="post" action="?page=update_setting">
<div class="box-body">
<div class="form-group">
<label for="exampleInputEmail1">Calon Suami</label>
<input type="text" value="<?php echo  $data['c_suami'] ?>" class="form-control" name="c_suami" id="exampleInputEmail1" placeholder="Calon Suami">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Calon Istri</label>
<input type="text" value="<?php echo  $data['c_istri'] ?>" class="form-control" name="c_istri" id="exampleInputEmail1" placeholder="Calon Istri">
</div>

<div class="box-footer">
<button type="submit" name="updatecalon" class="btn btn-info pull-right">Update</button>
</div>

</form>
</div>
</div>
</div>
</section>


</div>
</div>







  </div>
  <!-- /.content-wrapper -->
