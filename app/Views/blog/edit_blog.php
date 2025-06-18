<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Blog</h2>

    <?php echo form_open_multipart(WEB_DIR . 'Operation/update_blog/' . $blog['id']); ?>
    <div class="form-group">
            <label for="title">Blog Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo $blog['title']; ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Blog Description</label>
            <textarea name="description" id="description" class="form-control" required><?php echo $blog['description']; ?></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload New Image (Optional)</label>
            <input type="file" name="image" class="form-control" id="image" accept="image/*">
        </div>

        <div class="form-group">
            <label>Current Image:</label><br>
            <img src="<?php echo WEB_DIR ?>images/<?php echo $blog['image']; ?>" alt="Blog Image" width="100"><br>
            </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Blog">
        </div>
    </form>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
