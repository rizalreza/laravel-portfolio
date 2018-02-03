<?php $__env->startSection('content'); ?>

	<h3>Edit Post</h3>
	<br>
	<br>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			<?php echo Form::model($item,['route' => ['item.update',$item->id], 'method' => 'PUT', 'files' => true]); ?>

			

			<div class="form-group">
					<?php echo e(Form::label('title','Title')); ?>

					<?php echo e(Form::text('title', null, array('class' => 'form-control'))); ?>

			</div>

			

			<div class="form-group">
					<?php echo e(Form::label('description','Description')); ?>

					<?php echo e(Form::textarea('description', null, array('class' => 'form-control','rows' => 8, 'cols' => 40))); ?>

			</div>

			<div class="form-group">
					<?php echo e(Form::label('image','Image')); ?>

					<?php echo e(Form::file('image',array('class' => 'form-control'))); ?>

			</div>

			<div class="form-group">
					
					<?php echo e(Form::submit('Update',array('class' => 'btn btn-primary'))); ?>

			</div>



			<?php echo Form::close(); ?>

		</div>

	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>