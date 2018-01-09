<?php /* Smarty version Smarty-3.1.7, created on 2016-08-08 17:34:39
         compiled from "/home/c/co35515/co355/public_html/template/echo_answer_ajax.html" */ ?>
<?php /*%%SmartyHeaderCode:19784337615775af56dc3f64-83648166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ec3c21830374491c43e80a0d4ae00ac93d6bcf' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/echo_answer_ajax.html',
      1 => 1470666873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19784337615775af56dc3f64-83648166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5775af56e076d',
  'variables' => 
  array (
    'text' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5775af56e076d')) {function content_5775af56e076d($_smarty_tpl) {?><div class="answer_item">
  <div style="float: left; margin-right: 15px;">
  <a href="" style="display: inline-block;">                 
    <img class="img-avatar" src="../upload/avatar/<?php echo $_SESSION['user']['photo_big'];?>
">               
    </a><br>                
    <span class="autor" style="display: block;text-align: center;"><?php echo $_SESSION['user']['first_name'];?>
</span>               
  </div>              
  <p style="white-space: pre-wrap;font-family: Hel-Light;display: inline; float: left; color: #666;margin: 0;"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p><br>
  <?php if ($_smarty_tpl->tpl_vars['image']->value){?>
    <a href="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
      <img src="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" style="max-width:380px; max-height:500px; margin-top: 15px;">
    </a>  
  <?php }?>
  <div style="clear: both"></div>  
  <div style="background-color: #40a5ed; height: 1px; margin-top: 10px"></div>
</div>                    
<?php }} ?>