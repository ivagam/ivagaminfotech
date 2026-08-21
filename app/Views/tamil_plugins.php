<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English → Tamil Transliterator</title>

    <script src="<?php echo WEB_DIR?>js/tamil.js"></script>

    <link rel="icon" href="<?php echo WEB_DIR?>images/favicon1.png" sizes="16x16" />
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/style.css">
    
    <link rel="stylesheet" href="<?php echo WEB_DIR?>css/style_tamil.css">   

</head>
<body>
    <?= view('header') ?>
    <main>

    
    <div class="wrapper">  

    <div class="container">
        
        <div class="col text-center">
            <h1 class="title h2 mb-lg-5 mb-4">English → Tamil Transliterator</h1>
        </div>
        
        <p><strong>Description:</strong></p>

        <p>
        A Tanglish to English Converter that translates Tamil words written in English letters into accurate and meaningful English text.
        This application converts Tanglish input into clear English by recognizing Tamil phonetics written in the English alphabet.
        The system provides fast and accurate translation from Tanglish to English, making communication easier for users who type Tamil using English characters.
        </p>

         <div class="banner-image">
            <img src="images/transliterator-demo.png" alt="English to Tamil Transliterator Preview">
        </div>

            <div class="english-wrapper">
                <label for="englishBox" class="input-label">Tamil Input : </label>

                <input
                    type="text"
                    id="englishBox"
                    placeholder="Type Tanglish here..."
                    autocomplete="off"
                />

                <div id="suggestions" class="popup"></div>
            </div>

    </div>
    
    <div class="download-section">        
        <a href="<?php echo WEB_DIR; ?>source.zip">
            Click here : Download Source Code
        </a>
    </div>

</div>

    </main>
   <?= view('footer') ?>

   <script src="<?php echo WEB_DIR ?>js/jquery.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/owl.carousel.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/custom.js"></script>
<script src="<?php echo WEB_DIR?>js/engine.js"></script>
<script src="<?php echo WEB_DIR?>js/popup.js"></script>

     
</body>
</html>