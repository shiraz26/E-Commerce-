
<?php $__env->startSection("content"); ?>
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>AED <?php echo e($total); ?></td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>AED 10</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>AED 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>AED <?php echo e($total+10-10); ?></td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              <?php echo csrf_field(); ?>
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
     </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ECOMM-EN\resources\views/ordernow.blade.php ENDPATH**/ ?>