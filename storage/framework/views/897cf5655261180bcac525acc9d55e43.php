<h2 class="text-center text-2xl font-bold text-white">📊Toys:</h2>
<table border="1" class="text-white flex flex-col items-center justify-center">
    <thead>
        <tr class="">
            <th class="font-normal pr-[2rem]">Age Range</th>
            <th class="font-normal pl-[2rem]">Number of Toys</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $ageRanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $range): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="font-normal pr-[8rem]"><?php echo e($range); ?></td>
                <td class="font-normal pr-[2rem]"><?php echo e($range->toys_count); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="font-normal pr-[8rem]"><strong>Total</strong></td>
            <td class="font-normal pr-[2rem]"><strong><?php echo e($totalToys); ?></strong></td>
        </tr>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\Github\SantaClausToysFactory\resources\views/components/toyCount.blade.php ENDPATH**/ ?>