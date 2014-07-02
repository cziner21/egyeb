$(function() {
    $('input[name="startDate"], input[name="endDate"]').datepicker();

    $('select[name="workers"] option')
            .first()
            .prop('disabled', 'disabled')
            .next()
            .prop('selected', 'selected');

    $('#clearFilter').click(function() {
        $('select[name="workers"]').val('-1');
        $('input[name="startDate"], input[name="endDate"]').val('');
        $('#filter').click();
    });
    
    $('#filter').click(function() {
        getData();
    });
    
    getData();
    function getData() {
        if (plot1)
            plot1.destroy();
        
        $.ajax({
           url: 'ajax/munkaido.php?target=getPlot',
           type: 'post',
           dataType: 'json',
           data: {
               worker: $('select[name="workers"]').val(),
               startDate: $('input[name="startDate"]').val(),
               endDate: $('input[name="endDate"]').val()
           },
           success: function(data) {
               if (typeof(data.error) === 'undefined' && data) {
                   renderChart([data.data]);
               }
           },
           error: function() {
            
           }
            
        });
    }
   
    var plot1 = null;
    function renderChart(data) {
        plot1 = $.jqplot('plot', data, {
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            rendererOptions: {fillToZero: true}
        },
        axes: {
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
               // ticks: ticks
            },
            yaxis: {
                pad: 1.05
            }
        }
    });
    }     


});