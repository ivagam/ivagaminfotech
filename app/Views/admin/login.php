<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link rel="stylesheet" href="<?php echo WEB_DIR ?>css/bootstrap.min.css">
    <style>
        body {
            background: #f7f9fc;
        }
        .login-container {
            margin-top: 100px;
        }
        .login-card {
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            font-weight: 600;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card login-card p-4">
                    <div class="card-body">
                        <h3 class="text-center login-header mb-4">Admin Login</h3>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger text-center">
                                <?= esc(session()->getFlashdata('error')) ?>
                            </div>
                        <?php endif; ?>
                        
                        <form action="<?= base_url('admin/login') ?>" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <p class="mt-3 text-center text-muted" style="font-size: 13px;">&copy; <?= date('Y') ?> Ivagam Info Tech</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
