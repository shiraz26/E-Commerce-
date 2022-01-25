
<?php $__env->startSection("content"); ?>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/<?php echo e($item->id); ?>">
                    <img class="trending-image" src="<?php echo e($item->gallery); ?>">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2><?php echo e($item->name); ?></h2>
                      <h5><?php echo e($item->description); ?></h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/<?php echo e($item->cart_id); ?>" class="btn btn-warning" >Remove to Cart</a>
             </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ECOMM-EN\resources\views/cartlist.blade.php ENDPATH**/ ?>