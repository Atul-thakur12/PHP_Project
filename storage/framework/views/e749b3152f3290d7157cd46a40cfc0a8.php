<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Email</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> <?php echo e($name); ?></p>
    <p><strong>Company Name:</strong> <?php echo e($company_name); ?></p>
    <p><strong>Email id:</strong> <?php echo e($email); ?></p>
    <p><strong>Phone no.:</strong> <?php echo e($phone_no); ?></p>
    
    <p>Thank you for reaching out to us.</p>
</body>
</html>
<?php /**PATH /home/u157543343/domains/webfreakdevelopment.com/public_html/resources/views/email/contact-form-mail.blade.php ENDPATH**/ ?>