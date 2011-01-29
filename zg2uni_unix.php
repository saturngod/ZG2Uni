<?php
date_default_timezone_set('Asia/Singapore');
require "zawgyi2unicode.php";

if(count($argv) == 2 )
{
	$filename=$argv[1];
	$file=shell_exec('cat '.$filename);
	echo zg_uni(conv($file));
}
else
{
	echo "Need argument";
}

?>