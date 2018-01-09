<?php /* Smarty version Smarty-3.1.7, created on 2016-06-24 01:51:42
         compiled from "template/answer.html" */ ?>
<?php /*%%SmartyHeaderCode:633297637576aa29d1aa479-19216090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec7ff373a8bba2e7cf7b0c59e9029f8a068f87f' => 
    array (
      0 => 'template/answer.html',
      1 => 1466722297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633297637576aa29d1aa479-19216090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576aa29d1db45',
  'variables' => 
  array (
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa29d1db45')) {function content_576aa29d1db45($_smarty_tpl) {?><div class="answer_task">
  <h2>ОТВЕТЫ</h2>
  <div id="content_answer">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['answer']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <div class="answer_item">
      <div style="float: left; margin-right: 15px;">
        <img class="img-avatar" style="display: inline-block;" src="/upload/avatar/<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['avatar'];?>
"><br>
        <a href="/id<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
">
          <span class="autor" style="display: block;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</span>
        </a>
      </div>
      <p class="answer_text"><?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['answer_text'];?>
</p><br>  
      <?php if ($_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image']){?>              
        <a href="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
          <img src="/upload/answer/<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" style="max-width: 67%; max-height:500px; margin-top: 15px;">
        </a>  
      <?php }?>             
       <div style="clear: both"></div>            
    </div>                    
    <div style="background-color: #40a5ed; height: 1px;"></div>
    <?php endfor; endif; ?>
    <?php if (count($_smarty_tpl->tpl_vars['answer']->value)==0){?>
      <p class="answerIsNo">На эту задачу, еще нет ответа!</p>
    <?php }?>               
   
  </div>
</div>
</div>
                  
                  <?php }} ?>