<?php /* Smarty version 3.1.27, created on 2016-06-24 16:00:48
         compiled from "C:\OpenServer\domains\modxStart\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6587576d2f0035fa03_64384842%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a3e236e68de3cac0bad50d13985d190258abe1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modxStart\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1466772648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6587576d2f0035fa03_64384842',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576d2f00371ec3_00704601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576d2f00371ec3_00704601')) {
function content_576d2f00371ec3_00704601 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6587576d2f0035fa03_64384842';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>