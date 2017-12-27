<?php $__env->startSection('content'); ?>
	<div class="col-sm-8 blog-main">
		<h1>Publish a post</h1>
		<hr>
		<form method="POST" action="/posts" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>


			<input type="file" name="file" id="file"/>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
				<label for="body">Body</label>
				<textarea id="body" name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>	
		</form>


		<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>