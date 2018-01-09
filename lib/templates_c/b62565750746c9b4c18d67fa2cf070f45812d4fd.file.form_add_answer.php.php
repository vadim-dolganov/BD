<?php /* Smarty version Smarty-3.1.7, created on 2016-09-05 03:36:01
         compiled from "/home/c/co35515/co355/public_html/template/form_add_answer.php" */ ?>
<?php /*%%SmartyHeaderCode:199946077157757d178d2a79-63089122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62565750746c9b4c18d67fa2cf070f45812d4fd' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/form_add_answer.php',
      1 => 1473035759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199946077157757d178d2a79-63089122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57757d1790993',
  'variables' => 
  array (
    'substr_task' => 0,
    'post_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57757d1790993')) {function content_57757d1790993($_smarty_tpl) {?><?php if (isset($_SESSION['user'])){?>
  <div id="status"></div><div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none;" id="spoiler_id">     
      <strong><?php echo $_smarty_tpl->tpl_vars['substr_task']->value;?>
</strong>
      <form method="post" enctype="multipart/form-data" id="form_id">	                   
        <textarea name="text_answer" rows="8" placeholder="Текст ответа..."></textarea>         
        <input name="postid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
">                 
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
<?php }else{ ?>
  <div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none; text-align: center; max-width: 55%">
      <strong><?php echo $_smarty_tpl->tpl_vars['substr_task']->value;?>
</strong>
      <p class="file_label_p" style="font-size: 13px;">Добавить ответ, могут только Авторизированные пользователи.</p>
    </div>
  </div>
<?php }?>
    <?php }} ?>