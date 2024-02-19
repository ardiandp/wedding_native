

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Users
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header bg-primary ">
              <h3 class="box-title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Tambah Users  </button></h3>
            </div>


            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>HP</th>
                  <th>Nama Lengkap</th>
                  <th>Aktif</th>
                  <th style="width: 40px"> Aksi</th>
     
    <!-- Modal content for adding user -->
  </div>
</th>
                </tr>
      <tbody>
        <?php
        $users=mysqli_query($conn,"SELECT * FROM users");
        $no=1;
        while($data=mysqli_fetch_array($users)){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['username'] ?></td>
              <td><?= $data['email'] ?></td>
              <td><?= $data['no_hp'] ?></td>
              <td><?= $data['nama_lengkap'] ?></td>
              <td><?= $data['status'] ?></td>
              <td style="width: 100px"><a href="#" data-toggle="modal" data-target="#editUserModal<?php echo $data['id'] ?>" class="btn-sm btn-warning"><i class="fa fa-edit"></i></a> <a href="?page=del_users&id=<? echo $data['id'] ?>" class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fa fa-trash"></i></a></td>
            </tr>
            <!-- Edit User Modal -->
  <div id="editUserModal<?php echo $data['id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit User</h4>
        </div>
        <div class="modal-body">
          <!-- Form to edit user data -->
          <form action="" method="post">
            <div class="form-group">
              <label for="edit_username">Username:</label><input type="hidden" name="id" value="<?= $data['id'] ?>" >
              <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control" id="edit_username">
            </div>
            <div class="form-group">
              <label for="edit_password">Password:</label>
              <input type="password" name="password" value="<?= $data['password'] ?>" class="form-control" id="edit_password">
            </div>
            <div class="form-group">
              <label for="edit_email">Email:</label>
              <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" id="edit_email">
            </div>
            <div class="form-group">
              <label for="edit_no_hp">Phone Number:</label>
              <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control" id="edit_no_hp">
            </div>
            <div class="form-group">
              <label for="edit_nama_lengkap">Full Name:</label>
              <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" class="form-control" id="edit_nama_lengkap">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="edit" class="btn btn-warning" >Update Data</button>
        </div></form>
      </div>

    </div>
  </div>

        <?php } ?>
       
      </tbody>
    </table>
  </div>

  <!-- Modal Add USers-->
  <div id="addUserModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

<div class="modal-content">
  <div class="modal-header bg-primary">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add User</h4>
  </div>
  <div class="modal-body">
    <form method="post" action="">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" id="username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="no_hp">Phone Number:</label>
        <input type="text" name="no_hp" class="form-control" id="no_hp">
      </div>
      <div class="form-group">
        <label for="nama_lengkap">Full Name:</label>
        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
      </div>
  
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <input type="submit" name="simpan" value="Simpan Users" class="btn btn-primary" ></input>
  </div> </form>
</div>
</div>
</div>
</div>
<?php 
if(isset($_POST['simpan']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $status = 'Y';
    $query = mysqli_query($conn,"INSERT INTO users(username,password,email,no_hp,nama_lengkap,status) VALUES('$username','$password','$email','$no_hp','$nama_lengkap','$status')");
    if($query)
    {
        echo "<script>document.location = '?page=users';</script>";
    }
}
else if(isset($_POST['edit']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $query = mysqli_query($conn,"UPDATE users SET username='$username',password='$password',email='$email',no_hp='$no_hp',nama_lengkap='$nama_lengkap' WHERE id='$id'");
    if($query)
    {
        echo "<script>document.location = '?page=users';</script>";
    }
}





?>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
