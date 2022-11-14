

  

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">


        <!-- bayi Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card bayi-card">
            <div class="card-body">
              <h5 class="card-title">Bayi & Balita</h5>

              <div class="d-flex align-items-center ms-5">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/bayi.png" alt="" height="50" width="50">

                </div>
                <div class="ps-3">
                  <h6>145</h6>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End bayi Card -->

        <!-- remaja Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card remaja-card">
            <div class="card-body">
              <h5 class="card-title">Remaja</h5>

              <div class="d-flex align-items-center ms-5">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/remaja.png" alt="" height="50" width="50">

                </div>
                <div class="ps-3">
                  <h6>145</h6>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End remaja Card -->

        <!-- ibuhamil Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card ibuhamil-card">
            <div class="card-body">
              <h5 class="card-title">Ibu Hamil</h5>

              <div class="d-flex align-items-center ms-5">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/ibuhamil.png" alt="" height="50" width="50">

                </div>
                <div class="ps-3">
                  <h6>145</h6>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End ibuhamil Card -->

        <!-- ptm Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card ptm-card">
            <div class="card-body">
              <h5 class="card-title">PTM</h5>

              <div class="d-flex align-items-center ms-5">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/ptm.png" alt="" height="50" width="50">

                </div>
                <div class="ps-3">
                  <h6>145</h6>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End ptm Card -->

        <!-- lansia Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card lansia-card">
            <div class="card-body">
              <h5 class="card-title">Lansia</h5>

              <div class="d-flex align-items-center ms-5">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/lansia.png" alt="" height="50" width="50">

                </div>
                <div class="ps-3">
                  <h6>145</h6>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End lansia Card -->

        <!-- stunting Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card stunting-card">
            <div class="card-body">
              <h5 class="card-title">Stunting</h5>

              <div class="d-flex align-items-center ms-5">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/stunting.png" alt="" height="50" width="50">

                </div>
                <div class="ps-3">
                  <h6>145</h6>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End stunting Card -->





        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Reports <span>/Today</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Revenue',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Customers',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->





      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">





      <!-- Website Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Website Traffic <span>| Today</span></h5>

          <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

          <script>
            document.addEventListener("DOMContentLoaded", () => {
              echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                  trigger: 'item'
                },
                legend: {
                  top: '5%',
                  left: 'center'
                },
                series: [{
                  name: 'Access From',
                  type: 'pie',
                  radius: ['40%', '70%'],
                  avoidLabelOverlap: false,
                  label: {
                    show: false,
                    position: 'center'
                  },
                  emphasis: {
                    label: {
                      show: true,
                      fontSize: '18',
                      fontWeight: 'bold'
                    }
                  },
                  labelLine: {
                    show: false
                  },
                  data: [{
                    value: 1048,
                    name: 'Search Engine'
                  },
                  {
                    value: 735,
                    name: 'Direct'
                  },
                  {
                    value: 580,
                    name: 'Email'
                  },
                  {
                    value: 484,
                    name: 'Union Ads'
                  },
                  {
                    value: 300,
                    name: 'Video Ads'
                  }
                  ]
                }]
              });
            });
          </script>

        </div>
      </div><!-- End Website Traffic -->

      <!-- Event & Updates Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">Event &amp; Updates </h5>

          <div class="news">
            <div class="post-item clearfix">
              <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/news-1.jpg" alt="">
              <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/news-2.jpg" alt="">
              <h4><a href="#">Quidem autem et impedit</a></h4>
              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?= base_url(); ?>public_assets/nicepage/assets/img/news-3.jpg" alt="">
              <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
              <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
            </div>


          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End Event & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->
