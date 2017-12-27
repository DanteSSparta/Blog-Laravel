<?php $__env->startSection('content'); ?>
	<div class="col-sm-8">
		<h1>Sign In</h1>

		<form method="POST" action="/login">
			<?php echo e(csrf_field()); ?>


			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" class="form-control" required></input>
			</div>

			<div class="form-group">
				 <label for="password">Password:</label>
				 <input type="password" class="form-control" name="password" id="password" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>	
			
		</form>

		<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>