<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teastimonials List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>All Teastimonials</h2>
    <a href="<?php echo WEB_DIR ?>operation/add_teastimonial" class="btn btn-success mb-3">Add Testimonial</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Si No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Profile Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teastimonials as $teastimonial): ?>
                <tr>
                    <td><?php echo $teastimonial['id']; ?></td>
                    <td><?php echo $teastimonial['name']; ?></td>
                    <td><?php echo $teastimonial['description']; ?></td>
                    <td>
    <img src="<?php echo WEB_DIR ?>images/<?php echo $teastimonial['profile_image']; ?>" alt="Profile Image" width="100">
</td>
<td>
    <a href="<?php echo WEB_DIR ?>operation/edit_teastimonial/<?php echo $teastimonial['id']; ?>" class="btn btn-warning">Edit</a>
    <a href="<?php echo WEB_DIR ?>operation/delete_teastimonial/<?php echo $teastimonial['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this testimonial?');">Delete</a>
</td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
