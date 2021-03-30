<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<?php foreach ($vesselno as $row) : ?>
				 <form action="<?php echo base_url('Admin/VesselNoUpdate');?>" method="post">
           <tr class="form-group">
                <label>Name</label>
                <input type="text" name="id" value="<?php echo $row->id;?>" class="form-control">
            </tr>
          <tr class="form-group">
                <label>VESSEL ID</label>
                <select name="vessel_id" id="" class="form-control">
                  <option value="<?php echo $row->vessel_id;?>"><?php echo $row->vessel_id;?></option>
                <?php 
                $no=1;
                foreach ($vessel as $roc) : ?>
                    <option value="<?php echo $roc['id'];?>"><?php echo $roc['id']; ?>. <?php echo $roc['name_vessel']; ?></option>
                <?php endforeach; ?>
                </select>
            </tr>
            <tr class="form-group">
                <label>Name</label>
                <input type="text" name="name_vesselno" value="<?php echo $row->name_vesselno;?>" class="form-control">
            </tr>
             <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
         <?php endforeach; ?>
			</div>
		</div>
	</div>
</div>