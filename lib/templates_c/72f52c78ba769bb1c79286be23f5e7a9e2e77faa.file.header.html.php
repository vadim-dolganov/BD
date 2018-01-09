<?php /* Smarty version Smarty-3.1.7, created on 2016-08-15 21:57:49
         compiled from "/home/c/co35515/co355/public_html/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:142949167557716326b413c0-34787587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f52c78ba769bb1c79286be23f5e7a9e2e77faa' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/header.html',
      1 => 1471287467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142949167557716326b413c0-34787587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57716326b572e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57716326b572e')) {function content_57716326b572e($_smarty_tpl) {?>  <body class="main_body">
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