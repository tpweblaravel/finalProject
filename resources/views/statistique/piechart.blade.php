@extends('layouts.master')

@section('content')
<!doctype html>
<html lang="en">
  <head>

   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <div class="col-lg-5 ">
      <div class="card">
    <div class="card-body">
      <h4 class="card-title">etudiant par options</h4>
      <canvas id="pieChart"></canvas>
    </div>
  </div>
</div>
<div class="col-lg-5 ">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">etudiants/enseignants par années</h4>
      <canvas id="barChart"></canvas>
    </div>
  </div>
</div>
</div>
 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
 
        function drawChart() {
 
        var data = google.visualization.arrayToDataTable(analitics);

 
          var options = {title: ' Detail' };
 
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 
          chart.draw(data, options);
        }
      </script>
    
       
      
</body>
</html> 
@endsection