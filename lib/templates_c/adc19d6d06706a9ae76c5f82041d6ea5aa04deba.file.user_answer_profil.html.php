<?php /* Smarty version Smarty-3.1.7, created on 2016-06-25 02:12:42
         compiled from "template/user_answer_profil.html" */ ?>
<?php /*%%SmartyHeaderCode:240765526576c6d5c398ef8-56728870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc19d6d06706a9ae76c5f82041d6ea5aa04deba' => 
    array (
      0 => 'template/user_answer_profil.html',
      1 => 1466809951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240765526576c6d5c398ef8-56728870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576c6d5c3cbd3',
  'variables' => 
  array (
    'user' => 0,
    'userAnswer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576c6d5c3cbd3')) {function content_576c6d5c3cbd3($_smarty_tpl) {?><div>
  <h2 class="const_font" style="text-align: center;">Ответы пользователя «<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
» </h2> 
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['userAnswer']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <div class="min_task" style="width: 70%; margin: 0 auto;">        
    <div class="text_task" style="margin-left: 0; margin-bottom:20px;">          
      <div>           
        <a href="/task.php?id=<?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['task_id'];?>
">             
          <span class="autor">Ссылка на задачу</span>           
        </a>          
        <span class="date joint_item fl_right"><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</span>          
      </div>          
      <p><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['answer_text'];?>
</p>
      <?php if ($_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image']){?>              
        <a href="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
          <img src="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" style="max-width: 20%; max-height:500px; margin-top: 5px;">
        </a><br>  
      <?php }?>        
      <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['item'];?>
</span>          
      <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['class'];?>
 класс</span>
    </div>     
  </div>
 <?php endfor; endif; ?> 
</div><?php }} ?>