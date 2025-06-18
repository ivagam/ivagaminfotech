<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Blogs</h2>
        <!-- Add Blog Button -->
        <a href="<?php echo WEB_DIR ?>Operation/add_blog" class="btn btn-primary">Add Blog</a>
        </div>

    <!-- Check if there are blogs -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Si No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td><?php echo $blog['id']; ?></td>
                    <td><?php echo $blog['title']; ?></td>
                    <td><?php echo $blog['description']; ?></td>
                    <td><img src="<?php echo WEB_DIR ?>images/<?php echo $blog['image']; ?>" alt="Blog Image" width="100"></td>
<td>
    <a href="<?php echo WEB_DIR ?>Operation/edit_blog/<?php echo $blog['id']; ?>" class="btn btn-warning">Edit</a>
    <a href="<?php echo WEB_DIR ?>Operation/delete_blog/<?php echo $blog['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</a>
</td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="<?php echo WEB_DIR ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/owl.carousel.min.js"></script>
<script src="<?php echo WEB_DIR ?>js/custom.js"></script>



</body>
</html>
