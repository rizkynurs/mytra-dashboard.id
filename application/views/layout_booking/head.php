<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE
    =edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title><?php echo $title ?></title>
<link href="<?php echo base_url() ?>assets/vendor/images/mytra-logo.png" rel="shortcut icon">
<link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables/css/fixedColumns.datatables.min.css">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/dist/css/scroll.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
