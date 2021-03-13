<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
                           <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary mb-2 text-white" data-toggle="modal" data-target="#vasselno">
                              <i class="fa fa-plus"></i> Tambah Data
                            </a>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Vessel ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                        	$no=1;
                                        	foreach ($vesselno as $row) : ?>
                                            <tr>
                                            	 
                                               <td><?php echo $no++;?></td>
                                               <td><?php echo $row['vessel_id'];?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td>
                                                    <a class="btn btn-warning"  href="<?php echo base_url('Admin/edit_vesselno/'.$row['id']); ?>"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger" href="<?php echo base_url('Admin/delete_vessel_no/'.$row['id']); ?>"><i class="fa fa-trash"></i></a>
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


<div class="modal fade" id="vasselno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Admin/tambah_vesselno');?>" method="post">

          <tr class="form-group">
                <label>VESSEL ID</label>
                <select name="vessel_id" id="" class="form-control">
                <?php 
                $no=1;
                foreach ($vessel as $row) : ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $no++; ?>. <?php echo $row['name']; ?></option>
                     <?php endforeach; ?>
                
                </select>
            </tr>
            <tr class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </tr>
             <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>