<?php /* Smarty version Smarty-3.1.7, created on 2016-06-30 23:36:23
         compiled from "/home/c/co35515/co355/public_html/template/answer_ajax.html" */ ?>
<?php /*%%SmartyHeaderCode:1238471307577581bdb5ed51-22156544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0efc19ad5757081f0e2d4206662579d0495e3943' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/answer_ajax.html',
      1 => 1467318972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238471307577581bdb5ed51-22156544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_577581bdb8973',
  'variables' => 
  array (
    'text' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577581bdb8973')) {function content_577581bdb8973($_smarty_tpl) {?><div class="answer_item">
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
</div>                    
<?php }} ?>