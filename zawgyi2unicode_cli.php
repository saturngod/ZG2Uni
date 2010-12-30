<?php
require "zawgyi2unicode.php";
echo "Please Wait....\n";
echo "....";
echo "\n";

if(count($argv == 3 ))
{
	$filename=$argv[1];
	$writefile=$argv[2];
	if (file_exists($filename) && is_readable ($filename)) {
	
		$fh = fopen($filename, "rb");
		$data = fread($fh, filesize($filename));
		fclose($fh);
		
		$convert=zg_uni($data);
		
		echo "Converting is done....\n";
		echo "Writing file....\n";
		$fh = fopen($writefile, 'w') or die("can't open file");
		
		fwrite($fh, $convert);
		fclose($fh);
		echo "Done....\n";
	}
}
?>