<?php /* Smarty version Smarty-3.1.7, created on 2016-06-30 14:29:15
         compiled from "/home/c/co35515/co355/public_html/template/add_answer.php" */ ?>
<?php /*%%SmartyHeaderCode:92757442257716477643a21-59805441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab37177e531647d634df1da383ae9257822199f' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/add_answer.php',
      1 => 1467286154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92757442257716477643a21-59805441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5771647765075',
  'variables' => 
  array (
    'post_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5771647765075')) {function content_5771647765075($_smarty_tpl) {?><?php if (isset($_SESSION['user'])){?>
  <div id="error_id"></div><div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none;" id="spoiler_id">                  
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
        <input type="button" value="Отправить" class="buttonOnClick" onclick="AjaxFormRequest('content_answer', 'form_id', 'handler/form_answer.php')"/>                  
      </form>                
    </div>             
  </div>
<?php }else{ ?>
  <div class="add_answer"> 
    <a href="" class="spoiler_links">Решить задание</a>
    <div class="spoiler_body" style="display: none; text-align: center; max-width: 55%">
      <p class="file_label_p" style="font-size: 13px;">Добавить ответ, могут только Авторизированные пользователи.</p>
    </div>
  </div>
<?php }?>
    <?php }} ?>