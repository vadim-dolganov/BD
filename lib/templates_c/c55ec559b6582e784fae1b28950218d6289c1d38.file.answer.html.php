<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:34:34
         compiled from "template2/answer.html" */ ?>
<?php /*%%SmartyHeaderCode:10516236195769ba9d75e179-24090885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c55ec559b6582e784fae1b28950218d6289c1d38' => 
    array (
      0 => 'template2/answer.html',
      1 => 1466598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10516236195769ba9d75e179-24090885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5769ba9d79051',
  'variables' => 
  array (
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5769ba9d79051')) {function content_5769ba9d79051($_smarty_tpl) {?><div class="answer_task">
  <h2>ОТВЕТЫ</h2>
  <div id="content_answer">
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['answer']->value)-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <img class="img-avatar" style="display: inline-block;" src="/user/avatar/<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['avatar'];?>
"><br>
        <a href="/id<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user_id'];?>
">
          <span class="autor" style="display: block;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</span>
        </a>
      </div>
      <p style="white-space: pre-wrap;    max-width: 600px; font-family:  Hel-Light;display: inline; float: left; color: #666;margin: 0;"><?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['answer'];?>
</p><br>  
      <?php if ($_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image']){?>              
        <a href="/upload/<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
          <img src="/upload/<?php echo $_smarty_tpl->tpl_vars['answer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" style="max-width:380px; max-height:500px; margin-top: 15px;">
        </a>  
      <?php }?>             
       <div style="clear: both"></div>            
    </div>                    
    <div style="background-color: #40a5ed; height: 1px;"></div>
    <?php endfor; endif; ?>
    <?php if (count($_smarty_tpl->tpl_vars['answer']->value)-1==0){?>
      <p class="answerIsNo">На эту задачу, еще нет ответа!</p>
    <?php }?>               
   
  </div>
</div>
</div>
                  
                  <?php }} ?>