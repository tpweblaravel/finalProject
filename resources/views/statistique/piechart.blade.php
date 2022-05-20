@extends('layouts.master')

@section('content')
<!doctype html>
<html lang="en">
  <head>

   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>
  <body>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">etudiants par options</h4>
        <canvas id="myChart" width="400" height="400"></canvas>
      </div>
    </div>
    </div>
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      var count = <?php echo $count;?>;
      var optionss = <?php echo $optionss;?>;
      const myChart = new Chart(ctx, {
          type: 'pie',
          data: {
              labels: optionss,
              datasets: [{
                  label: '# of Votes',
                  data: count,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });

 
  </script>
</body>
</html> 
@endsection