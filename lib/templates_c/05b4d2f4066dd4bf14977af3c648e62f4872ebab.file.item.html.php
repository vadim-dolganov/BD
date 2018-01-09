<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:27:35
         compiled from "template2/item.html" */ ?>
<?php /*%%SmartyHeaderCode:22244834157699b9c7f0406-63686760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b4d2f4066dd4bf14977af3c648e62f4872ebab' => 
    array (
      0 => 'template2/item.html',
      1 => 1466598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22244834157699b9c7f0406-63686760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57699b9c83773',
  'variables' => 
  array (
    'array' => 0,
    'page' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57699b9c83773')) {function content_57699b9c83773($_smarty_tpl) {?><div class="content">
  <div class="left_block_content">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['array']->value)-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <img class="img-avatar avatar" src="/user/avatar/<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['avatar'];?>
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
          <a href="/zadacha.php?id=<?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['task_text'];?>
</p></a>
          <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['item'];?>
</span>
          <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['array']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['class'];?>
 класс</span>
          <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?>
            <span class="joint_item answer fl_right">Есть ответ</span>  
          <?php }?>
        </div>
      </div>  
    <?php endfor; endif; ?>
    <div>
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
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
    </div>
  </div>
        <?php }} ?>