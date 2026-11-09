<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title', 'BillBook'); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">
<div class="md:flex min-h-screen">
  <aside class="md:w-56 bg-indigo-950 text-indigo-100 p-4 md:min-h-screen">
    <div class="font-bold text-xl text-white mb-6">BillBook</div>
    <nav class="flex md:flex-col gap-1 text-sm">
      <a href="<?php echo e(route('dashboard')); ?>" class="px-3 py-2 rounded hover:bg-indigo-900">Dashboard</a>
      <a href="<?php echo e(route('invoices.index')); ?>" class="px-3 py-2 rounded hover:bg-indigo-900">Invoices</a>
      <a href="<?php echo e(route('customers.index')); ?>" class="px-3 py-2 rounded hover:bg-indigo-900">Customers</a>
      <form method="POST" action="<?php echo e(route('logout')); ?>" class="md:mt-6"><?php echo csrf_field(); ?><button class="px-3 py-2 text-indigo-300">Logout</button></form>
    </nav>
  </aside>
  <main class="flex-1 p-6">
    <?php if(session('ok')): ?><div class="mb-4 rounded bg-green-50 text-green-800 px-4 py-2 text-sm"><?php echo e(session('ok')); ?></div><?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
</div>
</body>
</html>
<?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/layouts/app.blade.php ENDPATH**/ ?>