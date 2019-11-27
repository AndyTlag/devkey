// Load Charts and the corechart package.
google.charts.load('current', {'packages':['corechart']});

  // Draw the pie chart for Sarah's pizza when Charts is loaded.
  google.charts.setOnLoadCallback(statusAtividade);



  // Callback that draws the pie chart for Sarah's pizza.
  function statusAtividade() {

    // Create the data table for Sarah's pizza.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Pendentes');
    data.addColumn('number', 'Executando');
    data.addColumn('number', 'Finalizados');
    data.addRows([
      ['Andressa', 1,9,9],
      ['Calebe', 1,9,9],
      ['Gabriel', 2,9,9],
      ['Gabrielle', 2,9,9],
      ]);

    // Set options.
    var options = {
      title:'',
                   // width:400,
                   // height:300
                   //width: '100%',
                   //height: '100%',
                   chartArea: {
                    left: "10%",
                    top: "10%",
                    height: "70%",
                    width: "70%"
                },

                colors: ['#ff3333','#f3ff33','#6cff33']
            };

    // Instantiate and draw the chart.
    var chart = new google.visualization.ColumnChart(document.getElementById('Status_Atividade'));
    chart.draw(data, options);

    $(document).ready(function () {
       $(window).resize(function(){
        statusAtividade();
    });
   });
}
