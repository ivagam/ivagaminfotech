<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ivagam</title>
    <link rel="icon" href="<?php echo WEB_DIR?>images/favicon1.png" sizes="16x16" />
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/style.css">
</head>
<body>
    <?= view('header') ?>
    <main>
    <section class="banner-section">
            <div class="hero-carousel">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="caption text-center">
                            <h1>Driving Innovation, One Line of Code at a Time</h1>
                            <a href="<?php echo WEB_DIR; ?>contact-us" class="btn_ primaary">Get a quote</a>
                            </div>
                        <div class="img-box">
                            <img src="<?php echo WEB_DIR?>images/ivagam-infotech-private-limited-software-company2.jpg" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="caption text-center">
                            <h1>Transforming Your Ideas into Custom Solutions</h1>
                            <a href="<?php echo WEB_DIR; ?>contact-us" class="btn_ primaary">Read More</a>
                            </div>
                        <div class="img-box">
                            <img src="<?php echo WEB_DIR?>images/hero2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="brand-list-section">
            <div class="brand-list">
                <div class="owl-carousel">
                <div class="item">
                <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand1.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand3.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand4.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand5.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand6.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand1.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand3.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand4.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand5.png" alt=""></div>
</div>
<div class="item">
    <div class="clc"><img src="<?php echo WEB_DIR ?>images/brand6.png" alt=""></div>
</div>


                </div>
            </div>
        </section>
        <!--  -->
        <section class="home-about-section section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2 pe-lg-5">
                        <div class="title mb-lg-5 mb-4">
                            
                            <h2 class="">About Ivagam Infotech Private Limited</h2>
                        </div>
                        <p>
                        Ivagam Infotech Private Limited has been a prominent player in the software development industry for the past eight years, driven by the leadership of directors P. Murugan and R. Pasupathi. Based in the vibrant town of Tiruvannamalai, Tamil Nadu, the company has established itself as a trusted partner for businesses seeking innovative and reliable technology solutions.                        </p>
            <a href="<?php echo WEB_DIR ?>about-us" class="btn_ primaary">Read more</a>
                        </div>
                    <div class="col-lg-6 mb-lg-0 mb-4 order-lg-2 order-1">
                    <img src="<?php echo WEB_DIR ?>images/img1.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="services-section section-padding" style="background-image: url('<?php echo WEB_DIR ?>images/bg.jpg');">
        <div class="container">
                <div class="row">
                    <div class="col-12   text-center ">
                        <div class="title mb-lg-5 mb-4">
                            
                            <h2 class="text-white">Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-carousel">
                            <div class="owl-carousel">
                            <?php foreach ($service as $row) : ?>
                                <div class="item">
                                    <div class="service-box">
                                        <div class="icon">
                                            <svg fill="#fff" width="40px" height="40px" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path d="M22.5 15c-.822 0-1.5.678-1.5 1.5v.785c-.393.114-.77.267-1.13.465l-.313-.314c-.582-.582-1.54-.582-2.12 0-.583.58-.583 1.54 0 2.12l.313.315c-.2.36-.354.736-.47 1.13h-.78c-.822 0-1.5.678-1.5 1.5s.678 1.5 1.5 1.5h.785c.114.393.267.77.465 1.13l-.314.313c-.582.582-.582 1.54 0 2.12.58.583 1.54.583 2.12 0l.315-.313c.36.2.736.354 1.13.47v.78c0 .822.678 1.5 1.5 1.5s1.5-.678 1.5-1.5v-.785c.393-.114.77-.267 1.13-.465l.313.314c.582.582 1.54.582 2.12 0 .583-.58.583-1.54 0-2.12l-.313-.315c.2-.36.354-.736.47-1.13h.78c.822 0 1.5-.678 1.5-1.5s-.678-1.5-1.5-1.5h-.785c-.114-.393-.267-.77-.465-1.13l.314-.313c.582-.582.582-1.54 0-2.12-.58-.583-1.54-.583-2.12 0l-.315.313c-.36-.2-.736-.354-1.13-.47v-.78c0-.822-.678-1.5-1.5-1.5zm0 1c.286 0 .5.214.5.5v1c0 .328.084.508.38.588.57.115 1.112.34 1.597.66.198.132.462.106.63-.062l.543-.543c.202-.202.505-.202.707 0 .202.202.202.505 0 .707l-.543.543c-.168.167-.195.43-.064.628.32.486.544 1.028.658 1.597.08.302.344.383.592.383h1c.286 0 .5.214.5.5 0 .286-.214.5-.5.5h-1c-.394 0-.528.158-.588.38-.115.57-.34 1.112-.66 1.597-.132.198-.106.462.062.63l.543.543c.202.202.202.505 0 .707-.202.202-.505.202-.707 0l-.543-.543c-.167-.168-.43-.195-.628-.064-.486.32-1.028.544-1.597.658-.264.07-.383.34-.383.592v1c0 .286-.214.5-.5.5-.286 0-.5-.214-.5-.5v-1c0-.37-.138-.523-.38-.588-.57-.115-1.112-.34-1.597-.66-.198-.132-.462-.106-.63.062l-.543.543c-.202.202-.505.202-.707 0-.202-.202-.202-.505 0-.707l.543-.543c.168-.167.195-.43.064-.628-.32-.486-.544-1.028-.658-1.597-.05-.252-.262-.383-.592-.383h-1c-.286 0-.5-.214-.5-.5 0-.286.214-.5.5-.5h1c.445 0 .524-.143.588-.38.115-.57.34-1.112.66-1.597.132-.198.106-.462-.062-.63l-.543-.543c-.202-.202-.202-.505 0-.707.202-.202.505-.202.707 0l.543.543c.167.168.43.195.628.064.486-.32 1.028-.544 1.597-.658.402-.092.383-.406.383-.592v-1c0-.286.214-.5.5-.5zm0 4c-1.375 0-2.5 1.125-2.5 2.5s1.125 2.5 2.5 2.5 2.5-1.125 2.5-2.5-1.125-2.5-2.5-2.5zm0 1c.834 0 1.5.666 1.5 1.5s-.666 1.5-1.5 1.5-1.5-.666-1.5-1.5.666-1.5 1.5-1.5zm-10-13C10.02 8 8 10.02 8 12.5s2.02 4.5 4.5 4.5 4.5-2.02 4.5-4.5S14.98 8 12.5 8zm0 1c1.94 0 3.5 1.56 3.5 3.5S14.44 16 12.5 16 9 14.44 9 12.5 10.56 9 12.5 9zm-1-9c-.822 0-1.5.678-1.5 1.5v1.91c-.763.21-1.494.51-2.182.9L5.943 2.437c-.582-.582-1.54-.582-2.123 0L2.406 3.85c-.58.58-.58 1.54 0 2.12l1.887 1.887c-.382.677-.68 1.394-.887 2.143H1.5c-.822 0-1.5.678-1.5 1.5v2c0 .822.678 1.5 1.5 1.5h1.908c.207.757.507 1.48.893 2.164l-1.894 1.893c-.582.582-.582 1.54 0 2.123l1.414 1.414c.582.582 1.54.582 2.123 0l1.897-1.9c.68.39 1.404.69 2.16.898V23.5c0 .822.678 1.5 1.5 1.5h2c.664 0 .66-1 0-1h-2c-.286 0-.5-.214-.5-.5v-2.234c0-.234-.16-.437-.39-.49-.93-.212-1.82-.58-2.63-1.09-.196-.124-.452-.095-.617.068l-.006.01-.003.004-2.118 2.12c-.2.2-.507.2-.71 0l-1.413-1.415c-.2-.202-.2-.508 0-.71l2.123-2.12.004-.004.002-.003c.162-.165.19-.42.067-.616-.508-.81-.874-1.7-1.085-2.63-.052-.23-.255-.39-.49-.39H1.5c-.286 0-.5-.214-.5-.5v-2c0-.286.214-.5.5-.5h2.234c.234 0 .437-.16.49-.39.21-.923.574-1.806 1.077-2.61.125-.198.095-.454-.07-.62L3.113 5.265c-.202-.202-.202-.505 0-.707l1.414-1.414c.202-.202.508-.202.71 0L7.34 5.248c.165.165.42.194.62.07.814-.512 1.71-.88 2.647-1.093.228-.052.39-.255.39-.49V1.5c0-.286.214-.5.5-.5h2c.286 0 .5.214.5.5v2.234c0 .234.16.437.39.49.93.212 1.817.58 2.626 1.089.197.123.454.094.62-.07l2.1-2.1c.202-.202.505-.202.707 0l1.414 1.414c.202.202.202.505 0 .707L19.764 7.36c-.165.164-.194.42-.07.62.506.81.87 1.697 1.08 2.63.053.228.256.39.49.39H23.5c.286 0 .5.214.5.5v2c0 .668 1 .652 1 0v-2c0-.822-.678-1.5-1.5-1.5h-1.908c-.207-.756-.505-1.48-.89-2.164l1.862-1.865c.582-.58.582-1.54 0-2.12L21.15 2.436c-.58-.582-1.54-.582-2.12 0l-1.87 1.87c-.68-.39-1.405-.69-2.16-.898V1.5c0-.822-.678-1.5-1.5-1.5z"/></svg>
                                        </div>
                                        <h4 class="mb-3 text-uppercase"><?php echo $row->title; ?></h4>
                                        <?php echo $row->description; ?>
                                        <a href="#" class=""><i class="fa-regular fa-arrow-right"></i> Read more</a>
                                    </div>
                                </div>
                                
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="#" class="btn_ medium primaary">All services</a>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="our-expertise section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title mb-lg-5 mb-4">
                            
                            <h2>Our Expertise</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="expertise-carousel">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="expertise-box">
                                        <a href="#">
                                            <div class="icon">
                                                <svg fill="#041b3a" height="60px" width="60px" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                viewBox="-63 65 128 128" xml:space="preserve">
                                                <path d="M-32.6,131.7l-2.1,2.2l4,3.7l2.1-2.2c0.9,0.5,1.9,0.9,2.8,1l0.1,3l5.4-0.2l-0.1-3c1-0.2,1.9-0.7,2.7-1.2l2.2,2.1l3.7-4
                                                    l-2.2-2.1c0.5-0.9,0.9-1.9,1-2.8l3-0.1l-0.2-5.5l-3,0.1c-0.2-1-0.7-1.9-1.2-2.7l2.1-2.2l-4-3.7l-2.1,2.2c-0.9-0.5-1.9-0.9-2.8-1
                                                    l-0.1-3l-5.4,0.2l0.1,3c-1,0.2-1.9,0.7-2.7,1.2l-2.2-2.1l-3.7,4l2.2,2.1c-0.5,0.9-0.9,1.9-1,2.8l-3,0.1l0.2,5.4l3-0.1
                                                    C-33.6,130-33.2,130.9-32.6,131.7z M-23.7,118.6c4.1-0.1,7.4,3,7.5,7.1s-3,7.4-7.1,7.5s-7.4-3-7.5-7.1
                                                    C-30.9,122.1-27.7,118.7-23.7,118.6z M-22.2,149.3l-0.1-3.7l-2.9,0.1c-0.1-0.2-0.1-0.4-0.2-0.5l2.1-2.1l-2.7-2.6l-2,2.1
                                                    c-0.2-0.1-0.4-0.2-0.6-0.2l-0.1-2.9l-3.7,0.1l0.1,2.9c-0.1,0-0.2,0.1-0.4,0.2c-0.1,0-0.2,0.1-0.2,0.1l-2.1-2l-2.6,2.7l2.1,2
                                                    c-0.1,0.2-0.2,0.4-0.2,0.6l-2.9,0.1l0.1,3.7l2.9-0.1c0.1,0.2,0.2,0.4,0.2,0.5l-2.1,2.2l2.7,2.6l2.1-2.2c0.2,0.1,0.3,0.1,0.5,0.2
                                                    l0.1,3l3.7-0.1l-0.1-3c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2-0.1l2.2,2.1l2.6-2.7l-2.2-2.1c0.1-0.2,0.2-0.3,0.2-0.5L-22.2,149.3z
                                                    M-28.3,148.9c-0.6,1.1-2,1.6-3.1,1c-1.1-0.6-1.6-2-1-3.1c0.6-1.1,2-1.6,3.1-1C-28.2,146.4-27.8,147.8-28.3,148.9z M-37.4,140.8
                                                    l-3.6-3.3c0.1-0.3,0.3-0.6,0.4-0.9l4.9-0.1l-0.2-6.1l-4.9,0.1c-0.1-0.3-0.2-0.6-0.4-0.9l3.3-3.6l-4.4-4.2l-3.3,3.6
                                                    c-0.2-0.1-0.4-0.2-0.6-0.2c-0.1,0-0.2-0.1-0.4-0.2l-0.1-4.8l-6.1,0.2l0.1,4.8c-0.3,0.1-0.6,0.2-0.9,0.4l-3.5-3.3l-4.2,4.4l3.6,3.3
                                                    c-0.1,0.3-0.3,0.6-0.4,0.9L-63,131l0.2,6.1l5-0.2c0.1,0.3,0.2,0.5,0.4,0.8l-3.4,3.7l4.4,4.2l3.4-3.7c0.2,0.1,0.3,0.1,0.4,0.2
                                                    c0.1,0,0.2,0.1,0.3,0.1l0.2,5.1l6.1-0.2l-0.2-5c0.3-0.1,0.5-0.2,0.8-0.3l3.7,3.4L-37.4,140.8z M-47.7,139.3c-3,0.9-6.3-0.8-7.2-3.8
                                                    c-0.9-3,0.8-6.3,3.8-7.2c3-0.9,6.3,0.8,7.2,3.8C-42.9,135.1-44.6,138.3-47.7,139.3z M25.8,96.7c8.6,0,15.6,7,15.6,15.6
                                                    s-7,15.6-15.6,15.6s-15.6-7-15.6-15.6S17.2,96.7,25.8,96.7z M45.4,131.9H9.9c-5.1,0-10.2,0.7-13.9,5.7c-1.6,2.5-16.4,21.1-16.4,21.1
                                                    h-20.8c-3.7,0-6.8,3.1-6.8,6.8s3.1,6.8,6.8,6.8h23.7c1.7,0,3.5-0.7,4.7-2l13.9-16.9c0.4-0.4,0.7-0.6,1.4-0.6c1.1,0,2,0.7,2,2v30.6
                                                    h43v-30.1c0-1.1,0.7-2,2-2c1.1,0,2,0.7,2,2v30.2H65v-34.1C65,140.7,56.2,131.9,45.4,131.9z"/>
                                                </svg>
                                            </div>
                                            <h4>E-Commerce Portal Development</h4>
                                            <p>At Ivagam Infotech Private Limited, we specialize in crafting innovative, high-performance eCommerce portals tailored to meet the unique needs of businesses across various industries. Our expertise in developing eCommerce solutions helps businesses establish a strong online presence and deliver seamless shopping experiences to their customers.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="expertise-box">
                                        <a href="#">
                                            <div class="icon">
                                                <svg width="60px" height="60px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                                                    <path stroke="#041b3a" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9.036a3.485 3.485 0 011.975.99M4 12.5A3.5 3.5 0 007.5 16h9.75a2.75 2.75 0 00.734-5.4A5 5 0 008.37 9.108 3.5 3.5 0 004 12.5z"/>
                                                  </svg>
                                            </div>
                                            <h4>ERP Software Development</h4>
                                            <p>At Ivagam Infotech Private Limited, we excel in developing robust and scalable ERP (Enterprise Resource Planning) solutions that empower businesses to streamline operations, enhance productivity, and make informed decisions. Our customized ERP software seamlessly integrates various business processes, enabling companies to achieve greater efficiency and coordination across departments.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="expertise-box">
                                        <a href="#">
                                            <div class="icon">
                                                <svg width="60px" height="60px" viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-customer-support">
    
                                                    <title>715</title>
                                                    
                                                    <defs>
                                                
                                                </defs>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(1.000000, 0.000000)" fill="#041b3a">
                                                            <g transform="translate(0.000000, 2.000000)">
                                                                <path d="M8.005,10.094 C6.563,10.094 5.098,9.238 4.243,8.105 C0.141,8.105 0.017,13.965 0.017,13.965 L15.992,13.965 C15.992,13.965 16.314,8.079 11.701,8.079 C10.847,9.226 9.447,10.094 8.005,10.094 Z" class="si-glyph-fill">
                                                
                                                </path>
                                                                <path d="M11.441,3.069 C11.441,4.755 9.902,7.979 8.002,7.979 C6.105,7.979 4.565,4.754 4.565,3.069 C4.565,1.384 6.104,0.016 8.002,0.016 C9.902,0.017 11.441,1.385 11.441,3.069 L11.441,3.069 Z" class="si-glyph-fill">
                                                
                                                </path>
                                                            </g>
                                                            <path d="M12.975,3.614 C12.975,3.298 12.535,3.043 11.989,3.041 L11.989,2.39 C11.989,2.293 12.026,0.022 8.014,0.022 C4.004,0.022 4.041,2.293 4.041,2.39 L4.041,3.064 C4.031,3.064 4.023,3.061 4.014,3.061 C3.471,3.061 3.034,3.312 3.034,3.623 L3.034,6.377 C3.034,6.686 3.472,6.938 4.014,6.938 C4.556,6.938 4.996,6.686 4.996,6.377 L4.996,3.623 C4.996,3.58 4.969,3.541 4.953,3.501 L4.953,2.75 C4.953,2.681 4.665,0.967 8.014,0.967 C11.364,0.967 11.016,2.681 11.016,2.75 L11.016,3.541 C11.01,3.566 10.991,3.588 10.991,3.614 L10.991,6.431 C10.991,6.748 11.434,7.005 11.983,7.005 C11.995,7.005 12.004,7.001 12.016,7.001 L12.016,8.03 L11.032,8.03 L11.032,9 L12.985,9 L12.975,3.614 L12.975,3.614 Z" class="si-glyph-fill">
                                                
                                                </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <h4>Travel Portal Development</h4>
                                            <p>At Ivagam Infotech Private Limited, we specialize in building comprehensive and innovative travel portal solutions that cater to the dynamic needs of the travel and tourism industry. Our travel portals are designed to provide seamless experiences for travel agencies, tour operators, and end-users, making travel planning easy and efficient.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="expertise-box">
                                        <a href="#">
                                            <div class="icon">
                                                <svg fill="#041b3a" width="60px" height="60px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"/></svg>
                                            </div>
                                            <h4>Account Aggregator Eco-System Development</h4>
                                            <p>At Ivagam Infotech Private Limited, we are at the forefront of developing comprehensive and secure Account Aggregator (AA) solutions that empower businesses to facilitate seamless data sharing while maintaining user privacy and consent. Our expertise in building AA systems helps organizations streamline financial data management and enhance user trust through robust consent-based frameworks.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="expertise-box">
                                        <a href="#">
                                            <div class="icon">
                                                <svg width="60px" height="60px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 9.5V15.5M12 9.5L10 11.5M12 9.5L14 11.5M8.4 19C5.41766 19 3 16.6044 3 13.6493C3 11.2001 4.8 8.9375 7.5 8.5C8.34694 6.48637 10.3514 5 12.6893 5C15.684 5 18.1317 7.32251 18.3 10.25C19.8893 10.9449 21 12.6503 21 14.4969C21 16.9839 18.9853 19 16.5 19L8.4 19Z" stroke="#041b3a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                            </div>
                                            <h4>Machine Learning Solutions</h4>
                                            <p>At Ivagam Infotech Private Limited, we harness the power of machine learning (ML) to drive innovation, improve decision-making, and create intelligent solutions for businesses across industries. Our team of experts specializes in developing custom ML models and integrating them into applications that can process large datasets, learn from data, and deliver predictive insights.</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="expertise-box">
                                        <a href="#">
                                            <div class="icon">
                                                <svg width="60px" height="60px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <title>CRM Development</title>
                                                    <rect width="24" height="24" fill="none"/>
                                                    <path d="M3,18l4-1.25V7l7-2V19.5L3.5,18.25,14,22l6-1.25V3.5L14,2,3,5.75Z" fill="#041b3a"/>
                                                  </svg>
                                            </div>
                                            <h4>CRM Development</h4>
                                            <p>At Ivagam Infotech Private Limited, we excel in creating robust Customer Relationship Management (CRM) solutions tailored to streamline business operations and enhance customer interactions. Our expertise in CRM development allows businesses to manage their customer data, automate processes, and improve communication across teams, driving growth and customer satisfaction.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="blog-section section-padding bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="title mb-lg-5 mb-4">                            
                            <h2>Blogs</h2>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <a href="#" class="btn_ primaary medium">All Blogs</a>
                    </div>
                </div>
                <div class="row blogs">
                        <?php foreach ($blogs as $blog) : ?>
                            <div class="col-lg-4">
                                <div class="blog-box">
                                    <div class="top">
                                        <div class="img-box">
                                            <a href="#">
                                            <img src="<?php echo WEB_DIR ?>images/<?php echo $blog['image']; ?>" class="object-cover">
                                            </a>
                                        </div>
                                        <h4><?php echo $blog['title'];?></h4>
                                        <p><?php echo $blog['description']; ?></p>
                                    </div>
                                    <div class="bottom">
                                        <a href="#"><i class="fa-regular fa-arrow-right"></i> Learn more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    <!--<div class="col-lg-4">
                        <div class="blog-box">
                            <div class="top">
                                <div class="img-box">
                                    <a href="#"><img src="images/s1.jpg" alt="" class="object-cover"></a>
                                </div>
                                <h4>What is Lorem Ipsum?</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="bottom">
                                <a href="#"><i class="fa-regular fa-arrow-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-box">
                            <div class="top">
                                <div class="img-box">
                                    <a href="#"><img src="images/s1.jpg" alt="" class="object-cover"></a>
                                </div>
                                <h4>What is Lorem Ipsum?</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="bottom">
                                <a href="#"><i class="fa-regular fa-arrow-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--  -->
        <section class="testimonial-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="title mb-lg-5 mb-4">
                            
                            <h2>Teastimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel">
    <?php foreach ($testimonials as $testimonial) : ?>
        <div class="item">
            <div class="testimonial-box">
                <div class="top d-flex align-items-center">
                    <div class="avator">
                        <img src="<?php echo WEB_DIR ?>images/<?php echo $testimonial['profile_image']; ?>" alt="<?php echo $testimonial['name']; ?>" class="object-cover">
                        </div>
                    <div class="name">
                        <h5><?php echo $testimonial['name']; ?></h5>
                    </div>
                </div>
                <div class="bottom">
                    "<?php echo $testimonial['description']; ?>"
                </div>
            </div>
        </div>
    <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
    </main>
   <?= view('footer') ?>

   <script src="<?php echo WEB_DIR ?>js/jquery.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/owl.carousel.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/custom.js"></script>


     
</body>
</html>