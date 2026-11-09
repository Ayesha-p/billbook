<?php $__env->startSection('title', 'Customers'); ?>
<?php $__env->startSection('content'); ?>
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Customers</h1>
  <a href="<?php echo e(route('customers.create')); ?>" class="bg-indigo-700 text-white px-4 py-2 rounded text-sm">Customer add karein</a>
</div>
<div class="bg-white border rounded-lg divide-y">
  <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="p-4 flex justify-between items-center">
      <div><div class="font-medium"><?php echo e($c->name); ?></div><div class="text-sm text-gray-500"><?php echo e($c->email); ?> <?php echo e($c->phone); ?></div></div>
      <div class="flex gap-4 text-sm">
        <a href="<?php echo e(route('customers.edit', $c)); ?>" class="text-indigo-700">Edit</a>
        <form method="POST" action="<?php echo e(route('customers.destroy', $c)); ?>" onsubmit="return confirm('Customer aur uske invoices delete honge. Pakka?')"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button class="text-red-600">Delete</button></form>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="p-8 text-center text-gray-500">Abhi koi customer nahi. Pehla customer add karein.</div>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/customers/index.blade.php ENDPATH**/ ?>