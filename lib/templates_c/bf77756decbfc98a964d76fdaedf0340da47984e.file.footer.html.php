<?php /* Smarty version Smarty-3.1.7, created on 2016-09-28 20:12:03
         compiled from "/home/c/co35515/co355/public_html/template/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:6536561157716326b70a29-61629748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf77756decbfc98a964d76fdaedf0340da47984e' => 
    array (
      0 => '/home/c/co35515/co355/public_html/template/footer.html',
      1 => 1475082719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6536561157716326b70a29-61629748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57716326b7487',
  'variables' => 
  array (
    'VkAuthLink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57716326b7487')) {function content_57716326b7487($_smarty_tpl) {?>      <div id="boxes">  
        <div id="dialog" class="window">
          <p>Войти с помощью:</p>   
          <a href="<?php echo $_smarty_tpl->tpl_vars['VkAuthLink']->value;?>
" class="vk"> <img src="/img/vk_icon.png" width="80" class="vk_img" alt="Вконтакте">Вконтакте</a> 
        </div>
      </div>
<!-- Маска, затемняющая фон -->
      <div id="mask"></div>
    </div> <!-- wrap -->
    <div class="footer_cuddled footer">
      <p>© 2016. Все права защищены.</p>
      <center><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t26.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='88' height='15'><\/a>")
//--></script><!--/LiveInternet-->
      
      <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39889755 = new Ya.Metrika({
                    id:39889755,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39889755" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
      </center>

    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <?php if ($_SERVER['SCRIPT_NAME']=="/user.php"){?>
      <script type="text/javascript" src="../js/answer_ajax.js"></script>
    <?php }?>
    <script type="text/javascript" src="/js/ajax_form.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
  </body>
</html><?php }} ?>