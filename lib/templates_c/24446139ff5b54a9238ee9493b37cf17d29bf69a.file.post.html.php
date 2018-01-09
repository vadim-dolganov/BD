<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:34:34
         compiled from "template2/post.html" */ ?>
<?php /*%%SmartyHeaderCode:144658835769b48a346f79-33002117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24446139ff5b54a9238ee9493b37cf17d29bf69a' => 
    array (
      0 => 'template2/post.html',
      1 => 1466598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144658835769b48a346f79-33002117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5769b48a37550',
  'variables' => 
  array (
    'post' => 0,
    'date' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5769b48a37550')) {function content_5769b48a37550($_smarty_tpl) {?><div class="content">   
  <div class="left_block_content">
    <div>
      <img class="avatar img-avatar" src="/user/avatar/<?php echo $_smarty_tpl->tpl_vars['post']->value['avatar'];?>
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
        <?php if ($_smarty_tpl->tpl_vars['row']->value['image']){?>
          <a href="/upload/question/'.$row['image'].'"><img src="/upload/question/'.$row['image'].'" style="max-width:380px; max-height:500px;"></a><br>
        <?php }?>
        <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['post']->value['item'];?>
</span>
        <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['post']->value['class'];?>
 класс</span> 
      </div>
    </div>   <?php }} ?>