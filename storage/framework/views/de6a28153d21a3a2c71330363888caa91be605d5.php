
<?php $__env->startSection("content"); ?>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST" >
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    
                <label for="exampleInputEmail5">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail5">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>                
                <div class="form-group">
                <label for="exampleInputPassword5">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ECOMM-EN\resources\views/register.blade.php ENDPATH**/ ?>