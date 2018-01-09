<?php /* Smarty version Smarty-3.1.7, created on 2016-08-15 22:01:48
         compiled from "template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:2103775589576ab8f0b2de77-04009724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bdd086daa792f2f1ee39ddc04cff72a4b6cb8b2' => 
    array (
      0 => 'template/header.html',
      1 => 1471287467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103775589576ab8f0b2de77-04009724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_576ab8f0b6616',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576ab8f0b6616')) {function content_576ab8f0b6616($_smarty_tpl) {?>  <body class="main_body">
   <div class="wrap">
    <div class="header">
      <div class="nav">
        <div class="logo"><a href="/">Решу<span style="color: #f2a83a;">Всем</span></a></div>
        <div class="menu_top"> 
          <ul>
            <li class="menu_item">
              <a href="/addquestion" class="text_li"><span class="plus">+</span>Задать вопрос</a>
            </li>
            <li class="fl_right">
              <?php if (isset($_SESSION['user'])){?>
                <a class="avatar user_links" href="" style="padding-right: 10px;">
                  <img class="user_avatar" src="/upload/avatar/<?php echo $_SESSION['user']['photo_big'];?>
">
                </a>
                <div class="user_spoiler_body">
                  <a href="/id<?php echo $_SESSION['user']['user_id'];?>
">Моя страница</a>
                  <a href="/user/exit.php">Выход</a>
                </div> 
              <?php }else{ ?>
                <span id="modal" class="text_li">Вход</span>
              <?php }?>
            </li>
          </ul>
        </div>
      </div>
      <div></div>
    </div>
    <?php }} ?>