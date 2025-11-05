<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="ZzpjmyA-9aK7HSvhlsNV2poi3pZwq3IYsfq-Jk6Yme0" />

    <!--====== Title ======-->
    <title><?php echo $__env->yieldContent('title', 'WFD'); ?></title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/logo/srt-logo-rb.ico')); ?>" type="images/x-icon">

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lightcase.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/meanmenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ukit.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/odometer.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">

    <style>
        /* Hide the menu button by default */
        .sideinfo-trigger {
            display: none;
            cursor: pointer; /* Optional: to indicate it's clickable */
        }

        /* Show the menu button only on mobile screens (e.g., up to 768px) */
        @media (max-width: 768px) {
            .sideinfo-trigger {
                display: block; /* Show the menu button on mobile view */
                padding-top: 20%;
            }

            .sideinfo-trigger span {
                display: block; /* Show the menu button on mobile view */
                margin-top: 10%;
                padding-top: 5%;
            }
        }
    </style>
    
    <!-- Organization Schema with Logo, Contact Info, Email, and Social Media -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Web Freak Development",
  "url": "https://webfreakdevelopment.com",
  "logo": "https://webfreakdevelopment.com/assets/img/logo/sert-rb.png",
  "email": "mailto:info@webfreakdevelopment.com",
  "sameAs": [
    "https://www.facebook.com/people/WebFreak/100078702931349/",
    "https://www.instagram.com/webfreak.development/",
    "https://x.com/WebFreakDev",
    "https://www.linkedin.com/company/webfreak-development"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-888-785-1016",
    "contactType": "Customer Support",
    "areaServed": "Worldwide",
    "availableLanguage": "English"
  }
}
</script>

<!-- WebSite Schema with SearchAction -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Web Freak Development",
  "url": "https://webfreakdevelopment.com",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://webfreakdevelopment.com/?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<!-- Site Navigation (Sitelinks) Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "itemListElement": [
    {
      "@type": "SiteNavigationElement",
      "position": 1,
      "name": "About Us",
      "url": "https://webfreakdevelopment.com/about-us"
    },
    {
      "@type": "SiteNavigationElement",
      "position": 2,
      "name": "Services",
      "url": "https://webfreakdevelopment.com/service-detail"
    },
    {
      "@type": "SiteNavigationElement",
      "position": 3,
      "name": "Contact Us",
      "url": "https://webfreakdevelopment.com/contact-us"
    }
  ]
}
</script>

</head>

<body>

    <?php echo $__env->make('website.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('website.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--========= JS Here =========-->
    <script src="<?php echo e(asset('assets/js/jquery-3.7.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.meanmenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/uikit.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lightcase.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/waypoint.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/js-jquery.knob.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/js-jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/odometer.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/u157543343/domains/webfreakdevelopment.com/public_html/resources/views/website/layouts/layout-master.blade.php ENDPATH**/ ?>