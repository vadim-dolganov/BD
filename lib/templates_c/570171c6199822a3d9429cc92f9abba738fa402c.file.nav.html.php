<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 17:36:13
         compiled from "template/nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1562067516576aa25e00c3a7-31189258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570171c6199822a3d9429cc92f9abba738fa402c' => 
    array (
      0 => 'template/nav.html',
      1 => 1466598837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562067516576aa25e00c3a7-31189258',
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
  'unifunc' => 'content_576aa25e01eb2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576aa25e01eb2')) {function content_576aa25e01eb2($_smarty_tpl) {?>  <body class="main_body">
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