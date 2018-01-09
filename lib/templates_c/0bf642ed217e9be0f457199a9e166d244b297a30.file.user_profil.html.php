<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:33:29
         compiled from "template2/user_profil.html" */ ?>
<?php /*%%SmartyHeaderCode:15792729595769c45c2d2372-37068920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf642ed217e9be0f457199a9e166d244b297a30' => 
    array (
      0 => 'template2/user_profil.html',
      1 => 1466598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15792729595769c45c2d2372-37068920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5769c45c3079f',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5769c45c3079f')) {function content_5769c45c3079f($_smarty_tpl) {?><div style="width: 100%;max-width: 500px;margin: 0 auto;margin-top: 100px;">            
  <div  style="float: left;margin-right: 20px;width: 25%;">              
    <img  src="/user/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" style="padding: 1px;max-width: 100%;border: 1px solid#CCC;height: auto;">              
  </div>            
  <div style="float: left;">              
    <h1 style="display: block;font-size: 20px;margin: 0 auto;max-width: 100%;"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</h1>              
    <div style="font-size: 11px;">                
      <a href="/user/profile" style="color: #168de2;">Профиль</a> |                
      <a href="/user/settings" style="color: #168de2;">Настройки</a> |                
      <a href="../user/exit.php" style="color: #168de2;">Выход</a>              
    </div>            
  </div>              
  <div style="clear:both"></div>           
  <h3 style="font-family: Hel-Light;color: #666;font-weight: 600; margin-bottom: 20px;text-align: center;">Ответы пользователя «<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
» </h3>         
</div><?php }} ?>