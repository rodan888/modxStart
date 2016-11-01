<?php /* Smarty version 3.1.27, created on 2016-11-01 20:31:04
         compiled from "C:\OpenServer\domains\ModxStart\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:120435818df68047593_20284152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a0898e8f4c5293eef818b71f0f80d82ce8d1361' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ModxStart\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1478024417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120435818df68047593_20284152',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818df68053112_93825551',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818df68053112_93825551')) {
function content_5818df68053112_93825551 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120435818df68047593_20284152';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>