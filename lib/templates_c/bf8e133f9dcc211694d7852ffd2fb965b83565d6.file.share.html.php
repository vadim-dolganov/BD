<?php /* Smarty version Smarty-3.1.7, created on 2016-08-29 00:28:20
         compiled from "/home/c/co35515/co355/public_html/template/share.html" */ ?>
<?php /*%%SmartyHeaderCode:105006494157c3503ea21a97-57456898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8e133f9dcc211694d7852ffd2fb965b83565d6' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/share.html',
      1 => 1472419697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105006494157c3503ea21a97-57456898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57c3503ea326f',
  'variables' => 
  array (
    'page_url' => 0,
    'substr_task' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c3503ea326f')) {function content_57c3503ea326f($_smarty_tpl) {?><div class="share">       
  <a href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" rel="nofollow" target="_blank">     
    <span class="share_const service_vk"></span>            
  </a>     
  <a href="https://www.facebook.com/sharer.php?src=<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" rel="nofollow" target="_blank">       
    <span class="share_const service_facebook"></span>             
  </a>     
  <a href="https://twitter.com/intent/tweet?text=<?php echo $_smarty_tpl->tpl_vars['substr_task']->value;?>
&url=<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" rel="nofollow" target="_blank">      
    <span class="share_const service_twitter"></span>         
  </a>      
  <a href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" rel="nofollow" target="_blank">        
    <span class="share_const service_odnoklassniki"></span>             
  </a>     
  <a href="https://connect.mail.ru/share?url=<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
" rel="nofollow" target="_blank">     
    <span class="share_const service_moimir"></span>             
  </a>    
</div><?php }} ?>