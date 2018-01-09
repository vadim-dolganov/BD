<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:27:35
         compiled from "template2/recent_questions.html" */ ?>
<?php /*%%SmartyHeaderCode:10108245245769ac06e7f1a3-45821355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe5d54369c1bf62a5461ecc7d414514b322b161' => 
    array (
      0 => 'template2/recent_questions.html',
      1 => 1466598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10108245245769ac06e7f1a3-45821355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5769ac06eaaef',
  'variables' => 
  array (
    'arrayLastTask' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5769ac06eaaef')) {function content_5769ac06eaaef($_smarty_tpl) {?><div class="right_block_content">
  <div style="width: 220px;">
    <div class="title_block">
      <h3>Последние вопросы</h3>
    </div
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['arrayLastTask']->value)-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <div>
        <a href="/zadacha.php?id=<?php echo $_smarty_tpl->tpl_vars['arrayLastTask']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
          <p class="last_text_question"><?php echo $_smarty_tpl->tpl_vars['arrayLastTask']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['task_text'];?>
</p>
        </a>
        <ul>
          <li>
            <a href="" class="right_block_link"><?php echo $_smarty_tpl->tpl_vars['arrayLastTask']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['autor_name'];?>
</a>
          </li>
          <li>
            <a href="" class="right_block_link"><?php echo $_smarty_tpl->tpl_vars['arrayLastTask']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['item'];?>
</a>
          </li>
        </ul>
      </div>
    <?php endfor; endif; ?>   
  </div>
</div>
<div style="clear: both;"></div>
 </div><?php }} ?>