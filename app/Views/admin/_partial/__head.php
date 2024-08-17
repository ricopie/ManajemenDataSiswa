<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= esc($pageName) ?> | MDS
  </title>

  <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
  <link rel="icon" type="image/png" size="128x128" href="<?= base_url('assets') ?>/img/AdminLTELogo.png">

  <!-- Fonts: Google -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- FontAwesome Icon -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <!-- Theme: CSS -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/styles.min.css">
  <?= $this->renderSection('style'); ?>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">