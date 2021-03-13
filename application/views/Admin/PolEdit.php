<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<?php foreach ($pol as $row) { ?>
				   <form action="<?php echo base_url().'Admin/PolUpdate'; ?>" method="post">
				   	<tr class="form-group">
                
                <input type="hidden" name="id" value="<?php echo $row->id; ?>" class="form-control">
            </tr>
            <tr class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row->name; ?>" class="form-control">
            </tr>
             <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
         <?php } ?>
			</div>
		</div>
	</div>
</div>