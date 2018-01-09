<?php /* Smarty version Smarty-3.1.7, created on 2016-06-24 01:52:08
         compiled from "template/post.html" */ ?>
<?php /*%%SmartyHeaderCode:1702739091576aa29d15a096-76044574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fcd6191035fb07a5a7b4276f935644ca107c856' => 
    array (
      0 => 'template/post.html',
      1 => 1466722323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1702739091576aa29d15a096-76044574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576aa29d1974d',
  'variables' => 
  array (
    'post' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa29d1974d')) {function content_576aa29d1974d($_smarty_tpl) {?><div class="content">   
  <div class="left_block_content">
    <div>
      <img class="avatar img-avatar" src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>
">
      <div class="text_task"> 
        <div>
          <a href="/id<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
            <span class="autor"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</span>
          </a>
          <span class="date joint_item fl_right"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span>
        </div>
        <i class="pointer"></i>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['task_text'];?>
</p><br>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['image']){?>
        <a href="/upload/question/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="link_image"><img src="/upload/question/<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="attach_image_task"></a><br>
        <?php }?>
        <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['post']->value['item'];?>
</span>
        <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['post']->value['class'];?>
 класс</span> 
      </div>
    </div>   <?php }} ?>