<?php /* Smarty version Smarty-3.1.7, created on 2016-09-29 09:24:47
         compiled from "template/item.html" */ ?>
<?php /*%%SmartyHeaderCode:1897490610576aa29b04ac35-63739141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeae0d6e6e4d30572422c7907296a1d08daacc9f' => 
    array (
      0 => 'template/item.html',
      1 => 1475087376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897490610576aa29b04ac35-63739141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576aa29b0dbc0',
  'variables' => 
  array (
    'array' => 0,
    'page' => 0,
    'subject' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa29b0dbc0')) {function content_576aa29b0dbc0($_smarty_tpl) {?>
<div class="content">
  <h1 style="font-size: 15pt; margin-top:0px;">Добавленные задачи</h1>
  <div class="left_block_content">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['array']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>   
      <div class="min_task">
        <img class="img-avatar avatar" src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['avatar'];?>
" alt="Добавил <?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
">
        <div class="text_task">
          <div>
            <a href="/id<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
"><span class="autor"><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</span></a>
            <span class="date joint_item fl_right"><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</span>
          </div>
          <i class="pointer"></i>
          <a href="/task.php?id=<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['task_id'];?>
"><p><?php echo mb_substr($_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['task_text'],0,150);?>
...</p></a>
          <?php if ($_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image']){?>
            <a href="/upload/question/<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" class="link_image">
              <img src="/upload/question/<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" class="attach_image_task">
            </a><br>
          <?php }?>
          <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['item'];?>
</span>
          <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['class'];?>
 класс</span>
          <?php if ($_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['answer_id']){?>
            <span class="joint_item answer fl_right">Есть ответ</span>  
          <?php }?>
        </div>
      </div>  
    <?php endfor; endif; ?>
    <div>
      <?php if ($_SERVER['PHP_SELF']=='/subject.php'){?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?> 
            <a href="/subject/<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
/1" class="joint_item">Начало</a>
        <?php }?>
      
        <?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?> 
            <a href="/subject/<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a> | 
        <?php }?>
      
        <?php if ($_smarty_tpl->tpl_vars['page']->value>0){?> 
          <a href="/subject/<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="joint_item"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a> | 
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['total']->value){?> 
          <a href="/subject/<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a> | 
        <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['total']->value){?>
          <a href="/subject/<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="joint_item">Конец</a>
        <?php }?>
      <?php }else{ ?> 
        <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?> 
            <a href="/page/1" class="joint_item">Начало</a>
        <?php }?>
      
        <?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?> 
            <a href="/page/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</a> | 
        <?php }?>
      
        <?php if ($_smarty_tpl->tpl_vars['page']->value>0){?> 
          <a href="/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="joint_item"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a> | 
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['total']->value){?> 
          <a href="/page/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a> | 
        <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['total']->value){?>
          <a href="/page/<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="joint_item">Конец</a>
        <?php }?>
      <?php }?>
    </div>
  </div>
        <?php }} ?>