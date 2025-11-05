<?php $__env->startSection('title', 'WFD | Service Details'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb-component', ['page_title' => 'Service Details']); ?>
    <?php echo $__env->renderComponent(); ?>

    <!--====== SERVICE SECTION END ======-->
    <div class="sotcox-details-page sotcox-team-details-page sotcox-service-details-page pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="details-wrapper pr-25">
                        <div class="details-thumb">
                            <img src="<?php echo e(asset($serviceDetail->service_banner)); ?>" alt="img">
                        </div>
                        <div class="details-content mt-60">
                            <h2 class="sotcox-title mb-25"><?php echo e($serviceDetail->service_name); ?> </h2>
                            <p><?php echo $serviceDetail->service_detail; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blog_sidebar service-sidebar mt-none-60">
                        <div class="blog_widget widget mt-60 widget_categories">
                            <h2 class="blog-widget-title">Services</h2>
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="cat-item"><a href="<?php echo e(url('service-detail/'.$service->id)); ?>"><?php echo e($service->service_name); ?></a><span class="count">0<?php echo e($key+1); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-xl-12"><h2 class="sotcox-title mt-85 mb-25">Explore our audit & assurance services</h2></div>
                <div class="col-xl-10 col-lg-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 mt-30">
                            <div class="stocox-support-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="800ms">
                                <div class="icon">
                                    <img src="<?php echo e(asset('assets/img/icons/service-details-icon-1.png')); ?>" alt="">
                                </div>
                                <div class="content mt-25">
                                    <h4 class="title">Top Flexibility</h4>
                                    <p>Flexibility Training & Stretching Exercise at Home.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mt-30">
                            <div class="stocox-support-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                                <div class="icon">
                                    <img src="<?php echo e(asset('assets/img/icons/service-details-icon-2.png')); ?>" alt="">
                                </div>
                                <div class="content mt-25">
                                    <h4 class="title">Time Saving</h4>
                                    <p>The time usually needed to do something a time-saving.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mt-30">
                            <div class="stocox-support-box wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                                <div class="icon">
                                    <img src="<?php echo e(asset('assets/img/icons/service-details-icon-3.png')); ?>" alt="">
                                </div>
                                <div class="content mt-25">
                                    <h4 class="title">Management</h4>
                                    <p>Management is the administration  science of an organization. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== SERVICE SECTION END ======-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u157543343/domains/webfreakdevelopment.com/public_html/resources/views/website/service-details.blade.php ENDPATH**/ ?>