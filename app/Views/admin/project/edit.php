<?= $this->include('admin/header') ?>
<?= $this->include('admin/sidebar') ?>

<div class="container mt-4">
    <h4>Edit Project</h4>
    <form method="post" action="<?= base_url('admin/project/update/' . $project->id) ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?= $project->title ?>" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required><?= $project->description ?></textarea>
        </div>
        <div class="mb-3">
            <label>Image</label><br>
            <img src="<?= base_url('public/uploads/' . $project->image) ?>" width="100"><br><br>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>URL</label>
            <input type="text" name="url" class="form-control" value="<?= $project->url ?>">
        </div>
        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control"><?= $project->meta_description ?></textarea>
        </div>
        <div class="mb-3">
            <label>Meta Keywords</label>
            <textarea name="meta_keywords" class="form-control"><?= $project->meta_key ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->include('admin/footer') ?>