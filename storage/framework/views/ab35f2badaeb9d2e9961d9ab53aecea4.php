<?php $__env->startSection('content'); ?>
<div class="flex justify-center items-center pt-6">
    <a href="<?php echo e(route('santaGifts')); ?>"><button class="bg-candy-cane px-4 py-2 rounded-lg uppercase transform hover:scale-110 duration-500 font-bold">🎁Give Gifts🎁</button></a>
</div>
<div class="flex flex-wrap py-8 gap-[6rem] items-center justify-center">
    <?php $__currentLoopData = $listOfGifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gifts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $kid = $gifts[0];
            $listOfToys = $gifts[1];
        ?>
        <div class="w-[20rem] bg-[#ffffff80] border border-gray-200 rounded-lg shadow">
            <div class="flex flex-col min-h-[20rem] max-h-[20rem] items-center pt-8">
                <a href="<?php echo e(route('santaShow', $kid->id)); ?>"><img class="w-24 h-24 mb-3 rounded-full shadow-lg hover:scale-110 transition duration-500 object-cover" src="<?php echo e($kid->image); ?>" alt="Kid Images"/></a>
                <h5 class="text-xl px-12 uppercase font-bold text-black border-b border-black "><?php echo e($kid->name); ?></h5>
                <?php $__currentLoopData = $listOfToys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center justify-center text-center pt-4 pb-2 px-[2rem] text-sm w-full">
                    <a href="<?php echo e(route('elfShow', $toy->id)); ?>" class="hover:scale-110 transition duration-500 uppercase font-bold text-gray-800"><?php echo e($toy->name); ?> - (<?php echo e($toy->toyType->associated->name); ?>)</a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Github\SantaClausToysFactory\resources\views/gift.blade.php ENDPATH**/ ?>