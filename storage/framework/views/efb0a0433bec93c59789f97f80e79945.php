<div class="overflow-x-auto">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          <th>order name</th>
          <th>order date</th>
          <th>shoes count</th>
          <th>price</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="hover">
          <th><?php echo e($order->id); ?></th>
          <td> <?php echo e($order->user()->name); ?></td>
          <td><?php echo e($order->order_date); ?></td>
          <td><?php echo e($order->shoes_count); ?></td>
          <td><?php echo e($order->price); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div><?php /**PATH C:\Users\rivar\laundryshoes\resources\views/components/temp/order-table.blade.php ENDPATH**/ ?>