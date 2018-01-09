<?php /* Smarty version Smarty-3.1.7, created on 2016-06-24 02:14:36
         compiled from "template/user_profil.html" */ ?>
<?php /*%%SmartyHeaderCode:1111598258576aa2a289fcb8-09906716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b2fe050772e8b12dedf07a2c268f04eb9321b48' => 
    array (
      0 => 'template/user_profil.html',
      1 => 1466723520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111598258576aa2a289fcb8-09906716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576aa2a28d45c',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa2a28d45c')) {function content_576aa2a28d45c($_smarty_tpl) {?><div class="user_profil">            
  <div  class="user_img fl_left">              
    <img  src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
">              
  </div>            
  <div style="float: left;">              
    <h1><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['user_id']==$_SESSION['user']['user_id']){?>
    <div style="font-size: 11px;">                             
      <a href="/user/settings.php" style="color: #168de2;">Настройки</a> |                
      <a href="../user/exit.php" style="color: #168de2;">Выход</a>              
    </div>  
    <?php }?>
  </div>              
  <div style="clear:both"></div>           
   
</div> 
<?php }} ?>