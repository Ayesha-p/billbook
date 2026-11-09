<?php $__env->startSection('title', 'Customer'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold mb-6"><?php echo e($customer->exists ? 'Customer edit karein' : 'Naya customer'); ?></h1>
<form method="POST" action="<?php echo e($customer->exists ? route('customers.update', $customer) : route('customers.store')); ?>" class="bg-white border rounded-lg p-6 max-w-lg space-y-4">
  <?php echo csrf_field(); ?>
  <?php if($customer->exists): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>
  <?php $__currentLoopData = ['name' => 'Naam', 'email' => 'Email', 'phone' => 'Phone', 'address' => 'Address']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <label class="block text-sm"><?php echo e($label); ?>

      <input name="<?php echo e($f); ?>" value="<?php echo e(old($f, $customer->$f)); ?>" class="mt-1 w-full border rounded px-3 py-2">
      <?php $__errorArgs = [$f];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-red-600 text-xs"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </label>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <button class="bg-indigo-700 text-white px-5 py-2 rounded">Save karein</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/customers/form.blade.php ENDPATH**/ ?>