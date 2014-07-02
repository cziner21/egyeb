$(function() {
    $('input[name="startDate"], input[name="endDate"]').datepicker();

    $('#clearFilter').click(function() {
        $('select[name="workers"]').val('-1');
        $('input[name="startDate"], input[name="endDate"]').val('');
        $('#filter').click();
    });

    $('#filter').click(function() {
        $('#list').listTable('setExtraParam', 'worker', $('select[name="workers"]').val());
        $('#list').listTable('setExtraParam', 'startDate', $('input[name="startDate"]').val());
        $('#list').listTable('setExtraParam', 'endDate', $('input[name="endDate"]').val());
        $('#list').listTable('refresh');

        return false;
    });

    $('.list').listTable({
        url: 'ajax/munkaido.php?target=getGrid',
        colname: ['id', 'Dolgozó', 'Nap', 'Érkezés', 'Távozás',
            'Munka kezdete', 'Munka befejezése', 'Módosítás', 'Ledolgozott munkaidő'],
        colmodel: [
            {name: 'id', index: 'id', key: true, hidden: true, width: 45},
            {name: 'user', index: 'user', width: 170},
            {name: 'date_date', index: 'date_date', width: 170},
            {name: 'checkin', index: 'checkin', width: 170},
            {name: 'checkout', index: 'checkout', width: 170},
            {name: 'actual_starttime', index: 'actual_starttime', width: 200},
            {name: 'actual_endtime', index: 'actual_endtime', width: 200},
            {name: 'mod', index: 'mod', align: 'center'},
            {name: 'worked_hours', index: 'worked_hours', align: 'center'},
        ],
        sortname: 'datetime_start',
        sortorder: 'desc',
        caption: 'Ledolgozott munkaidők',
        width: $('#contentRight').width() - 30,
        autoFit: true,
        rowNum: 30,
        gridCompleteFunction: function() {
            $('#alertmod').remove();
            $('td[role="gridcell"]').css({
               outline: '1px solid #f2f2f2' 
            });
        }

    });
    
    $('#toXLS').click(function() {

        window.open('ajax/munkaido.php?target=getGridToXLS&worker=' 
                + $('select[name="workers"]').val() + '&startDate=' + $('input[name="startDate"]').val() + '&endDate=' + $('input[name="startDate"]').val() , 
        'XLS export');
        return false;
    });
});