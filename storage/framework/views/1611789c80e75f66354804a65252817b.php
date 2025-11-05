<?php $__env->startSection('title', 'WFD | Contact Us'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb-component', ['page_title' => 'Contact Us']); ?>
    <?php echo $__env->renderComponent(); ?>

    <!--====== SUPPORT SECTION START ======-->
    <div class="stocox-support-secttion pt-130 pb-130">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="stocox-support-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="800ms">
                        <div class="icon">
                            <img src="assets/img/icons/support-1.png" alt="">
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">Visit Us Daily</h4>
                            <p><?php echo e($addresses[0]); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="stocox-support-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="icon">
                            <img src="assets/img/icons/support-2.png" alt="">
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">Contact Us</h4>
                            <p>
                                <a href="tel:<?php echo e($contacts[0]); ?>"><?php echo e($contacts[0]); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-30">
                    <div class="stocox-support-box wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="icon">
                            <img src="assets/img/icons/support-3.png" alt="">
                        </div>
                        <div class="content mt-25">
                            <h4 class="title">Email Us</h4>
                            <p>
                                <a href="mailto:<?php echo e($emails[0]); ?>"><?php echo e($emails[0]); ?></a>
                                <a href="mailto:<?php echo e($emails[1]); ?>"><?php echo e($emails[1]); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== SUPPORT SECTION END ======-->

    <!--====== GET QUOTE SECTION START ======-->
    <section class="sotcox-getquote-section pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="sotcox-section-heading sotcox-section-heading__style-2 text-center mb-60">
                        <span class="sub-heading">get free quote</span>
                        <h2 class="heading">Just have a quick any questions?</h2>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-xl-6">
                    <div class="img-wrapper">
                        <img src="<?php echo e(asset('assets/img/bg/contact-us.jpg')); ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sotcox-getquote-form-wrapper">
                        <form action="<?php echo e(url('send_contact_mail')); ?>" method="POST" id="contact-form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="sotcox-input-field mt-30">
                                <label for="name">Name *</label>
                                <input type="text" name="name" id="name" placeholder="Your name">
                            </div>
                            <div class="sotcox-input-field mt-30">
                                <label for="company">Company *</label>
                                <input type="text" name="company_name" id="company" placeholder="Your company name">
                            </div>
                            <div class="sotcox-input-field mt-30">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="email" placeholder="Your email id">
                            </div>
                            <div class="sotcox-input-field mt-30">
                                <label for="subject">Phone no*</label>
                                <input type="tel" name="phone_no" id="phone_no" placeholder="Your phone no.">
                            </div>
                            <div class="sotcox-input-field mt-30">
                                <label for="message">Message *</label>
                                <textarea name="message" id="message" placeholder="Write your requirement..."></textarea>
                            </div>
                            <button type="submit" class="sotcox-btn sotcox-btn__round mt-20" >submit now <span></span></button>
                            <p class="ajax-response"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== GET QUOTE SECTION END ======-->

    <!--====== MAP SECTION END ======-->
    <!--<div class="sotcox-map-section">-->
    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56215.718841453985!2d-0.19959027821222705!3d51.48739183082915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slondon%20eye!5e0!3m2!1sen!2sbd!4v1656749326947!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
    <!--</div>-->
    <!--====== MAP SECTION END ======-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u157543343/domains/webfreakdevelopment.com/public_html/resources/views/website/contact-us.blade.php ENDPATH**/ ?>