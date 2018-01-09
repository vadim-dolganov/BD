<?php /* Smarty version Smarty-3.1.7, created on 2018-01-09 01:17:58
         compiled from "/home/c/co35515/co355/public_html/template/user_answer_profil.html" */ ?>
<?php /*%%SmartyHeaderCode:16530914355771647e28ea74-40408451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6eaac8a701d1ff055aea7bdfba8329a5859e32' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/user_answer_profil.html',
      1 => 1515449877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16530914355771647e28ea74-40408451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5771647e2bf70',
  'variables' => 
  array (
    'countAnswer' => 0,
    'userAnswer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5771647e2bf70')) {function content_5771647e2bf70($_smarty_tpl) {?><div>
  <div id="content">
  <p class="count-user">Количество решенных задач: <?php echo $_smarty_tpl->tpl_vars['countAnswer']->value;?>
</p>
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
        <span class="date joint_item fl_right date"><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</span>          
      </div>          
      <p><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['answer_text'];?>
</p>
      <?php if ($_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image']){?>              
        <a href="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
          <img src="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" style="max-width: 20%; max-height:500px; margin-top: 5px;" alt="Решение пользователя">
        </a><br>  
      <?php }?>        
      <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['item'];?>
</span>          
      <span class="joint_item"><?php echo $_smarty_tpl->tpl_vars['userAnswer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['class'];?>
 класс</span>
    </div>     
  </div>
 <?php endfor; endif; ?> 
</div>
   <div id="load">
   <div>Загрузить еще</div>
     <img src="../img/loading.gif" id="imgLoad" alt="загрузка">
 </div>
</div>
<?php }} ?>