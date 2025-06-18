<div class="sidebar">
    <h5 class="text-center mb-4">🛠 Admin Panel</h5>
    <a href="<?= base_url('admin/dashboard') ?>">📊 Dashboard</a>
    <a href="<?= base_url('admin/blogs') ?>">📝 Blogs</a>
    <a href="<?= base_url('admin/project') ?>">📁 Project</a>
    <a href="<?= base_url('admin/service') ?>">🛠️ Service</a>
    <a href="<?= base_url('admin/logout') ?>">🚪 Logout</a>
</div>

<div class="main-content">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded mb-4">
        <div class="container-fluid">
            <span class="navbar-brand">Dashboard</span>
            <span class="ms-auto text-muted">
                Welcome, <?= esc(session()->get('admin_username')) ?>
            </span>
        </div>
    </nav>
