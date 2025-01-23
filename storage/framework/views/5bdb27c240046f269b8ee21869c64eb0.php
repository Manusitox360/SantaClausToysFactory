<?php $__env->startSection('content'); ?>
<section class="flex flex-col items-center justify-center overflow-auto h-[1500px] sm:h-[820px] md:h-[920px] xl:h-[804px]">
    <div class="flex justify-center items-center flex-col text-center">
        <h1 class="text-4xl font-bold text-white p-2 z-10">🎅 Welcome to Santa Claus Toys Factory! 🎁</h1>
        <p class="text-lg text-white">
            From the heart of the North Pole, Father Christmas and his faithful elves work tirelessly to make this Christmas an unforgettable moment. 
            <br>
            Here, in the Magic Workshop, they create the toys
            that will make millions of children around the world smile.
        </p>
    </div>
    <div class="flex flex-col sm:flex-row flex-wrap py-4">
        <div class="flex flex-col lg:px-[4rem] md:px-[2rem] sm:px-[1rem]">
            <div class="flex flex-col items-center justify-center gap-10 sm:gap-12 md:gap-24 py-4">
                <a href="<?php echo e(route('santa')); ?>">
                    <button class="flex h-[255px] flex-col items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                        <div class="items-center font-bold text-3xl">
                            <img class="h-[14rem] w-[13rem]" src="img/GitanoSupremo.png" alt="" />
                        </div>
                    </button>
                </a>
            </div>
            <div class="text-center bg-[#ffffff80] rounded h-[17.7rem] pb-8">
                <?php echo $__env->make('components.kidCount', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="flex flex-col lg:px-[4rem] md:px-[2rem] sm:px-[1rem]">
            <div class="flex flex-col items-center justify-center gap-10 sm:gap-12 md:gap-24 py-4">
                <a href="<?php echo e(route('elf')); ?>"> 
                    <button class="flex h-full flex-wrap items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                        <div class="items-center font-bold text-3xl">
                            <img class="pl-6 h-[13rem] w-[13rem]" src="img/Gitanillo.png" alt=""/>
                        </div>
                    </button>
                </a>
            </div>
            <div class="text-center bg-[#ffffff80] rounded py-2">
                <?php echo $__env->make('components.toyCount', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Github\SantaClausToysFactory\resources\views/home.blade.php ENDPATH**/ ?>