<?php $__env->startSection('content'); ?>
<div class="flex justify-center px-[2.4rem] sm:px-[6rem] py-12">
    <table class="text-white w-full ">
        <thead class="text-xs bg-candy-cane uppercase text-black sticky top-[9.2rem] sm:top-[4.7rem] z-10">
            <tr>
                <th scope="col" class="py-[0.4rem] text-xl rounded-t-lg">Kids</th>
            </tr>
        </thead>
        <tbody class="flex flex-wrap rounded-b-lg items-center justify-center bg-[#ffffff80] z-10 font-bold text-black">
            <?php $__currentLoopData = $kids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <a class="flex justify-center items-center flex-col" href="<?php echo e(route('santaShow', $kid->id)); ?>">
                            <div class="flex min-h-[4rem] max-w-[10rem] items-center justify-center uppercase text-xs pt-2 text-center"><?php echo e($kid->id); ?>. <?php echo e($kid->name); ?> <?php echo e($kid->surname); ?></div>
                            <img class="z-0 transition hover:scale-110 duration-500 rounded-full p-4 w-[12rem] min-h-[12rem] max-h-[12rem] object-cover" src="<?php echo e($kid->image); ?>" alt="image">
                        </a>
                    </td>
                </tr>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Github\SantaClausToysFactory\resources\views/santa.blade.php ENDPATH**/ ?>