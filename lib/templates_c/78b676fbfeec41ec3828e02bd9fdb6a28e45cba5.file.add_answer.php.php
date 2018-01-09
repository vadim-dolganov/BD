<?php /* Smarty version Smarty-3.1.7, created on 2016-06-23 01:51:08
         compiled from "template/add_answer.php" */ ?>
<?php /*%%SmartyHeaderCode:579333953576aa29d19b1c5-42290478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78b676fbfeec41ec3828e02bd9fdb6a28e45cba5' => 
    array (
      0 => 'template/add_answer.php',
      1 => 1466635768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579333953576aa29d19b1c5-42290478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576aa29d1a80d',
  'variables' => 
  array (
    'post_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa29d1a80d')) {function content_576aa29d1a80d($_smarty_tpl) {?><?php if (isset($_SESSION['user'])){?>
  <div id="error_id"></div><div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none;" id="spoiler_id">                  
      <form method="post" enctype="multipart/form-data" id="form_id">	                   
        <textarea name="text_answer" rows="14" placeholder="Текст ответа..."></textarea>         
        <input name="postid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
">                 
        <p class="file_label_p">Добавить картинку:</p>                  
        <div class="fileform">                    
          <div id="fileformlabel"></div>                   
          <div class="selectbutton">Обзор</div>                    
          <input id="image" type="file" name="image" onchange="getName()">                      
          <input type="hidden" name="MAX_FILE_SIZE" value="100000">                    
        </div>	                  	                                   
        <input type="button" value="Отправить" class="buttonOnClick" onclick="AjaxFormRequest('content_answer', 'form_id', 'handler/form_answer.php')"/>                  
      </form>                
    </div>             
  </div>
<?php }else{ ?>
  <div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none;">
      <p class="file_label_p" style="font-size: 13px;">Добавить ответ, могут только Авторизированные пользователи.</p>
    </div>
  </div>
<?php }?>
    <?php }} ?>