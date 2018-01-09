<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 19:11:10
         compiled from "template/handler.html" */ ?>
<?php /*%%SmartyHeaderCode:1488204773576ab89e1037a9-21855075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5451d48b1f986a70294de93a147fcbe245968b' => 
    array (
      0 => 'template/handler.html',
      1 => 1466598837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1488204773576ab89e1037a9-21855075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_avatar' => 0,
    'user_page_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576ab89e13b60',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576ab89e13b60')) {function content_576ab89e13b60($_smarty_tpl) {?>  <body class="main_body">
    <div class="header">
      <div class="nav">
        <div class="logo"><a href="/">Лого<span style="color: #f2a83a;">тип</span></a></div>
        <div class="menu_top"> 
          <ul>
            <li>
              <a href="/addquestion" class="text_li"><span class="plus">+</span>Задать вопрос</a>
            </li>
            <li>
              <a href="" class="text_li">Предметы</a>
            </li>
            <li class="fl_right">
              <?php if (isset($_SESSION['user'])){?>
                <a class="avatar user_links" href="" style="padding-right: 10px;">
                  <img class="user_avatar" src="<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
">
                </a>
                <div class="user_spoiler_body">
                  <a href="/id<?php echo $_smarty_tpl->tpl_vars['user_page_link']->value;?>
">Моя странциа</a>
                  <a href="../user/exit.php">Выход</a>
                </div> 
              <?php }else{ ?>
                <a href="#dialog" id="modal" class="text_li">Вход</a>
              <?php }?>
            </li>
          </ul>
        </div>
      </div>
      <div></div>
    </div><?php }} ?>