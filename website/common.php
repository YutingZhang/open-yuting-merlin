<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

function header_for_text_streaming() {
	header('Content-type: text/event-stream');
	header('Cache-Control: no-cache');
}

function live_run_command($cmd) {
	ob_implicit_flush();
	while (ob_get_level()) ob_end_clean();
	// while (@ ob_end_flush()); // end all output buffers if any
	$proc = popen($cmd, 'r');
	while (!feof($proc))
	{
	    // echo fread($proc, 4096);
	    echo fgets($proc, 4096);
	    @ ob_flush();
	    @ flush();
	}
	pclose($proc);
}

?>
