<?php
function pf_script_with_get($script) {
	$page = $script;
	$page = $page . "?";
	foreach($_GET as $key => $val) {
		$page = $page . $key . "=" . $val . "&";
	}
	return substr($page, 0, strlen($page)-1);
}



function pf_script_with_post($script) {
	$page = $script;
	$page = $page . "?";
	foreach($_POST as $key => $val) {
		$page = $page . $key . "=" . $val . "&";
	}
	return substr($page, 0, strlen($page)-1);
}
?>