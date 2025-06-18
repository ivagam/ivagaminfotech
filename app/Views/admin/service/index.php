<?= $this->include('admin/header') ?>
<?= $this->include('admin/sidebar') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h4>Service List</h4>
        <a href="<?= base_url('admin/service/create') ?>" class="btn btn-primary">Add New</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th style="width: 40%;">Title</th>
            <th style="width: 40%;">Description</th>
            <th style="width: 10%;">Image</th>
            <th style="width: 10%;">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($service as $row): ?>
            <tr>
                <td><?= $row->title ?></td>
                <td><?= $row->description ?></td>
                <td><img src="<?= base_url('public/uploads/' . $row->image) ?>" width="60"></td>
                <td>
                    <a href="<?= base_url('admin/service/edit/' . $row->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('admin/service/delete/' . $row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('admin/footer') ?>