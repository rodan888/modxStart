<?php
/**
 * Build the setup options form.
 */
$exists = false;
$output = null;
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
	case xPDOTransport::ACTION_INSTALL:

	case xPDOTransport::ACTION_UPGRADE:
		$exists = $modx->getCount('transport.modTransportProvider', array('service_url:LIKE' => '%simpledream%'));
		break;

	case xPDOTransport::ACTION_UNINSTALL: break;
}

if (!$exists) {
	$ru = (bool) ($modx->getOption('manager_language') == 'ru');

	$intro = $ru
		? 'Установка репозитория modstore.pro. Авторизация требуется, <b>только для загрузки платных пакетов</b>.<br/><br/>
		   Однако, если вы уже <a href="http://modstore.pro/#enter" target="_blank">зарегистрировались</a> и создали ключ для этого сайта - вы можете указать их прямо сейчас:'
		: 'Installation of the modstore.pro repository. Authentication required <b>only if you downloading paid packages</b>.<br/><br/>
		   However, if you already <a href="http://modstore.pro/#enter" target="_blank">registered</a> and created key for this site, you can enter it right now:';

	$email = 'Email';
	$email_intro = $ru
		? 'Введите email, который указан у вас в <a href="http://modstore.pro/cabinet/profile/" target="_blank">профиле магазина</a>.'
		: 'Enter email, that specified in <a href="http://modstore.pro/cabinet/profile/" target="_blank">your personal office</a>.';

	$key = $ru ? 'Ключ' : 'Key';
	$key_intro = $ru
		? 'Укажите ключ сайта, который вы <a href="http://modstore.pro/cabinet/keys/" target="_blank">создали в личном кабинете</a>.'
		: 'Specify the key, that you <a href="http://modstore.pro/cabinet/keys/" target="_blank">created in the personal office</a>.';

	$more = $ru
		? '<a href="http://modstore.pro/info/connection.html" target="_blank">Дополнительная информация</a>'
		: '<a href="http://modstore.pro/info/eng.html" target="_blank">Additional information</a>';

	$output =
	'<style>
		#setup_form_wrapper {font: normal 12px Arial;line-height:18px;}
		#setup_form_wrapper a {color: #08C;}
		#setup_form_wrapper label {width: 75px; text-align: right;}
		#setup_form_wrapper input {height: 25px; border: 1px solid #AAA; border-radius: 3px; padding: 3px;}
		#setup_form_wrapper input#email {height: 25px; width: 200px;}
		#setup_form_wrapper input#key {height: 25px; width: 300px;}
		#setup_form_wrapper table {margin-top:10px;}
		#setup_form_wrapper small {font-size: 10px; color:#555; font-style:italic;}
		#setup_form_wrapper .more_info {width: 100%;}
		#setup_form_wrapper .more_info a {line-height: 21px; display:inline-block;}
		#setup_form_wrapper .more_info img {border: none; display:inline-block;padding-top:10px;}
	</style>
	<div id="setup_form_wrapper">
		<p>'.$intro.'</p>
		<table cellspacing="5" id="setup_form">
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input type="email" name="email" value="" placeholder="user@gmail.com" id="email" /></td>
			</tr>
			<tr><td colspan="2"><small>'.$email_intro.'</small></td></tr>
			<tr>
				<td><label for="key">'.$key.'</label></td>
				<td><input type="textfield" name="key" value="" placeholder="10f6724ed8567eac7c3b79f740d51fa5" id="key" /></td>
			</tr>
			<tr><td colspan="2"><small>'.$key_intro.'</small></td></tr>
		</table>
		<table class="more_info">
			<tr><td style="width:50%;">
				'.$more.'
			</td>
			<td style="width:50%; text-align:right;">
				<!--
				<a href="http://modstore.pro/" target="_blank">
					<img src="http://modstore.pro/assets/uploadify/f/d/c/fdc24cc7755ef30e748e8bf5d288bfd4.png" />
				</a>
				-->
			</td></tr>
		</table>
	</div>
	';
}

return $output;