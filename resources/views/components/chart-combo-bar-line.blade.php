
<div>
    <canvas id="comboBarLine"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

  const ct1 = document.getElementById('comboBarLine');


  const data = {
  labels: ['PESO', 'HRMO', 'ICTO', 'Thurs', 'MEO', 'BPSO', 'GSO'],
  datasets: [
      {
        label: 'Office Size',
        data: ['2', '4', '14', '6', '7', '9', '23'],
        borderColor: '#4dc9f6',
        backgroundColor: '#4dc9f6',
        order: 1
      },
      {
        label: '# of SIck Leaves',
        data: ['2', '4', '4', '6', '7', '9', '13'],
        borderColor: '#58595b',
        backgroundColor: '#58595b',
        type: 'line',
        order: 0
      }
    ]
  };
    
  const config = {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Increase of Sick Leaves by Size of Office'
        }
      }
    },
  };

  new Chart(ct1, config);



</script>