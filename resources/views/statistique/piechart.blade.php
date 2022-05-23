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
     
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bar chart</h4>
            <canvas id="chart-bars"></canvas>
          </div>
        </div>
      </div>
    </div>
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
              label: '# ',
              data: count,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.1)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 88, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                 
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



          const ctx2 = ctx2.document.getElementById("chart-bars").getContext("2d");
          var nbr = <?php echo $nbr;?>;
          var nbre = <?php echo $nbre;?>;
          var year = <?php echo $year;?>;
          
        new Chart(ctx2, {
            type: "bar",
            data: {
                labels: year ,
                datasets: [
                            {
                                label: 'enseignant',
                                backgroundColor: 'rgba(255, 99, 132, 0.1)',
                                data: nbre ,
                            },
                            {
                                label: 'etudiant',
                                backgroundColor: 'rgba(255, 99, 135, 0.1)',
                                data: nbr ,
                            },
                    ]

            },  
            options: {

scales: {

    yAxes: [{

        ticks: {

            beginAtZero: true,

            callback: function(value) {if (value % 1 === 0) {return value;}}

        },

        scaleLabel: {

            display: false

        }

    }]

},

legend: {

    labels: {

        // This more specific font property overrides the global property

        fontColor: '#122C4B',

        fontFamily: "'Muli', sans-serif",

        padding: 25,

        boxWidth: 25,

        fontSize: 14,

    }

},

layout: {

    padding: {

        left: 10,

        right: 10,

        top: 0,

        bottom: 10

    }

},

responsive: true,

}
        });
 
  </script>
</body>
</html> 
@endsection