
<div>
    <canvas id="{{$chartId}}"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const {{$chartVar}} = document.getElementById('{{$chartId}}');

    const chartLabelHorizontal = "{{$chartLabel}}";
    const labelsHorizontal = {{$labels}};
    const dataHorizontal = {{$data}};
  
    new Chart({{$chartVar}}, {
      type: 'bar',
      data: {
        labels: labelsHorizontal,
        datasets: [{
          label: chartLabelHorizontal,
          data: dataHorizontal,
          borderWidth: 1
        }]
      },
      options: {
        indexAxis: 'y',
        scales: {
          y: {
            beginAtZero: true
          }
        }

      }
    });

    </script>