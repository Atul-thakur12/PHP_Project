<?php $__env->startSection('title', 'WFD | Services'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb-component', ['page_title' => 'Service']); ?>
    <?php echo $__env->renderComponent(); ?>

     <!--====== SERVICE SECTION START ======-->
     <div class="sotcox-service-section sotcox-service-section-page pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="sotcox-section-heading text-center mb-60">
                        <span class="sub-heading">our services</span>
                        <h2 class="heading">IT solutions for your business</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                        <div class="sotcox-service-item">
                            <div class="icon">
                                <img src="<?php echo e(asset($service->service_icon)); ?>" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="<?php echo e(url('service-detail/'.$service->id)); ?>"><?php echo e($service->service_name); ?></a></h4>
                                <a href="<?php echo e(url('service-detail/'.$service->id)); ?>" class="sotcox-inline-btn">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
    <!--====== SERVICE SECTION END ======-->

    <!--====== PRICING SECTION START ======-->
    
    <!--====== PRICING SECTION END ======-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u157543343/domains/webfreakdevelopment.com/public_html/resources/views/website/services.blade.php ENDPATH**/ ?>