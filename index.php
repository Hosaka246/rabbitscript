<?php
//別途indexを作る場合はこれを消してください。
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
  //boardの部分は掲示板名などに変更してください。
	header('Location: '.$uri.'/board/');
	exit;
?>
