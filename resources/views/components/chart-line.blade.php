
<div>
    <canvas id="{{$chartId}}"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const {{$chartVar}} = document.getElementById('{{$chartId}}');

    const chartLabelLine = "{{$chartLabel}}";


    const actions = [
      {
        name: 'Randomize',
        handler(chart) {
          chart.data.datasets.forEach(dataset => {
            dataset.data = Utils.numbers({count: chart.data.labels.length, min: -100, max: 100});
          });
          chart.update();
        }
      },
      {
        name: 'Add Dataset',
        handler(chart) {
          const data = chart.data;
          const dsColor = Utils.namedColor(chart.data.datasets.length);
          const newDataset = {
            label: 'Dataset ' + (data.datasets.length + 1),
            backgroundColor: Utils.transparentize(dsColor, 0.5),
            borderColor: dsColor,
            data: Utils.numbers({count: data.labels.length, min: -100, max: 100}),
          };
          chart.data.datasets.push(newDataset);
          chart.update();
        }
      },
      
    ];

    const DATA_COUNT = 7;
    const NUMBER_CFG = {count: DATA_COUNT, min: -100, max: 100};

    // const labels = ;

    const dataLine = {
      labels: {{$labels}},
      datasets: [
        {
          label: 'Dataset 1',
          data: {{$dataSet1}},
          borderColor: 'rgb(75, 192, 192)',
          backgroundColor: 'rgb(105, 192, 162)',
        },
        {
          label: 'Dataset 2',
          data: {{$dataSet2}},
          borderColor: 'rgb(45, 192, 192)',
          backgroundColor: 'rgb(75, 192, 192)',
        }
      ]
    };
  
    new Chart({{$chartVar}}, {
      type: 'line',
      data: dataLine,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: "{{$chartLabel}}"
          }
        }
      },
    });

    </script>