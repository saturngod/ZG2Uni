Algorithm from solveware solution javascript.
http://paragu.parabaik.info/

Setup
======
  
How to check php.ini

	$php --ini

and you will get php.ini path.

In php.ini

search 

    default_charset
  
and change to

	default_charset = "utf-8"
  
  
search 
  
	mbstring.internal_encoding
  
and change to

	mbstring.internal_encoding = UTF-8

How to convert (normal)
========================
    $php zawgyi2unicode_cli.php zawgyi.sql > unicode.sql
    

How to convert (*nix)
========================
	$php zg2uni_unix.php zawgyi.sql > unicode.sql

How to use in code
===================

    require "zawgyi2unicode.php";
    $uni=zg_uni("Zawgyi text");
