<?php $__env->startSection('content'); ?>

   <!-- Caarousel -->
  <div class="container-fluid banner">
    <div class="row text-center full-width">
      <div class="col-xs-12 ">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php echo e(asset('images/banner1.jpg')); ?>">
                      <div class="carousel-caption"></div>
                    </div>
                     <!-- Akhir class item-->
                    <div class="item">
                      <img src="<?php echo e(asset('images/banner1.jpg')); ?>"">
                      <div class="carousel-caption"></div>
                    </div>
                    <!-- Akhir class item-->
                    <div class="item">
                      <img src="<?php echo e(asset('images/banner1.jpg')); ?>"">
                      <div class="carousel-caption"></div>
                    </div>
                    <!-- Akhir class item-->
                     <div class="item">
                      <img src="<?php echo e(asset('images/banner1.jpg')); ?>"">
                      <div class="carousel-caption"></div>
                    </div>
                    <!-- Akhir class item-->
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>

        </div>
     </div>
  </div>
</div>
<!-- Akhir carousel -->
        <br/>
        <div class="subheader text-center">
             <h2>
           Latest Post
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="container">
        <div class="row full-width">
         <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-3 col-sm-6 col-xs-12 columns itwrap">
                <div class="item-wrapper ">
                    <h3>
                     <center><?php echo e($item->title); ?></center>
                    </h3>
                    <br/>
                    <div class="img-wrapper">
                        <a href="<?php echo e(URL('post', $item->id)); ?>" class="button expanded add-to-cart">
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
      



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>