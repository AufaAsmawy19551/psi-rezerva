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
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
  TEXT;
}

function multiple_chart($id, $data, $type, $bgCol='transparent', $brCol='#11cdef', $brWid=2){

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
      const ct2 = document.getElementById('$id').getContext('2d');
      const chartMenu = new Chart(ct2, {
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
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
  TEXT;
}
      
?>