  <div class="row">
      <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                           <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary mb-2" href="<?php echo base_url('Admin/TambahData');?>">
                              <i class="fa fa-plus"></i> Tambah Data
                            </a>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama </th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                        	$no=1;
                                        	foreach ($user as $row) : ?>
                                            <tr>
                                            	 
                                               <td><?php echo $no++;?></td>
                                               
                                                <td><?php echo $row['nama_depan'];?> <?php echo $row['nama_belakang'];?></td>
                                                <td><?php echo $row['username'];?></td>
                                                <td><?php echo $row['umur'];?></td>
                                                <td><?php echo $row['nama'];?></td>
                                                <td>
                                                    <a class="btn btn-primary" href="<?php echo base_url('Admin/index')?>"><i class="fa fa-eye"></i></a>
                                                    <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModa2"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger" href="<?php echo base_url('Admin/index')?>"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                          <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>



   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <tr class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control">
            </tr>
            <tr class="form-group">
                <label>Email</label>
                <input type="text" class="form-control">
            </tr>
             <tr class="form-group">
                <label>Customers</label>
                <select name="" id="" class="form-control">
                <?php 
                $no=1;
                foreach ($role as $row) : ?>
                    <option value="<?php echo $row['role_id'];?>"><?php echo $row['role_id']; ?>. <?php echo $row['nama']; ?></option>
                <?php endforeach; ?>
                </select>
            </tr>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

   <!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>