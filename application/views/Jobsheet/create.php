            		
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
			<h2 class="text-center">JOB SHEET #</h2>
			<hr>
			<form action="">

                <div class="row">
                    <div class="col-md-12 text-center sub-title">
                        INV NO : <input type="text" value="TAJL/2021/01/823" readonly> / 
                        <select class="js-example-basic-multiple">
                            <option value="00073">00073</option>
                            <option value="00074">00074</option>
                        </select>
                    </div>
                </div>
                <br/>
                
                <div class="row">
                    <div class="col-md-2 sub-title">
                        SHIPPER
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="PT. MAYORA" readonly> / SI:
                        <select class="js-example-basic-multiple">
                            <option value="102093482">102093482</option>
                            <option value="102093400">102093400</option>
                        </select>
                    </div>
                </div>

                <br/>
                
                <div class="row">
                    <div class="col-md-2 sub-title">
                        CARRIER
                    </div>
                    <div class="col-md-10 sub-title">
                        : <select>
                            <option value="1">PT. RCL</option>
                            <option value="2">PT. BCL</option>
                        </select> / 
                        <input type="text" value="BJKTC21000506">
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-2 sub-title">
                        POL - POD
                    </div>
                    <div class="col-md-10 sub-title">
                        : <select>
                            <option value="1">JAKARTA</option>
                            <option value="2">BANDUNG</option>
                        </select> - <select>
                            <option value="1">YANGON</option>
                            <option value="2">YANGMH</option>
                        </select>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-2 sub-title">
                        VOLUME
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="1"> - <select>
                            <option value="40HQ">40 HQ</option>
                            <option value="80HQ">80 HQ</option>
                        </select>
                    </div>
                </div>
				
            <tr class="form-group">
                <label>Nama</label>
                
                <select name="nama" id="name" class="form-control" onchange="myFunction(this)">
            		<option value="" disabled selected>--PILIH DATA--</option>
            		<?php foreach($user as $row): ?>
            		<option  value="<?php echo $row['nama_depan'];?>  <?php echo $row['nama_belakang'];?>"><?php echo $row['nama_depan'];?>  <?php echo $row['nama_belakang'];?></option>
            		<?php endforeach;?>
            	</select>
            	
            </tr>
        		
            
            <tr class="form-group col-md-6">
                <label>Email</label>
                 <select name="email" id="email" class="form-control">
            		<option value="">--PILIH DATA--</option>
            		
            	</select>
            </tr>
             <tr class="form-group">
                <label>Customers</label>
                <select name="role_id" id="" class="form-control col-xs-4">
                <option value="">--PILIH DATA--</option>
                <?php 
                $no=1;
                foreach ($role as $row) : ?>
                    <option value="<?php echo $row['role_id'];?>"><?php echo $row['role_id']; ?>. <?php echo $row['nama']; ?></option>
                <?php endforeach; ?>
                </select>
            </tr>
            <tr class="form-group">
            	<label for="">Shiping Line</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="" >Processing Office</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="" >Export</label>
            	<select name="" id="" class="form-control">
            		<option value="" >--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="">Booking No</label>
            	<input type="text" class="form-control">
            </tr>

            <tr class="form-group">
            	<label for="">TOS</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="">POR</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="" >POL</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="" >POD</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="" >PDL</label>
            	<input type="text" class="form-control">
            </tr>

            <tr class="form-group">
            	<label for="">Shiping Line</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>

            </tr>
            <tr class="form-group">
            	<label for="">Trade</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="">FV</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">ETD POR/L</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">ETA POD</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">ETA PDL</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">CY OPEN</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">CY Close</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">Shipment Type</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="">VOL</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">Config</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="">1st Co.Ty</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>
            <tr class="form-group">
            	<label for="">Container No.</label>
            	<input type="text" class="form-control">
            </tr>
             <tr class="form-group">
            	<label for="">Seal No.</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">Container Gate In Date</label>
            	<input type="text" class="form-control">
            </tr>
            <tr class="form-group">
            	<label for="">Depot</label>
            	<select name="" id="" class="form-control">
            		<option value="">--PILIH DATA--</option>
            	</select>
            </tr>




            <div class="modal-footer">
        <a type="button" class="btn btn-secondary" href="<?php echo base_url('Admin/users');?>">Close</a>
        <a type="submit" class="btn btn-primary text-white">Save changes</a>
      </div>
        </form>
			</div>
		</div>
	</div>
</div>

<script>
	function myFunction(x) {
		//var nama = document.getElementById("name").value;
		//document.getElementById("email").innerHTML = "Tes" + nama;
		//alert('aponyo dak o  dak kleuar : ' + $(x).val());


            		
            		$('#email').html('<?php foreach($user as $row): ?>
            			<option  value="<?php echo $row['email'];?>"><?php echo $row['email'];?></option><?php endforeach;?>')
            		
	}
</script>