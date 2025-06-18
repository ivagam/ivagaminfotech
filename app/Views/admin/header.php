<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        body {
            background-color: #f1f3f6;
        }
        .sidebar {
            height: 100vh;
            background: #212529;
            color: #fff;
            padding-top: 20px;
            position: fixed;
            width: 220px;
        }
        .sidebar a {
            color: #adb5bd;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
            transition: 0.2s;
        }
        .sidebar a:hover {
            background-color: #343a40;
            color: #fff;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        .navbar-brand {
            font-weight: 600;
        }
    </style>
</head>
<body>
