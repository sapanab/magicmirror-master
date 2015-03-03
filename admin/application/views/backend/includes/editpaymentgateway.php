<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 Paymentgateway Details
			</header>
			<div class="panel-body">
				<form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/editpaymentgatewaysubmit');?>" >
					<div class="form-row control-group row-fluid" style="display:none;">
						<label class="control-label span3" for="normal-field">ID</label>
						<div class="controls span9">
						  <input type="hidden" id="normal-field" class="row-fluid hidden" name="id" value="<?php echo $before->id;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name',$before->name);?>">
						</div>
					</div>		
					<div class="form-group">
						<label class="col-sm-2 control-label">Is Default</label>
						<div class="col-sm-4">
						  <?php
							
							echo form_dropdown('isdefault',$isdefault,set_value('isdefault',$before->isdefault),'class="chzn-select form-control" 	data-placeholder=""');
						?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Order</label>
						<div class="col-sm-4">
						  <input type="number" id="normal-field" class="form-control" name="order" value="<?php echo set_value('order',$before->order);?>">
						</div>
					</div>		
					<div class="form-group">
						<label class="col-sm-2 control-label">Status</label>
						<div class="col-sm-4">
						  <?php
							
							echo form_dropdown('status',$status,set_value('status',$before->status),'class="chzn-select form-control" 	data-placeholder=""');
						?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-4">	
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</section>
    </div>
</div>