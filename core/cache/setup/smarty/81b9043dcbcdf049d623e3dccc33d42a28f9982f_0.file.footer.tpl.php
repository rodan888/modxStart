<?php /* Smarty version 3.1.27, created on 2016-06-24 15:56:58
         compiled from "C:\OpenServer\domains\modxStart\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1401576d2e1aa80e55_96728109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81b9043dcbcdf049d623e3dccc33d42a28f9982f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modxStart\\setup\\templates\\footer.tpl',
      1 => 1466772653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401576d2e1aa80e55_96728109',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576d2e1aa9e296_10763037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576d2e1aa9e296_10763037')) {
function content_576d2e1aa9e296_10763037 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/domains/modxStart/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1401576d2e1aa80e55_96728109';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>