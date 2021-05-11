<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <div class="row">
          <div class="col-md-12">
            <div class="col-lg-4 col-xs-6">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $total_pasien; ?></h3>
                  <p>Pasien</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- PANEL GRAFIK HARIAN -->
      <div class="panel panel-primary">
        <div class="panel-heading">Grafik Dalam 1 Hari</div>
        <div class="panel-body">
          <?php echo form_open('dashboard') ?>
          <div class="row" style="margin-bottom: 6px;">
            <div class="col-sm-2">
              <div class="form-group">
                <select class="form-control mb-1" name="tgl">
                  <?php
                  for($i=1;$i<=31;$i++){
                    if($i==$tanggal_sekarang){
                      echo "<option value='". $i . "' selected>". $i ."</option>";
                    }else{
                      echo "<option value='". $i . "'>". $i ."</option>";
                    }
                  }?>
                </select>
              </div>
            </div>
            <div class="row" style="margin-bottom: 6px;">

              <div class="col-sm-2">
                <div class="form-group">
                  <select class="form-control mb-1" name="bulan">
                    <option value="1" <?php if($bulan_sekarang==1){echo "selected";}?> >Januari</option>
                    <option value="2" <?php if($bulan_sekarang==2){echo "selected";}?> >Februari</option>
                    <option value="3" <?php if($bulan_sekarang==3){echo "selected";}?> >Maret</option>
                    <option value="4" <?php if($bulan_sekarang==4){echo "selected";}?> >April</option>
                    <option value="5" <?php if($bulan_sekarang==5){echo "selected";}?> >Mei</option>
                    <option value="6" <?php if($bulan_sekarang==6){echo "selected";}?> >Juni</option>
                    <option value="7" <?php if($bulan_sekarang==7){echo "selected";}?> >Juli</option>
                    <option value="8" <?php if($bulan_sekarang==8){echo "selected";}?> >Agustus</option>
                    <option value="9" <?php if($bulan_sekarang==9){echo "selected";}?> >September</option>
                    <option value="10" <?php if($bulan_sekarang==10){echo "selected";}?> >Oktober</option>
                    <option value="11" <?php if($bulan_sekarang==11){echo "selected";}?> >November</option>
                    <option value="12" <?php if($bulan_sekarang==12){echo "selected";}?> >Desember</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <select class="form-control mb-1" name="tahun">
                    <?php
                    $thn_skr = date('2021');
                    for ($x = $thn_skr; $x >= 2019; $x--) {
                      ?>
                      <option value="<?php echo $x ?>" <?php if($tahun_sekarang==$x){echo "selected";}?> ><?php echo $x ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-1">
                <button class="btn btn-primary" name="cari" id="btn_cari">Cari</button>
              </div>
            </div>
          </div>
          <?php echo form_close(); ?>
          <div class="row">
            <div class="col-lg-12 col-xs-12">
              <div id="graft_harian" style="height: 400px; margin: 0 auto"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL GRAFIK BULANAN -->
      <div class="panel panel-primary">
        <div class="panel-heading">Grafik Dalam 1 tahun</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12 col-xs-12">
              <div id="graft_bulanan" style="height: 400px; margin: 0 auto"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  //Grafik Harian
  Highcharts.chart('graft_harian', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Grafik Pasien Covid19 Gejos'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
      point: {
        valueSuffix: '%'
      }
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %'
        }
      }
    },
    series: [{
      name: 'Pasien',
      colorByPoint: true,
      data: <?php echo json_encode($data_grafik_harian); ?>
    }]
  });
  //Grafik Bulanan
  Highcharts.chart('graft_bulanan', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Grafik Pasien Covid19 Gejos'
    },
    subtitle: {
      text: 'Dalam 1 Tahun Terakhir'
    },
    xAxis: {
      categories: <?php echo json_encode($sumbux_grafik_line); ?>,
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Jumlah (orang)'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} orang</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: <?php echo json_encode($data_grafik_tahunan); ?>
  });

  </script>
