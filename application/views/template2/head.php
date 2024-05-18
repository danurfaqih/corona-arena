<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Arena</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/vendors/jvectormap/jquery-jvectormap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/vendors/owl-carousel-2/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/vendors/owl-carousel-2/owl.theme.default.min.css') ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/assets/css/style.css') ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets2/assets/images/favicon.png') ?>" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <style>
        /* CSS untuk menyembunyikan elemen di luar tabel saat mencetak */
        @media print {
            body * {
                visibility: hidden;
            }

            #filteredTable,
            #filteredTable * {
                visibility: visible;
            }

            #filteredTable {
                position: absolute;
                left: 0;
                top: 0;
            }

            .no-print {
                display: none;
            }

            .header-print {
                margin-bottom: 20px;
                text-align: center;
                visibility: visible; /* Menampilkan header saat mencetak */
            }

            /* Menampilkan semua elemen di dalam tabel saat mencetak */
            #filteredTable table,
            #filteredTable table * {
                visibility: visible;
            }

            #filteredTable table {
                position: static;
                width: 100%;
            }
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>