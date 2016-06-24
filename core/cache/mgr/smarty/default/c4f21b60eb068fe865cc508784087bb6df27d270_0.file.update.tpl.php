<?php /* Smarty version 3.1.27, created on 2016-06-24 16:36:35
         compiled from "C:\OpenServer\domains\modxStart\manager\templates\default\element\chunk\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20867576d37633f0f25_23398296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f21b60eb068fe865cc508784087bb6df27d270' => 
    array (
      0 => 'C:\\OpenServer\\domains\\modxStart\\manager\\templates\\default\\element\\chunk\\update.tpl',
      1 => 1466772639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20867576d37633f0f25_23398296',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576d37633f4987_84237303',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576d37633f4987_84237303')) {
function content_576d37633f4987_84237303 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20867576d37633f0f25_23398296';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>