<?php $__env->startSection('title', 'WFD | About Us'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb-component', ['page_title' => 'About Us']); ?>
    <?php echo $__env->renderComponent(); ?>

    <!--====== ABOUT SECTION START ======-->
    <div class="sotcox-about-section sotcox-about-section__style-2 pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sotcox-section-heading sotcox-section-heading__style-2">
                        <span class="sub-heading">ABOUT US</span>
                        <h2 class="heading">Empowering Your <br> Business with <br> Innovative IT Solutions</h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="abt-desc">
                        <p>At WebFreak Development, we are a trusted partner in providing cutting-edge IT services and expert consultancy tailored to your business needs. Our team of skilled professionals leverages the latest technologies to help you optimize operations, enhance security, and drive growth. Whether you're looking to improve your IT infrastructure, streamline processes, or navigate complex tech challenges, we offer strategic guidance and customized solutions that deliver measurable results. With a commitment to excellence and a passion for innovation, we ensure that your business stays ahead in the ever-evolving digital landscape.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="sotcox-video-img mt-75">
                        <div class="thumb">
                            <img src="<?php echo e(asset('assets/img/bg/about-us-b1.jpg')); ?>" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== ABOUT SECTION END ======-->

    <!--====== MISSION-VISSION SECTION END ======-->
    <div class="sotcox-mission-section">
        <div class="container">
            <div class="row mt-none-30">
                
                <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                    <div class="sotcox-mission-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="icon icon__2">
                            <img src="assets/img/icons/mission-2.png" alt="">
                        </div>
                        <div class="content mt-25">
                            <h2 class="title">Our mission</h2>
                            <p>At WebFreak Development, our mission is to provide businesses with innovative IT solutions and expert consultancy that drive growth, enhance efficiency, and streamline operations. We aim to simplify technology, enabling clients to focus on what matters most—achieving success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 mt-30">
                    <div class="sotcox-mission-box wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="icon icon__3">
                            <img src="assets/img/icons/mission-3.png" alt="">
                        </div>
                        <div class="content mt-25">
                            <h2 class="title">Our vission</h2>
                            <p>We envision WebFreak Development as a leading IT partner, empowering businesses to adapt, grow, and succeed in an ever-changing digital world. Through cutting-edge solutions and expert guidance, we help companies stay ahead of the curve.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== MISSION-VISSION SECTION END ======-->

    <!--====== WCU SECTION START ======-->
    <div class="sotcox-about-section sotcox-about-section__style-2 pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="sotcox-section-heading sotcox-section-heading__style-2">
                        <span class="sub-heading">why choose us</span>
                        <h2 class="heading">Transforming Ideas <br> into Digital Success</h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="abt-desc">
                        <p>At WebFreak Development, we specialize in turning your business ideas into powerful digital solutions. From web development and software engineering to IT consultancy, we bring innovative strategies that enhance user experiences, improve functionality, and drive long-term success. With a focus on delivering customized and scalable solutions, we empower your business to thrive in the digital world.</p>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="sotcox-video-img mt-75">
                        <div class="thumb">
                            <img src="<?php echo e(asset('assets/img/bg/about-us-b2.jpg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== WCU SECTION END ======-->

    <!--====== TEAM SECTION START ======-->
    <section class="sotcox-team-section fix mt-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="sotcox-section-heading sotcox-section-heading__style-2 text-center mb-60">
                        <span class="sub-heading">our team</span>
                        <h2 class="heading">Our dedicated team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="sotcox-team-slider owl-carousel sotcox-slide-nav" data-team-slider>
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="sotcox-team-item text-center">
                                <div class="thumb">
                                    <img src="<?php echo e(asset($team->pic)); ?>" alt="">
                                </div>
                                <div class="info mt-25">
                                    <h6 class="title"><?php echo e($team->member_name); ?></h6>
                                    <span class="sub-title"><?php echo e($team->position); ?></span>
                                    
                                    <div class="sotcox-social-links mt-20">
                                        <?php if(!empty($team->facebook)): ?>
                                            <a href="<?php echo e($team->facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($team->instagram)): ?>
                                            <a href="<?php echo e($team->instagram); ?>"><i class="fab fa-instagram"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($team->twitter)): ?>
                                            <a href="<?php echo e($team->twitter); ?>"><i class="fab fa-twitter"></i></a>
                                        <?php endif; ?>
                                        <?php if(!empty($team->linkedin)): ?>
                                            <a href="<?php echo e($team->linkedin); ?>"><i class="fab fa-linkedin-in"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== TEAM SECTION END ======-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u157543343/domains/webfreakdevelopment.com/public_html/resources/views/website/about-us.blade.php ENDPATH**/ ?>