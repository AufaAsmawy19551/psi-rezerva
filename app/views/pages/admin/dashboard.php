<div class="container-fill">
  <!-- Laporan Pendapatan -->
  <div class="row">
    <div class="col-md-9 pb-0 mb-0 d-flex">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center"><i class="material-icons">Pendapatan Bulanan Tahun 2021</i></h3>
          <canvas id="chartMonth"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-12">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">Pendapatan Hari Ini</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_hari_ini'] ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">Pendapatan Minggu Ini</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_minggu_ini'] ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">Pendapatan Bulan Ini</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_bulan_ini'] ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">Pendapatan Tahun Ini</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title font-weight-bold" style="color: #2bffc6!important;"><?= $data['pendapatan_tahun_ini'] ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-info py-4 px-4 mfe-3">
            <i class="fas fa-circle-notch fa-spin fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-info font-weight-bold"><?= $data['pending'] ?> TRANSAKSI</div>
            <div class="text-info title text-uppercase font-weight-bold">PENDING</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-success py-4 px-4 mfe-3">
            <i class="fas fa-check-square fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-success font-weight-bold"><?= $data['success'] ?> TRANSAKSI</div>
            <div class="text-success text-uppercase font-weight-bold">BERHASIL</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-warning py-4 px-4 mfe-3">
            <i class="fas fa-exclamation-triangle fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-warning font-weight-bold"><?= $data['expired'] ?> TRANSAKSI</div>
            <div class="text-warning text-uppercase font-weight-bold">KEDALUWARSA</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="card border-0 rounded shadow-sm overflow-hidden">
        <div class="card-body p-0 d-flex align-items-center">
          <div class="bg-danger py-4 px-4 mfe-3">
            <i class="fas fa-times-circle fa-2x"></i>
          </div>
          <div class="pl-2" style="min-width: 100px;">
            <div class="text-value text-danger font-weight-bold"><?= $data['failed'] ?> TRANSAKSI</div>
            <div class="text-danger text-uppercase font-weight-bold">GAGAL</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Completed Tasks</h5>
          <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartLineGreen"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Daily Sales</h5>
          <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="CountryChart"></canvas>
          </div>
        </div>
      </div>
    </div>
</div>  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.js"></script>
  <?php 
    // memasukkan string ke dalam script chart
    $dataBulanan = $data['pendapatan_perbulan'];

    // $data=[];

    // $insideData = "";
    // for ($i = 0; $i < count($dataBulanan); $i++) {
    //   $insideData .= $dataBulanan[$i];
    //   $insideData .= ",";
    // }

    echo
    "<script>
        const ct = document.getElementById('chartMonth').getContext('2d');
        const chartMonth = new Chart(ct, {
            type: 'bar',
            data: {
                labels: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT', 'NOV', 'DES'],
                datasets: [{
                    label: 'Rp',
                    data: [400000,300000,500000,600000,700000,500000,400000,800000,900000,600000,700000,$dataBulanan[11]],
                    backgroundColor:'transparent',
                    borderColor:'#11cdef',
                    borderWidth: 2
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>"
        ?>

