            		
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
			<h2 class="text-center">JOB SHEET #</h2>
			<hr>
            <?php foreach ($jobsheet as $row) { ?>
                            
			<form action="<?php echo base_url('Jobsheet/JobsheetUpdate');?>" method="post">
                <div class="row">
                    <div class="col-md-12 text-center sub-title">
                       <input type="hidden" name="id" value="<?php echo $row->id; ?>" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center sub-title">
                        INV NO : <input type="text" value="TAJL/2021/01/823" readonly> / 
                        <select class="js-example-basic-multiple" name="customer_no">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->customer_no; ?>"><?php echo $row->customer_no; ?></option>
                            <?php } ?>
                           <?php foreach ($customer as $row) { ?>
                            <option value="<?php echo $row['customer_id'] ?>"><?php echo $row['customer_id'] ?></option>
                        <?php } ?>
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
                        : <select name="carrier_id">
                             <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->carrier_id; ?>"><?php echo $row->carrier_id; ?></option>
                            <?php } ?>
                            <?php foreach ($carrier as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_carrier'] ?></option>
                        <?php } ?>
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
                        : <select name="pol">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->pol; ?>"><?php echo $row->pol; ?></option>
                            <?php } ?>
                           <?php foreach ($pol as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_pol'] ?></option>
                            <?php } ?>
                        </select> - <select name="pod">
                              <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->pod; ?>"><?php echo $row->pod; ?></option>
                            <?php } ?>
                            <?php foreach ($pod as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_pod'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-2 sub-title">
                        VOLUME
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="1"> - <select name="vol_weight">
                             <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->vol_weight; ?>"><?php echo $row->vol_weight; ?></option>
                            <?php } ?>
                            <?php foreach ($vol as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_vol'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                
                <br/>

                <div class="row">
                    <div class="col-md-2 sub-title">
                        VESSEL
                    </div>
                    <div class="col-md-10 sub-title">
                        : <select name="vessel">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->vessel; ?>"><?php echo $row->vessel; ?></option>
                            <?php } ?>
                           <?php foreach ($vessel as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_vessel'] ?></option>
                        <?php } ?>
                        </select> - <select name="vessel_no">
                            <?php foreach ($vesselno as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_vesselno'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <br/>

                <br/>
                
                <div class="row">
                    <div class="col-md-2 sub-title">
                        OPEN
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="26.01.2021"> (  <input type="text" value="01.00"> )
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-2 sub-title">
                        CLOSING
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="30.01.2021"> (  <input type="text" value="12.00"> )
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-2 sub-title">
                        ETD
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="JAKARTA" readonly> - <input type="text" value="31.01.2021">
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-2 sub-title">
                        ETA
                    </div>
                    <div class="col-md-10 sub-title">
                        : <select name="eta_city">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->eta_city; ?>"><?php echo $row->eta_city; ?></option>
                            <?php } ?>
                            <?php foreach ($pod as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_pod'] ?></option>
                        <?php } ?>
                        </select> - <input type="text" value="02.02.2021">
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-2 sub-title">
                        MV
                    </div>
                    <div class="col-md-10 sub-title">
                        : <select name="vessel">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->vessel; ?>"><?php echo $row->vessel; ?></option>
                            <?php } ?>
                           <?php foreach ($vessel as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_vessel'] ?></option>
                        <?php } ?>
                        </select> - <select name="vessel_no">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->vessel_no; ?>"><?php echo $row->vessel_no; ?></option>
                            <?php } ?>
                            <?php foreach ($vesselno as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_vesselno'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-2 sub-title">
                        ETD
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="SIN" readonly> - <input type="text" value="10.02.2021">
                    </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-2 sub-title">
                        ETA
                    </div>
                    <div class="col-md-10 sub-title">
                        : <select name="eta_city">
                            <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->eta_city; ?>"><?php echo $row->eta_city; ?></option>
                            <?php } ?>
                            <?php foreach ($pod as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_pod'] ?></option>
                        <?php } ?>
                        </select> - <input type="text" value="14.02.2021">
                    </div>
                </div>

                <br/>

                <br/>
                <br/>

                <div class="row">
                    <div class="col-md-2 sub-title">
                        STUFFING DATE
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="29.01.2021"> (  <input type="text" value="JAYANTI 2"> )
                    </div>
                </div>
                <br/>
				<div class="row">
                    <div class="col-md-2 sub-title">
                        TERM
                    </div>
                    <div class="col-md-10 sub-title">
                        : <input type="text" value="CY"> /
                            <select name="term">
                                <?php foreach ($jobsheet as $row) { ?>
                            <option value="<?php echo $row->term; ?>"><?php echo $row->term; ?></option>
                            <?php } ?>
                            <<?php foreach ($term as $row) { ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name_term'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <br/>
				<div class="row">
                    <div class="col-md-2 sub-title">
                        TRUCKING BY
                    </div>
                    <div class="col-md-10 sub-title">
                        <select>
                            <option value="1">VENDOR1</option>
                            <option value="2">VENDOR2</option>
                        </select>
                    </div>
                </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="<?php echo base_url('Jobsheet/index');?>">Close</a>
                <button type="submit" class="btn btn-primary text-white">Save changes</button>
          </div>
        </form>

                        <?php } ?>
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