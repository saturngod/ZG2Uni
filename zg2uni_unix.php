<?php
date_default_timezone_set('Asia/Singapore');
require "zawgyi2unicode.php";

if(count($argv) == 2 )
{
	$filename=$argv[1];
	
	$conv=new ZG2Uni();
	//start log file
	$conv->start_log();
	
	$file=shell_exec('cat '.$filename); //read with cat command
	
	$file=$conv->html_decode($file); //convert &4096; to က
	
	$conv->decodedone_log();
	
	echo $conv->zg_uni($file); //convert zawgyi to unicode
	
	//end log file
	$conv->end_log();
	
}
else
{
	echo "Need argument";
}

?>