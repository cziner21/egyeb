$(function() {
   
    $('.list').listTable({
        url: 'ajax/munkaido.php?target=getTaskGrid',
        colname: ['id', 'Munkaidő id', 'Projekt', 'Termék', 'Művelet', 'Becsült munkaidő'],
        colmodel: [
            {name: 'id', index: 'id', key: true, hidden: true, width: 45},
            {name: 'workhour_id', index: 'workhour_id', width: 170, hidden: true},
            {name: 'project_name', index: 'project_name', width: 170},
            {name: 'product_name', index: 'product_name', width: 170},
            {name: 'operation_name', index: 'operation_name', width: 170},
            {name: 'estimated_time', index: 'estimated_time', width: 170},
        ],
        sortname: 'id',
        sortorder: 'desc',
        caption: 'Feladataim',
        captionDefault: 'A dolgozó napi feladatai',
        width: $('#contentRight').width() - 30,
        autoFit: true,
        rowNum: 30,
        beforeRefresh: function() {
            $('#list').listTable('setExtraParam', 'workerView', true);
        },
        gridCompleteFunction: function() {
            $('#alertmod').remove();
            $('td[role="gridcell"]').css({
               outline: '1px solid #f2f2f2' 
            });
        }

    });
   
    $.ajax({
        url: 'ajax/munkaido.php?target=isCheckedIn',
        dataType: 'json',
        type: 'post',
        success: function(data) {
            if (typeof(data.result) !== 'undefined') {
                $('#checkIn').prop('disabled', data.result.checkIn);
                $('#checkOut').prop('disabled', data.result.checkOut);
                
                if (data.result.checkIn && data.result.checkOut) {
                    $('#checkIn').prop('disabled', false);
//                    $('.message').addClass('newWarning')
//                            .html('Ma már sikeresen be- és kicsekkoltál.')
//                            .show();
                }
            }
        },
        error: function() {
            console.log('HIBA. Kód: 211');
        }
    });
    
    $('.actionButton').click(function() {
       doCheckIn($(this).prop('id'));
       return false;
    });
    
    function doCheckIn(action) {
        $.ajax({
            url: 'ajax/munkaido.php?target=doCheckIn',
            dataType: 'json',
            type: 'post',
            data: {action: action},
            success: function(data) {
                if (typeof(data.success) !== 'undefined') {
                    if (data.success) {
                        $('.actionButton').prop('disabled', true);
                        $('.message').addClass('newSuccess')
                                .show()
                                .html('Sikeresen ' + (action == 'checkIn'? 'becsekkoltál' : 'kicsekkoltál') + '.');
                    }
                }
            },
            error: function() {
                console.log('HIBA. Kód: 211');
            }
        });
        
        return false;
    }
    
});