<?php /* Smarty version 3.1.27, created on 2016-06-24 15:57:44
         compiled from "C:\OpenServer\domains\modxStart\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12295576d2e48731081_05142798%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e6a6c53a4a16224c0d956a5bc02a7862d19f8b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modxStart\\manager\\templates\\default\\welcome.tpl',
      1 => 1466772639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12295576d2e48731081_05142798',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576d2e48735379_14609289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576d2e48735379_14609289')) {
function content_576d2e48735379_14609289 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12295576d2e48731081_05142798';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>