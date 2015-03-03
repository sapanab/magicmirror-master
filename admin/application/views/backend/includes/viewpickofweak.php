<div class=" row" style="padding:1% 0;">
	<div class="col-md-12">
	<div class=" pull-right col-md-1 createbtn" ><a class="btn btn-primary" href="<?php echo site_url('site/createpickofweak'); ?>"><i class="icon-plus"></i>Create </a></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Pickofweak Details
            </header>
			<table class="table table-striped table-hover border-top " id="sample_1" cellpadding="0" cellspacing="0" >
			<thead>
				<tr>
					<!--<th>Id</th>-->
					<th>Image</th>
					<th>Order</th>
					<th> Actions </th>
				</tr>
			</thead>
<!--						<td><img src="<?php echo base_url('uploads')."/".$row->image; ?>" width="50px" height="auto"></td>-->
			<tbody>
			   <?php foreach($table as $row) { ?>
					<tr>
						<!--<td><?php echo $row->id; ?></td>-->
						<td><img src="<?php echo base_url('uploads')."/".$row->image; ?>" width="50px" height="auto"></td>
						<td><?php echo $row->firstname." ".$row->lastname; ?></td>
						<td> <a class="btn btn-primary btn-xs" href="<?php echo site_url('site/editpickofweak?id=').$row->id;?>"><i class="icon-pencil"></i></a>
                                      <a class="btn btn-danger btn-xs" href="<?php echo site_url('site/deletepickofweak?id=').$row->id; ?>"><i class="icon-trash "></i></a>
									 
					  </td>
					</tr>
					<?php } ?>
			</tbody>
			</table>
		</section>
	</div>
  </div>
