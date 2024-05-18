<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              <div class="col-4 col-sm-3 col-xl-2">
                <img src="<?= base_url('assets2/assets/images/dashboard/Group126@2x.png') ?>" class="gradient-corona-img img-fluid" alt="">
              </div>
              <div class="col-5 col-sm-7 col-xl-8 p-0">
                <h4 class="mb-1 mb-sm-0">Bingung mau main Futsal dimana?</h4>
                <p class="mb-0 font-weight-normal d-none d-sm-block">Join Membership di Corona Arena Futsal aja!</p>
              </div>
              <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                <span>
                  <a href="<?= site_url('Beranda/customer') ?>" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to Membership</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Total Lapangan</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0"><?php echo $jumlah_lapangan; ?></h2>
                  <p class="text-muted mb-0 ms-2">lapangan tersedia</p>
                </div>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-dribbble text-primary ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Total Customer</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0"><?php echo $jumlah_customer; ?></h2>
                  <p class="text-muted mb-0 ms-2">pelanggan terdaftar</p>
                </div>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-account-multiple-outline text-danger ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5>Total Reservasi</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <div class="d-flex d-sm-block d-md-flex align-items-center">
                  <h2 class="mb-0"><?php echo $jumlah_reservasi; ?></h2>
                  <p class="text-muted mb-0 ms-2">reservasi aktif</p>
                </div>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-calendar-multiple text-success ms-auto"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Corona Arena</h4>
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                            <div class="item">
                                <img src="<?= base_url('assets2/assets/images/dashboard/paquette.jpg') ?>" alt="" style="width:100%">
                            </div>
                            <div class="item">
                                <img src="<?= base_url('assets2/assets/images/dashboard/vinyl2.jpg') ?>" alt="" style="width:100%">
                            </div>
                            <div class="item">
                                <img src="<?= base_url('assets2/assets/images/dashboard/download (3).jpg') ?>" alt="" style="width:100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="d-flex py-4">
                            <div class="preview-list w-100">
                                <div class="preview-item p-0">
                                    <div class="preview-thumbnail">
                                        <img src="<?= base_url('assets2/assets/images/faces/Danur Faqih.jpg') ?>" class="rounded-circle" alt="" style="width:60px; height:60px;">
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Danur Faqih</h6>
                                            </div>
                                            <p class="text-muted"><code>Founder Corona Arena</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">Danur Faqih, a Computer Science student hailing from Bekasi, West Java, demonstrates his passion for innovation through his midterm project—a futsal field reservation website. With a knack for web development, Danur aims to simplify the booking process and foster community engagement.</p> <br>
                        <p class="text-muted">Progress Website Penyewaan Lapangan : 70%</p>
                        <div class="progress progress-md portfolio-progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Visitors by Countries</h4>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-id"></i>
                                </td>
                                <td>Indonesia</td>
                                <td class="text-right"> 1500 </td>
                                <td class="text-right font-weight-medium"> 56.35% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-my"></i>
                                </td>
                                <td>Malaysia</td>
                                <td class="text-right"> 800 </td>
                                <td class="text-right font-weight-medium"> 33.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-au"></i>
                                </td>
                                <td>Australia</td>
                                <td class="text-right"> 760 </td>
                                <td class="text-right font-weight-medium"> 15.45% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-bn"></i>
                                </td>
                                <td>Brunei Darussalam</td>
                                <td class="text-right"> 450 </td>
                                <td class="text-right font-weight-medium"> 25.00% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-sg"></i>
                                </td>
                                <td>Singapura</td>
                                <td class="text-right"> 620 </td>
                                <td class="text-right font-weight-medium"> 10.25% </td>
                              </tr>
                              <tr>
                                <td>
                                  <i class="flag-icon flag-icon-ph"></i>
                                </td>
                                <td>Philippines</td>
                                <td class="text-right"> 230 </td>
                                <td class="text-right font-weight-medium"> 75.00% </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->