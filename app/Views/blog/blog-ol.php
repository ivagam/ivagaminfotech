<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="icon" href="images/favicon1.png" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
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
        /* Basic styling for the contact form */
.contact-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

.contact-form .row {
    margin-bottom: 15px;
}

.contact-form .form-control {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ddd;
    width: 100%;
    margin-bottom: 10px;
    font-size: 14px;
}

.contact-form .form-control:focus {
    border-color: #0dcaf0;
    box-shadow: 0 0 5px rgba(13, 202, 240, 0.4);
}

.contact-form textarea.form-control {
    height: 150px;
}

.contact-form .btn-primary {
    background-color: #0dcaf0;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
}

.contact-form .btn-primary:hover {
    background-color: #0b9db6;
}

.contact-form .error {
    color: red;
    font-size: 0.9em;
    margin-top: 5px;
}

.contact-form .spinner-border {
    width: 2rem;
    height: 2rem;
}

.contact-form .form-group {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form input[type="tel"] {
    width: 100%;
}

.contact-form #captcha-refresh {
    margin-top: 3px;
    font-size: 14px;
}

.contact-form #captcha-refresh img {
    width: 30px;
    height: 30px;
}

.contact-form #spinner {
    display: none;
    margin-left: 10px;
}

    </style>
</head>
<body>
    <main>
        <section class="section-top-gap pt-lg-5 pt-4 pb-lg-5 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="title h2 mb-lg-5 mb-4">Create Blog</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="mb-4">Enter Blog Details</h4>
                        <form action="<?php echo site_url('Operation/submit_blog'); ?>" class="contact-form" id="blogForm" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="title" class="form-control" placeholder="Blog Title" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="description" id="description" placeholder="Blog Description" class="form-control" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <input type="file" name="image" class="form-control" accept="image/*" required>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <input type="submit" class="btn btn-primary" value="Submit Blog">
                                    <div id="spinner" class="spinner-border text-primary" role="status" style="display: none; margin-left: 10px;">
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

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#blogForm').submit(function (e) {
                e.preventDefault();
                $('#spinner').show(); // Show spinner

                var formData = new FormData(this);
                $.ajax({
                    url: "<?php echo base_url('blog/submit_blog'); ?>", // Update this with your blog submission endpoint
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#spinner').hide();
                        if (response == 'success') {
                            alert('Blog submitted successfully!');
                            $('#blogForm')[0].reset(); // Reset the form
                        } else {
                            alert('There was an issue submitting the blog.');
                        }
                    },
                    error: function () {
                        $('#spinner').hide();
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>
