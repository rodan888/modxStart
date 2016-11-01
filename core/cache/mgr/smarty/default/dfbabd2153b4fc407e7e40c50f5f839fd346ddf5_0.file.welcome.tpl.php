<?php /* Smarty version 3.1.27, created on 2016-11-01 20:30:33
         compiled from "C:\OpenServer\domains\ModxStart\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:325245818df49349cf5_58818940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfbabd2153b4fc407e7e40c50f5f839fd346ddf5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ModxStart\\manager\\templates\\default\\welcome.tpl',
      1 => 1478024417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325245818df49349cf5_58818940',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5818df4934db74_54819938',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5818df4934db74_54819938')) {
function content_5818df4934db74_54819938 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '325245818df49349cf5_58818940';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>