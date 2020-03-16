<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-xl-4">
				<div class="card">
					<img src="static/images/<?php echo $image?>" style="height: 100%" class="card-img">
				</div>
			</div>	
			<div class="col-md-8 col-lg-8 col-xl-8">
				<div class="form-group">
					<label>Title</label>
					<input type="text" class="form-control" name="title" value="<?php echo $title?>">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control">
						<?php echo $description?>
					</textarea>
				</div>
				<input hidden type="text" name="old_image" value="<?php echo $image?>">
				<input type="file" name="vew_image" >
				<button class="btn btn-info btn-lg">Update</button>
			</div>		
		</div>
	</form>
</div>	