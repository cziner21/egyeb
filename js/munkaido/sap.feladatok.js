$(function() {
   
    $('#clearFilter').click(function() {
        $('input[name="name"]').val('');
        $('#filter').click();
    });
   
     $('#filter').click(function() {
        $('#list').listTable('setExtraParam', 'name', $('.rightBlock').find('input[name="name"]').val());
        $('#list').listTable('refresh');

        return false;
    });
   
    $('.list').listTable({
        url: 'ajax/feladat.php?target=getGrid',
        colname: ['id', 'Feladat neve'],
        colmodel: [
            {name: 'id', index: 'id', key: true, hidden: true, width: 45},
            {name: 'name', index: 'name'}
        ],
        sortname: 'id',
        sortorder: 'desc',
        caption: 'Feladat lista',
        width: $('#contentRight').width() - 30,
        autoFit: true,
        rowNum: 30,
        gridCompleteFunction: function() {
            $('#alertmod').remove();
            $('td[role="gridcell"]').css({
               outline: '1px solid #f2f2f2' 
            });
            $('#edit').prop('disabled', true);
            $('#delete').prop('disabled', true);
        },
        
        selectFunction: function() {
             $('#delete').prop('disabled', false);
             $('#edit').prop('disabled', false);
        },
        refresh: function() {
            $('#delete').prop('disabled', true);
            $('#edit').prop('disabled', true);
        }

    });
    
    $('#delete').click(function() {
        $.ajax({
            url: 'ajax/feladat.php?target=delete',
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
    
    $('#new').click(function() {
       $('#list').listTable('refresh');
       $('#newTaskForm').dialog('open');
    });
    
    $('#edit').click(function() {
       $('#newTaskForm').dialog('open');
    });
    
     $('#newTaskForm').dialog({
        autoOpen: false,
        title: 'Feladat',
        open: function() {
            $('#newTaskForm').find('select[name="name"]').val('');
        },
        buttons: {
            "Mentés": function() { $('#newTaskForm').submit(); },
            "Mégse": function() { $(this).dialog("close"); }
        }
    });
    
    $('#newTaskForm').submit(function() {
        $('.message').html('').hide();
        $(this).ajaxSubmit({
           type: 'post',
           dataType: 'json',
           data: {
               id: $('#list').getGridParam('selrow'),
               name: $('select[name="name"]').val()
           },
           success: function(data) {
               if (typeof(data.errors) !== 'undefined') {
                   showErrors('newTaskForm', data.errors);
                   return false;
               }
               
               if (data.success) {
                    $('#newTaskForm').dialog('close');
                    $('#list').listTable('refresh');
               }
           },
           error: function() {
                console.log('HIBA. Kód: 170');
           }
        });
        
        return false;
    });
    
    function showErrors(formId, errors) {
       $('#' + formId + ' .message').addClass('newError').show().html('<strong>Hibás adatokat adtál meg!</strong><ul>');
       $.each(errors, function(i, val) {
          $('.message').append('<li>' + val + '</li>'); 
       });
       $('.message').append('</ul>');
    }
    
});