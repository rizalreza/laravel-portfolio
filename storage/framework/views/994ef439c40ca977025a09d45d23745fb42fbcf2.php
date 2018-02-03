<?php $__env->startSection('title','Items'); ?>
<?php $__env->startSection('content'); ?>



 <!-- products listing -->
         <!-- Latest Posts -->
          


        <div class="container navigasi">
        <br>
         <center><h2>Our Portfolio</h2></center>
        <div class="row full-width">
        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-10 col-md-offset-1 itwrap">
                <div class="item-wrapper">
                    <h3>
                     <center><?php echo e($item->title); ?></center>
                    </h3>
                    <br/>
                    <div class="img-wrapper">
                        <a href="<?php echo e(URL('/post/' . $item->id)); ?>" class="button expanded add-to-cart">
                            View Detail
                        </a>
                        <a href="#">
                            <img src="<?php echo e(asset("images/$item->image")); ?>"/>
                        </a>
                    </div>
                    
                       
                    </a>
                  
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3> No Posts</h3>
            <?php endif; ?>
        </div>  
        </div>
        <br/>
        <br/>
        <br/>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>