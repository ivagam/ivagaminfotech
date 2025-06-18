<?= $this->include('admin/header') ?>
<?= $this->include('admin/sidebar') ?>

<div class="container mt-4">
    <h4>Add New Project</h4>
    <form method="post" action="<?= base_url('admin/project/store') ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Meta Keywords</label>
            <textarea name="meta_keywords" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>


<?= $this->include('admin/footer') ?>