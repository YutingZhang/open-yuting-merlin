<?php
	require dirname(__FILE__)."/common.php";

	header_for_text_streaming();

	$tool_dir = dirname(dirname(realpath(__FILE__))).'/tools';
	$cmd = "open /Users/yutingzh/Dropbox/MerlinProjects/Yuting-Work.mproject 2>&1";
	live_run_command($cmd);
?>
