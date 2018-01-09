<?php /* Smarty version Smarty-3.1.7, created on 2017-09-11 22:12:07
         compiled from "/home/c/co35515/co355/public_html/template/user_profil.html" */ ?>
<?php /*%%SmartyHeaderCode:12001339415771647e26a3b1-28580109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36afced5d9d2d5feea5e78522148ec59ec8d1c5' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/user_profil.html',
      1 => 1505157119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12001339415771647e26a3b1-28580109',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5771647e28a48',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5771647e28a48')) {function content_5771647e28a48($_smarty_tpl) {?><div class="user_profil">            
  <div  class="user_img fl_left">              
    <img  src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
">              
  </div>            
  <div style="float: left;">  
    <h1><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</h1>
    <div>
      <img src="/img/points-icon.png" class="points_icon fl_left">
      <span class="text_points"><?php echo $_smarty_tpl->tpl_vars['user']->value['points'];?>
</span>
      <div style="clear: both;"></div>
    </div>
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