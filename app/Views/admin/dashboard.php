<?= $this->include('admin/header') ?>
<?= $this->include('admin/sidebar') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                👋 Hello <strong><?= session()->get('admin_username') ?></strong>, you're logged in!
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Quick Stats</h5>
                    <p class="card-text">Here you can manage your site and view basic stats.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('admin/footer') ?>
