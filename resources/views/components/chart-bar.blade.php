
<div>
    <canvas id="{{$chartId}}"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const {{$chartVar}} = document.getElementById('{{$chartId}}');

    const chartLabelBar = "{{$chartLabel}}";
    const labelsBar = {{$labels}};
    const dataBar = {{$data}};
  
    new Chart({{$chartVar}}, {
      type: 'bar',
      data: {
        labels: labelsBar,
        datasets: [{
          label: chartLabelBar,
          data: dataBar,
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