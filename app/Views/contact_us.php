<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivagam</title>
   <link rel="icon" href="<?php echo WEB_DIR ?>images/favicon1.png" sizes="16x16" />
<link rel="stylesheet" href="<?php echo WEB_DIR ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo WEB_DIR ?>css/font-awesome.css">
<link rel="stylesheet" href="<?php echo WEB_DIR ?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo WEB_DIR ?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo WEB_DIR ?>css/style.css">

    <style>
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
        .spinner-border {
            width: 2rem;
            height: 2rem;
        }
    </style>
   
</head>
<body>
    <?= view('header') ?>
    <main>
        <section class="section-top-gap pt-lg-5 pt-4 pb-lg-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="title h2 mb-lg-5 mb-4">Contact Us</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 order-md-1 order-2">
                        <a href="mailto:info@ivagaminfotechech.com" class="contact-link">
                            <span><i class="fa fa-envelope"></i></span> info@ivagaminfotech.com
                        </a>
                        <a href="tel:+91 98942 04012" class="contact-link">
                            <span><i class="fa fa-phone"></i></span> +91 98942 04012
                        </a>
                        <p class="add">
                            <span><i class="fa fa-map-marker-alt"></i></span>
                            117 Bye Pass, Main Rd, Gandhi Nagar, Tiruvennanallur, Tiruvannamalai, Tamil Nadu 606601
                        </p>

                        <div class="map-container">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974.8225680846292!2d79.07780916453501!3d12.22861453724471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bacc09af82597bd%3A0x5c2b73548828040e!2sivagam%20Infotech%20private%20limited!5e0!3m2!1sen!2sin!4v1730821267008!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 mb-lg-0 mb-4">
                        <h4 class="mb-4">Send us a message</h4>
                        <div id="successMessage" class="alert alert-success" style="display: none;">
                            We received your details. Our support team will contact you soon.
                        </div>
                        <form action="" class="contact-form" id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter your phone">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                                </div>
                                <div class="form-group" style="display: flex; flex-direction: row;">
                                    <input class="form-control" type="text" name="captcha" placeholder="Enter Captcha" autocomplete="off" style="width:59%;" maxlength="4" required>
                                    <span style="padding-left: 10px; color: #0dcaf0; font-weight: bold; font-size: 26px;" id="image_captcha"><?php echo $captcha; ?></span>
                                    <button type="button" onClick="captchaRefresh()" class="btn btn-outline-primary" style="width: 40px; height: 40px; padding: 5px; margin-left: 10px;margin-top: 3px; position: relative; font-size: 14px; border-radius: 50%;" id="captcha-refresh">
                                        <img src="https://cdn-icons-png.flaticon.com/128/2267/2267901.png" alt="Refresh" style="width: 30px; height: 30px;" /> <!-- Custom image for refresh -->
                                        <span class="spinner-border spinner-border-sm" id="refresh-spinner" style="position: absolute; display: none; top: 50%; left: 50%; transform: translate(-50%, -50%);"></span> <!-- Spinner -->
                                    </button>


                                </div>

                                <label id="captcha-error" style="display: none;" class="error" for="captcha">Please enter the CAPTCHA code</label>
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary" value="Send message">
                                    <div id="spinner" class="spinner-border text-primary" role="status"  aria-live="polite" style="display: none; margin-left: 10px;">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= view('footer') ?>
    <script src="<?php echo WEB_DIR ?>js/jquery.min.js"></script>

<script src="<?php echo WEB_DIR ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/owl.carousel.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/custom.js"></script>
<script src="<?php echo WEB_DIR ?>js/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function () {
            $("#contactForm").validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2
                    },
                   
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 15
                    },
                    message: {
                        required: true,
                        minlength: 10
                    },
                    captcha: {
                        required: true,
                        minlength: 4,
                        maxlength: 4
                    }
                },
                messages: {
                    first_name: {
                        required: "Please enter your first name",
                        minlength: "First name must be at least 2 characters long"
                    },
                    last_name: {
                        required: "Please enter your last name",
                        minlength: "Last name must be at least 2 characters long"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    phone: {
                        required: "Please enter your phone number",
                        digits: "Please enter only numbers",
                        minlength: "Phone number must be at least 10 digits",
                        maxlength: "Phone number cannot exceed 15 digits"
                    },
                    message: {
                        required: "Please enter your message",
                        minlength: "Message must be at least 10 characters long"
                    },
                    captcha: {
                        required: "Please enter the CAPTCHA code",
                        minlength: "CAPTCHA must be 4 characters",
                        maxlength: "CAPTCHA cannot exceed 4 characters"
                    }
                },
                errorPlacement: function (error, element) {
                    if (element.attr("name") == "captcha") {
                        error.insertAfter("#captcha-error");
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function (form) {
                    $('#spinner').show();
                    $.ajax({
                        url: "<?php echo base_url('home/sendEmail'); ?>",
                        type: "POST",
                        data: $(form).serialize(),
                        success: function (response) {
                            captchaRefresh();
                            $('#spinner').hide();
                            if (response === "success") {
                                form.reset();
                                $('#successMessage').fadeIn().delay(5000).fadeOut();
                            } else if (response === "incorrect_captcha") {
                                $('#captcha-error').text("Incorrect CAPTCHA code. Please try again.").show();
                            } else {
                                alert("Failed to send message. Please try again.");
                            }
                        },
                        error: function () {
                            captchaRefresh();
                            $('#spinner').hide();
                            alert("An error occurred. Please try again.");
                        }
                    });
                }
            });
        });

    </script>
     <script>
        function captchaRefresh(){
            spinner.style.display = 'inline-block';
            $.get('<?php echo base_url('home/refresh'); ?>', function(data){
                $('#image_captcha').html(data);
                spinner.style.display = 'none';
            });
        }
    </script>
</body>
</html>
