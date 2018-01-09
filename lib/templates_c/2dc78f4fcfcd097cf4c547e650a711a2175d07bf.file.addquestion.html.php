<?php /* Smarty version Smarty-3.1.7, created on 2016-06-22 15:27:34
         compiled from "template2/addquestion.html" */ ?>
<?php /*%%SmartyHeaderCode:9419164455769c658150f89-35293382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc78f4fcfcd097cf4c547e650a711a2175d07bf' => 
    array (
      0 => 'template2/addquestion.html',
      1 => 1466598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9419164455769c658150f89-35293382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5769c658183e7',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5769c658183e7')) {function content_5769c658183e7($_smarty_tpl) {?><?php if (isset($_SESSION['user'])){?>
  <div style="margin-top: 60px;">
    <h1>Задать вопрос</h1>              
    <form method="post" action="/handler/form_question.php" enctype="multipart/form-data"  style="margin: 0 auto;width: 550px;">               
      <select name="class" style="width:140px; margin-right: 35px; color:#333; border:1px solid#ccc; height:24px; font-size:14px;">                 
        <option value="">Выберите класс</option>                 
        <option value="1">1 класс</option>                 
        <option value="2">2 класс</option>                 
        <option value="3">3 класс</option>                  
        <option value="4">4 класс</option>                 
        <option value="5">5 класс</option>                 
        <option value="6">6 класс</option>                 
        <option value="7">7 класс</option>                 
        <option value="8">8 класс</option>                  
        <option value="9">9 класс</option>                  
        <option value="10">10 класс</option>                 
        <option value="11">11 класс</option>                
      </select>               
      <select name="predmet" style="width:200px; color:#333; border:1px solid#ccc; height:24px; font-size:14px;">                 
        <option value="">Предмет</option>                  
        <option value="1">Математика</option>                  
        <option value="2">Алгебра</option>                  
        <option value="3">Геометрия</option>                  
        <option value="4">Физика</option>                  
        <option value="5">Русский язык</option>                  
        <option value="6">Информатика</option>                
      </select>                
      <textarea name="text" rows="14" style="color: rgb(102, 102, 102); border: 1px solid rgb(204, 204, 204); border-radius: 3px; width: 550px; max-width: 550px; max-height: 300px;  margin-top: 15px; height: 240px;" placeholder="Введите текст задания (вопроса)"></textarea>                 
      <input name="postid" type="hidden" value="">               
      <p>Добавить картинку:</p>               
      <div class="fileform">                  
        <div id="fileformlabel"></div>                  
        <div class="selectbutton">Обзор</div>                  
        <input id="image" type="file" name="image" onchange="getName(this.value);">                  
        <input type="hidden" name="MAX_FILE_SIZE" value="100000">                
      </div>	                  	                              
      <input type="submit" value="Отправить" class="buttonOnClick">              
    </form>            
</div>
<?php }else{ ?>
  <div style="margin-top: 228px;"> 
    <h1>Задать вопрос</h1>
    <p class="answerIsNo">Задать вопрос, могут только Авторизированные пользователи.</p>                     </div>
<?php }?><?php }} ?>