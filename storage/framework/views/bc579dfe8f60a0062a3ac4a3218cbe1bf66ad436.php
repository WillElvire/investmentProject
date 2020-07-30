<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
       
   <?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('partials/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
     
          <?php echo $__env->yieldContent('container'); ?>
     
    </body>
   <?php echo $__env->make('partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('partials/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH /home/nagninimeta/Documents/PROJET/laravel/investmentProject/resources/views/welcome.blade.php ENDPATH**/ ?>