function getName()
{
    var filename = document.getElementById('image').value.replace(/.*[\\\/]/, "");
    document.getElementById('fileformlabel').innerHTML = filename; 
}

function checkParams() 
{
    var predmetVal = $("#predmet_select option:selected").val();
    var classVal = $("#class_select option:selected").val();
    var pointsVal = $("#points_select option:selected").val();
    var textVal = $('#checkText').val();
    if((textVal) && (classVal) && (predmetVal) && (pointsVal)) 
    {
        $('#submitDisabled').removeAttr('disabled');
        $('#submitDisabled').css({'background-color': '#8ca9cf'});
    } 
    else 
    {
        $('#submitDisabled').attr('disabled', 'disabled');
        $('#submitDisabled').css({'background-color': '#d3deed'});
    }
}

$(document).ready(function(){
 $('.spoiler_links').click(function(){
   $('div.spoiler_body').slideToggle('normal');
  return false;
 });
$('.user_links').click(function(){
  $(this).parent().children('div.user_spoiler_body').toggle('normal');
  return false;
 });
});

$(document).ready(function() 
{   
    $('span[id=modal]').click(function() 
    {
        $('body').css('overflow', 'hidden');
        var id = '#dialog';
      //$(this).attr('href');

        $('#mask').css({'width': '100%','height': '100%'});
        $('#mask').fadeTo("slow",0.8);
        $(id).fadeIn(1000);
        var winH = $(window).height();
        var winW = $(window).width();
         
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2); 
    });
    
    $('#mask').click(function () 
    {
        $(this).hide();
        $('.window').hide();
        $('body').css('overflow', 'auto');     
    }); 
});  


