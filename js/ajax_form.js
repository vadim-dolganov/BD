function AjaxFormRequest(result_id, url) 
{
    var formData = new FormData($('form')[0]);
    jQuery.ajax(
    {
        type: "POST",  
        processData: false,
        contentType: false,
        url: url, 
        dataType: "html", 
        data: formData, 
        success: function(response) 
        {
            $(".answerIsNo").remove();
            $('#content_answer').append(response);
            $('#status').append("<p>Данные отправленны.</p>");
            $('#form_id').trigger('reset'); //очистка формы
            $('#spoiler_id').css('display', 'none');//сварачиваем форму
        },
        error:  function() 
        {              
            $('#status').empty();
            $('#status').append("<p>Ошибка. Данные не отправленны.</p>");
            $('#spoiler_id').css('display', 'none');
        }
    });
}
