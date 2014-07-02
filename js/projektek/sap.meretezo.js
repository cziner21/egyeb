$(function() {

    $('#meretezoSubmit').live('click', function(e) {
        e.preventDefault();
        var form = $(this).parent('form');
        var data = form.serialize();
        $('.message').hide();

        $.ajax({
            url:  'ajax/project.php?cmd=meretezoSubmit&bom_id = ' + form.attr('data-bom-id'),
            data: data,
            dataType: 'json',
            type: 'post',
            success: function(data) {
                if (typeof data.error !== 'undefined') {
                    showErrors('meretezoForm', [data.error]);
                    return false;
                } else {
                    alert('Sikeres mentés');
                }
            },  
            error: function() {
                alert('Hiba! Hibakód 200.');
            }
        });

        return false;
    });

    function showErrors(formId, errors) {
       $('#' + formId).prev('.message').show().addClass('newError');
       $.each(errors, function(i, val) {
          $('#' + formId).prev('.message').append('<li>' + val + '</li>'); 
       });
       $('#' + formId).prev('.message').append('</ul>');
       $('#' + formId).prev('.message').fadeOut(4000);
    }
});