<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:40:39
         compiled from "template2/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:766385586576a36189a35c9-40902199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a641c072d5626f0b404bc2eecc9c95fab62b8af' => 
    array (
      0 => 'template2/footer.html',
      1 => 1466599153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766385586576a36189a35c9-40902199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576a36189cea5',
  'variables' => 
  array (
    'VkAuthLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576a36189cea5')) {function content_576a36189cea5($_smarty_tpl) {?>
<div id="boxes">  
  <div id="dialog" class="window" style="margin: 0 auto; display: none; transform: translate(-50%, -50%);"><p>Войти с помощью:</p>  
    <a href="<?php echo $_smarty_tpl->tpl_vars['VkAuthLink']->value;?>
" class="vk"> <img src="img/vk_icon.png" width="80" class="vk_img">Вконтакте</a> 
  </div>
</div>

<!-- Маска, затемняющая фон -->
<div id="mask"></div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="js/sign.js"></script>
<script type="text/javascript" src="js/spoiler.js"></script>
<script type="text/javascript" src="js/ajax_form.js"></script>
<script type="text/javascript" src="js/getNameFile.js"></script>

<div class="footer">
  <p>© 2016. Все права защищены.</p>
</div>
</body>
</html><?php }} ?>