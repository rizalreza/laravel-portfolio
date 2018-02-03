<?php $__env->startSection('content'); ?>

	<h3>List Post</h3>
	<br>
	<br>
	

<div class="row">
<div class="col-md-12">
<ul>
	<table class="table">

    	 <thead class="thead-light">
      		<tr>
        		<th><center>Title</center></th>
        		<th><center>Description</center></th>
        		<th><center>Image</center></th>
        		<th><center>Action</center></th>


      		</tr>
    	</thead>
		<?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    	<tbody>
      		 <tr>
       		 	<td style="width: 100px;"><br/><br/><?php echo e($item->title); ?></td>
       		 	<td style="width: 200px;"><br/><br/><?php echo e($item->description); ?></td>
       		 	<td><img src='<?php echo e(asset("images/$item->image")); ?>' width=150px height=100px></td>
       		 	<td style="width: 170px;">
            <br/>
            <br/>
            <a class="btn btn-primary" href="<?php echo e(route('item.edit',$item->id)); ?>">Update</a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['item.destroy', $item->id],'style'=>'display:inline']); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

              
                
       		 	</td>
     		 </tr>
   		</tbody>


		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

	<h3>You have no post !!</h3>
	
 	 </table>
    <?php endif; ?>

</ul>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>