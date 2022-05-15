
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>


<html>
<body>

<canvas id="myChart" style="width:100%;max-width:700px"></canvas>

</body>
</html>
 <script>
     var xValues = ['26',"27","28","29","30"];

     new Chart("myChart", {
         type: "line",
         data: {
             labels: xValues,
             datasets: [{
                 data: [860,1140,1060,1060,1070],
                 borderColor: "red",
                 fill: false,
                 label: 'Views'
             },{
                 data: [1600,1700,1700,1900,2000],
                 borderColor: "green",
                 fill: false,
                 label: 'Likes'
             },{
                 data: [300,700,2000,5000,6000],
                 borderColor: "blue",
                 fill: false,
                 label: 'DisLikes'
             }]
         },
         options: {
             legend: {display: true,
                        red: "lol"
             }
         }
     });
 </script>