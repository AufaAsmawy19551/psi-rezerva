<?php

function money_format($str){
  return 'Rp' . number_format($str, '0', '', '.');
}

function success_and_error($message, $type){
  if($type == 'success'){
    echo"
      <script>
        Swal.fire({
          type: 'success',
          title: 'BERHASIL!',
          text: '$message',
          timer: 2000
        });
      </script>
    ";
  }elseif($type == 'error'){
    echo"
      <script>
        Swal.fire({
          type: 'error',
          title: 'ERROR!',
          text: '$message',
          timer: 3000
        });
      </script>
    ";
  }
}

function chart_bulanan($id, $data, $type, $bgCol= '#11cdef', $brCol='#11cdef', $brWid=2){

  $dataBulanan = $data;

    $insideData = "";
    for ($i = 0; $i < count($dataBulanan); $i++) {
      if ($dataBulanan[$i] != 0 ) {
        $insideData .= $dataBulanan[$i] ;
        $insideData .= ",";
      }
    }
  
  echo <<<TEXT
    <script>
      const ct1 = document.getElementById('$id').getContext('2d');
      const chartMonth = new Chart(ct1, {
        type: '$type',
        data: {
          labels: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT', 'NOV', 'DES'],
          datasets: [{
            label: 'Rp',
            data: [$insideData],
            backgroundColor:'$bgCol',
            borderColor:'$brCol',
            borderWidth: $brWid,
            
          }]
        },
        options: {
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            x: {
              ticks: {
                color: "#FFFFFFCC"
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                color: "#FFFFFFCC"
              }
            },
          },
        }
      });
    </script>
  TEXT;
}

function trend_chart($id){
  echo <<<TEXT
    <script>
      const ct2 = document.getElementById('$id').getContext('2d');
      const chartTrend = new Chart(ct2, {
        type: 'line',
        data: {
          labels: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AGU', 'SEP', 'OKT', 'NOV', 'DES'],
          datasets: [
            {
              label: 'SATE AYAM',
              data: [15, 15, 15, 15, 15, 15, 15,],
              borderColor: '#2bffc6',
              backgroundColor: '#2bffc6',
              borderWidth: 2,
            },
            {
              label: 'NASI RAMES',
              data: [12, 12, 12, 12, 12, 12, 12,],
              borderColor: '#FF00FF',
              backgroundColor: '#FF00FF',
              borderWidth: 2,
            },
            {
              label: 'NASI GORENG',
              data: [11, 11, 11, 11, 11, 11, 11,],
              borderColor: '#11cdef',
              backgroundColor: '#11cdef',
              borderWidth: 2,
            },
            {
              label: 'AYAM GEPREK',
              data: [10, 10, 10, 10, 10, 10, 10,],
              borderColor: '#ffd600',
              backgroundColor: '#ffd600',
              borderWidth: 2,
            },
            {
              label: 'MIE GORENG',
              data: [13, 13, 13, 13, 13, 13, 13,],
              borderColor: '#f5365c',
              backgroundColor: '#f5365c',
              borderWidth: 2,
            },
            {
              label: 'MIE AYAM BAKSO',
              data: [14, 14, 14, 14, 14, 14, 14,],
              borderColor: '#e9ecef',
              backgroundColor: '#e9ecef',
              borderWidth: 2,
            },
            {
              label: 'BAKSO URAT',
              data: [16, 16, 16, 16, 16, 16, 16,],
              borderColor: '#fb6340',
              backgroundColor: '#fb6340',
              borderWidth: 2,
            },
            {
              label: 'LONTONG OPOR',
              data: [17, 17, 17, 17, 17, 17, 17,],
              borderColor: '#DFFF00',
              backgroundColor: '#DFFF00',
              borderWidth: 2,
            },
          ]
        },
        options: {
          plugins: {
            legend: {
              display: true,
                labels: {
                  boxWidth : 12,
                  color: '#FFFFFFCC',
                  font: {
                    size: 10,
                  }
              },
            },
          },
          scales: {
            x: {
              ticks: {
                color: "#FFFFFFCC"
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                color: "#FFFFFFCC"
              }
            },
          },
        }
      });
      
    </script>
  TEXT;
}

function sale_chart($id, $data, $type, $bgCol='#11cdef', $brCol='#11cdef', $brWid=2){

    $insideLabel = "";
    $insideData  = "";
    foreach ($data as $element) {
      $insideLabel .= "'".$element[0]."'";
      $insideLabel .= ",";
      $insideData .= $element[1];
      $insideData .= ",";
    }
  
  echo <<<TEXT
    <script>
      const ct3 = document.getElementById('$id').getContext('2d');
      const chartSale = new Chart(ct3, {
        type: '$type',
        data: {
          labels: [$insideLabel],
          datasets: [
            {
              label: 'Poin',
              data: [$insideData],
              backgroundColor:'$bgCol',
              borderColor:'$brCol',
              borderWidth: $brWid
            },
          ]
        },
        options: {
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            x: {
              ticks: {
                color: "#FFFFFFCC"
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                color: "#FFFFFFCC"
              }
            },
          },
        }
      });
    </script>
  TEXT;
}

function rating_chart($id, $data, $type, $bgCol='#11cdef', $brCol='#11cdef', $brWid=2){

    $insideLabel = "";
    $insideData  = "";
    foreach ($data as $element) {
      $insideLabel .= "'".$element[0]."'";
      $insideLabel .= ",";
      $insideData .= $element[1];
      $insideData .= ",";
    }
  
  echo <<<TEXT
    <script>
      const ct4 = document.getElementById('$id').getContext('2d');
      const chartRating = new Chart(ct4, {
        type: '$type',
        data: {
          labels: [$insideLabel],
          datasets: [
            {
              label: 'Poin',
              data: [$insideData],
              backgroundColor:'$bgCol',
              borderColor:'$brCol',
              borderWidth: $brWid
            },
          ]
        },
        options: {
          plugins: {
            legend: {
              display: false
            }
          },
          scales: {
            x: {
              ticks: {
                color: "#FFFFFFCC"
              }
            },
            y: {
              beginAtZero: true,
              ticks: {
                color: "#FFFFFFCC"
              }
            },
          },
        }
      });
    </script>
  TEXT;
}
      
?>