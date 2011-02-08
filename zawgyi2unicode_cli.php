<?php
date_default_timezone_set('Asia/Singapore');
require "zawgyi2unicode.php";

if(count($argv) == 2)
{
	$filename=$argv[1];
	if (file_exists($filename) && is_readable ($filename)) {
		
		$data="";
		
		$conv=new ZG2Uni();
		//$conv->start_log();
	
		$handle = @fopen($filename, "r");
		if ($handle) {
			while (($buffer = fgets($handle, filesize($filename))) !== false) {
					echo $conv->zg_uni($conv->html_decode($buffer)); 
			}
			if (!feof($handle)) {
				echo "Error: unexpected fgets() fail\n";
			}
			fclose($handle);
		}
	
	}
	//endlog
}
else
{
	echo "only 2 argument";
}
?>