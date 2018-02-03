<?php $__env->startSection('title','Posts'); ?>

<?php $__env->startSection('content'); ?>

 <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row  full-width">

            <div class="col-md-10 col-md-offset-1 text-center title-post">
                    <p><?php echo e($item->title); ?></p>
            </div>

            <div class="col-md-10 col-md-offset-1 columns-post">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="<?php echo e(asset("images/$item->image")); ?>"/>
                        </a>
                    </div>
                </div>
            </div> 

            <div class="col-md-10 col-md-offset-1 desc-post">
                <div class="item-wrapper">
                   <p><?php echo e($item->description); ?></p>
                </div>
            </div>
            
              

                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>