<?php
date_default_timezone_set('Asia/Singapore');
require "zawgyi2unicode.php";

if(count($argv) == 2)
{
	$filename=$argv[1];
	if (file_exists($filename) && is_readable ($filename)) {
		
		$data="";
		
		//$myFile = $argv[2];
		//$fh = fopen($myFile, 'w') or die("can't open file");

		$handle = @fopen($filename, "r");
		if ($handle) {
			while (($buffer = fgets($handle, filesize($filename))) !== false) {
				if($data!="")
				{
					$data= zg_uni(conv($buffer));
					//fwrite($fh, $data);
					echo $data;
				}
				else
				{
					$data= zg_uni(conv($buffer));
					//fwrite($fh, $data);
					echo $data;
				}
			}
			if (!feof($handle)) {
				echo "Error: unexpected fgets() fail\n";
			}
			fclose($handle);
		}
	
	}
}
?>