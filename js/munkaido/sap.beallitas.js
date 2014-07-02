$(function() {
    
    $.datepicker.setDefaults( $.datepicker.regional[ "hu" ] );
    $('input[name="date_start"], input[name="date_end"]').datepicker();
    
    $('#clearFilter').click(function() {
        $('select[name="workers"]').val('-1');
        $('input[name="date"]').val('');
        $('#filter').click();
    });

    $('#filter').click(function() {
        $('#list').listTable('setExtraParam', 'worker', $('select[name="workers"]').val());
        $('#list').listTable('setExtraParam', 'date', $('input[name="date"]').val());
        $('#list').listTable('refresh');

        return false;
    });
   
    $('.list').listTable({
        url: 'ajax/munkaido.php?target=getWorkhourGrid',
        colname: ['id', 'Dolgozó', 'Kezdő dátum', 'Végdátum', 'Kezdés', 'Befejezés'],
        colmodel: [
            {name: 'id', index: 'id', key: true, hidden: true, width: 45},
            {name: 'fullname', index: 'fullname', width: 170},
            {name: 'date_start', index: 'date_start', width: 170},
            {name: 'date_end', index: 'date_end', width: 170},
            {name: 'start', index: 'start', width: 170},
            {name: 'end', index: 'end', width: 200}
        ],
        sortname: 'id',
        sortorder: 'desc',
        caption: 'Előre meghatározott munkaidők',
        width: $('#contentRight').width() - 30,
        autoFit: true,
        rowNum: 30,
        gridCompleteFunction: function() {
            $('#alertmod').remove();
            $('td[role="gridcell"]').css({
               outline: '1px solid #f2f2f2' 
            });
        },
        
        selectFunction: function() {
             $('#delete, #newTask').prop('disabled', false);
             $('#deleteTask').prop('disabled', true);
        },
                
        subGrid: true,
        subGridsOptions: [{
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
            caption: 'A dolgozó napi feladatai',
            captionDefault: 'A dolgozó napi feladatai',
            width: $('#contentRight').width() - 30,
            autoFit: true,
            rowNum: 30,
            gridCompleteFunction: function() {
                $('#alertmod').remove();
                $('td[role="gridcell"]').css({
                   outline: '1px solid #f2f2f2' 
                });
            },
            selectFunction: function() {
                $('#deleteTask').prop('disabled', false);
            },
        }]

    });
    
    $('#new').click(function() {
       $('#munkaidoBellitasForm').dialog('open');
    });
    
    $('#newTask').click(function() {
       $('#munkaidoHozzarendelesForm').dialog('open');
    });
    
    $('#munkaidoBellitasForm').dialog({
        autoOpen: false,
        title: 'Új munkaidő meghatározása',
        open: function() {
            $('input[name="start"], input[name="end"]').timepicker({
                dateFormat: 'H:i',
                timeOnlyTitle: 'Válassz időpontot',
                timeText: 'Időpont',
                hourText: 'Óra',
                minuteText: 'Perc',
                currentText: 'Most',
                closeText: 'Kész'
            });
        },
        buttons: {
            "Mentés": function() { $('#munkaidoBellitasForm').submit(); },
            "Mégse": function() { $(this).dialog("close"); }
        }
    });
    
    $('#munkaidoHozzarendelesForm').dialog({
        autoOpen: false,
        title: 'Új feladat hozzárendelése',
        open: function() {
            $('input[name="workhour_id"]').val($('#list').getGridParam('selrow')).hide();
            $('input[name="estimated_time"]').prop('pattern', '\d*').val('');
            $('select[name="product_id"]').find('option[value!="-1"]').remove();
            $('select[name="project_id"]').val(-1);
            $('select[name="operation_id"]').val(-1);
        },
        buttons: {
            "Mentés": function() { $('#munkaidoHozzarendelesForm').submit(); return false; },
            "Mégse": function() { $(this).dialog("close"); }
        }
    });
    
    function showErrors(formId, errors) {
       $('#' + formId + ' .message').addClass('newError').show().html('<strong>Hibás adatokat adtál meg!</strong><ul>');
       $.each(errors, function(i, val) {
          $('.message').append('<li>' + val + '</li>'); 
       });
       $('.message').append('</ul>');
    }
    
    $('#delete').click(function() {
        $.ajax({
            url: 'ajax/munkaido.php?target=deleteWorkhour',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#list').getGridParam('selrow')
            },
            success: function(data) {
                if (data.success) {
                    $('#list').listTable('refresh');
                }
            },
            error: function() {
                console.log('HIBA. Kód: 211');
            }
        });
    });
    
    $('#deleteTask').click(function() {
        $.ajax({
            url: 'ajax/munkaido.php?target=deleteTask',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#list_slave_0').find('tr[role="row"][aria-selected="true"]').prop('id')
            },
            success: function(data) {
                if (data.success) {
                    $('#list').listTable('refresh');
                    $('#deleteTask').prop('disabled', true);
                }
            },
            error: function() {
                console.log('HIBA. Kód: 211');
            }
        });
    });
    
    $('#delete').click(function() {
        $.ajax({
            url: 'ajax/munkaido.php?target=deleteWorkhour',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#list').getGridParam('selrow')
            },
            success: function(data) {
                if (data.success) {
                    $('#list').listTable('refresh');
                }
            },
            error: function() {
                console.log('HIBA. Kód: 211');
            }
        });
    });
    
    $('#munkaidoBellitasForm').submit(function() {
        $('.message').html('').hide();
        $(this).ajaxSubmit({
           type: 'post',
           dataType: 'json',
           success: function(data) {
               if (typeof(data.errors) !== 'undefined') {
                   showErrors('munkaidoBellitasForm', data.errors);
                   return false;
               }
               
               if (data.success) {
                    $('#munkaidoBellitasForm').dialog('close');
                    $('#list').listTable('refresh');
               }
           },
           error: function() {
                console.log('HIBA. Kód: 166');
           }
        });
        
        return false;
    });
    
    $('#munkaidoHozzarendelesForm').submit(function() {
        $('.message').html('').hide();
        $(this).ajaxSubmit({
           type: 'post',
           dataType: 'json',
           success: function(data) {
               if (typeof(data.errors) !== 'undefined') {
                   showErrors('munkaidoHozzarendelesForm', data.errors);
                   return false;
               }
               
               if (data.success) {
                    $('#munkaidoHozzarendelesForm').dialog('close');
                    $('#list').listTable('refresh');
               }
           },
           error: function() {
                console.log('HIBA. Kód: 168');
           }
        });
        
        return false;
    });
    
    $('select[name="product_id"]').prop('disabled', true);
    $('select[name="project_id"]').change(function() {
       //$('select[name="product_id"]').find('option[value=!="-1"]').remove();
       
       $.ajax({
            url: 'ajax/munkaido.php?target=getProductsByProject',
            dataType: 'json',
            type: 'post',
            data: {
                project_id: $(this).val()
            },
            success: function(data) {
                if (data) {
                    $('select[name="product_id"]').prop('disabled', false);
                    $.each(data, function(i, val) {
                        $('select[name="product_id"]').append('<option value="' + val.id + '">' + val.name + '</option>');
                    }); 
                }
            },
            error: function() {
                console.log('HIBA. Kód: 211');
            }
        });
        
    });
    
});