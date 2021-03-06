<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/adminStyle.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/parsley.css') ?>">

</head>
<body class="grey lighten-4">
    <header>
        <nav>
            <div class="nav-wrapper container">
                <a href="<?= base_url('Admin') ?>" class="brand-logo">TheDesign</a>
                <a href="#!" data-target="mobile_demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <?php if($this->session->userdata('id')):?>
                    <ul class="right"> 
                        <li><a href="<?=base_url('admin/logout')?>" class="btn btn-small waves-effect waves-light">logout</a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>
    </header>
