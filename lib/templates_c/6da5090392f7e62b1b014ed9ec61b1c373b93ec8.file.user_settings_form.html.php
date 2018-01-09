<?php /* Smarty version Smarty-3.1.7, created on 2016-06-27 20:32:22
         compiled from "/home/c/co35515/co355/public_html/template/user_settings_form.html" */ ?>
<?php /*%%SmartyHeaderCode:52027097357716326b5a5a3-74196580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da5090392f7e62b1b014ed9ec61b1c373b93ec8' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/user_settings_form.html',
      1 => 1467048637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52027097357716326b5a5a3-74196580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57716326b6ecf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57716326b6ecf')) {function content_57716326b6ecf($_smarty_tpl) {?><div class="user_profil">            
  <div  class="user_img fl_left">              
    <img  src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
">              
  </div>            
  <div style="float: left; width: 33%;">              
    <h1 style="text-align: left;margin-bottom: 15px;"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</h1>
    <form enctype="multipart/form-data" method="post" action="../handler/edit_profile.php">
      <input type="file" id="settingsform-avatar" name="SettingsAvatar" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
">
      <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" class="settingName" name="name">
      <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
" class="settingLastName" name="lastname">
      <input type="submit" value="Отправить" class="buttonOnClick">  
    </form>
  </div>              
  <div style="clear:both"></div>           
   
</div> 
<?php }} ?>