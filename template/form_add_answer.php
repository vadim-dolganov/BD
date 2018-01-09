{if isset($smarty.session.user)}
  <div id="status"></div><div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none;" id="spoiler_id">     
      <strong>{$substr_task}</strong>
      <form method="post" enctype="multipart/form-data" id="form_id">	                   
        <textarea name="text_answer" rows="8" placeholder="Текст ответа..."></textarea>         
        <input name="postid" type="hidden" value="{$post_id}">                 
        <p class="file_label_p">Добавить картинку:</p>                  
        <div class="fileform">                    
          <div id="fileformlabel"></div>                   
          <div class="selectbutton">Обзор</div>                    
          <input id="image" type="file" name="image" onchange="getName()">                      
          <input type="hidden" name="MAX_FILE_SIZE" value="100000">                    
        </div>	                  	                                   
        <input type="button" value="Отправить" class="buttonOnClick" onclick="AjaxFormRequest('content_answer',  'handler/add_answer.php')"/>                  
      </form>                
    </div>             
  </div>
{else}
  <div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none; text-align: center; max-width: 55%">
      <strong>{$substr_task}</strong>
      <p class="file_label_p" style="font-size: 13px;">Добавить ответ, могут только Авторизированные пользователи.</p>
    </div>
  </div>
{/if}
    