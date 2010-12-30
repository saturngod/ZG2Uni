<?php

//unicode number to character
function unichr($hex)
{
	$str="&#".hexdec($hex).";";
	return html_entity_decode($str, ENT_QUOTES, "UTF-8");
}


function zg_uni($txt)
{
	$tallAA=unichr("102B");
	$AA=unichr("102C");
	$vi=unichr("102D");
	
	//lone gyi tin
	$ii=unichr("102E");
	$u=unichr("102F");
	$uu=unichr("1030");
	$ve=unichr("1031");
	
	$ai = unichr("1032");
   	$ans = unichr("1036");
   	$db = unichr("1037");
   	$visarga = unichr("1038");

   	$asat = unichr("103A");

   	$ya = unichr("103B");
   	$ra = unichr("103C");
   	$wa = unichr("103D");
   	$ha = unichr("103E");
   	$zero = unichr("1040");
   	
   	$j=0;
	
	$pattern[$j]="/".unichr("106A")."/u";
	$replacement[$j] = unichr("1009");
	
	$j++;
	
	$pattern[$j]="/".unichr("1025")."(?=(".unichr("1039")."|".unichr("102C")."))/u";
	$replacement[$j] = unichr("1009");

	$j++;

	$pattern[$j]="/".unichr("1025").unichr("102E")."/u";
	$replacement[$j] = unichr("1026");
	
	$j++;
	
	$pattern[$j]="/".unichr("106B")."/u";
	$replacement[$j] = unichr("100A");
	
	$j++;
	
	$pattern[$j]="/".unichr("1090")."/u";
	$replacement[$j] = unichr("101B");
	
	$j++;
	
	$pattern[$j]="/".unichr("1040")."/u";
	$replacement[$j] = $zero;
	
	$j++;
	
	$pattern[$j]="/".unichr("108F")."/u";
	$replacement[$j] = unichr("1014");
	
	$j++;
	
	$pattern[$j]="/".unichr("1012")."/u";
	$replacement[$j] = unichr("1012");
	
	$j++;
	
	$pattern[$j]="/".unichr("1013")."/u";
	$replacement[$j] = unichr("1013");
	
	$j++;
	
	$pattern[$j]="/(".unichr("103D")."|".unichr("1087").")/u";
	$replacement[$j] = $ha;
	
	$j++;

	$pattern[$j]="/".unichr("103C")."/u";
	$replacement[$j] = $wa;
	
	$j++;
	
	$pattern[$j]="/(".unichr("103B")."|".unichr("107E")."|".unichr("107F")."|".unichr("1080")."|".unichr("1081")."|".unichr("1082")."|".unichr("1083")."|".unichr("1084").")/u";
	$replacement[$j] = $ra;
	
	$j++;
	
	
	$pattern[$j]="/(".unichr("103A")."|".unichr("107D").")/u";
	$replacement[$j] = $ya;
	
	$j++;
	
	$pattern[$j]="/".unichr("103E").unichr("103B")."/u";
	$replacement[$j] = $ya.$ha;
	
	$j++;
	
	$pattern[$j]="/".unichr("108A")."/u";
	$replacement[$j] = $wa.$ha;
	
	$j++;
	
	$pattern[$j]="/".unichr("103E").unichr("103D")."/u";
	$replacement[$j] = $wa.$ha;
	$j++;
	
	
	/////Reordering/////
	$pattern[$j]="/(".unichr("1031").")?(".unichr("103C").")?([".unichr("1000")."-".unichr("1021")."])".unichr("1064")."/u";

	$replacement[$j] = unichr("1064")."$1$2$3";

	$j++;
	
	$pattern[$j]="/(".unichr("1031").")?(".unichr("103C").")?([".unichr("1000")."-".unichr("1021")."])".unichr("108B")."/u";
	
	$replacement[$j] = unichr("1064")."$1$2$3".unichr("102D");
	
	$j++;
	
	$pattern[$j]="/(".unichr("1031").")?(".unichr("103C").")?([".unichr("1000")."-".unichr("1021")."])".unichr("108C")."/u";
	
	$replacement[$j] = unichr("1064")."$1$2$3".unichr("102E");
	
	$j++;
	
	$pattern[$j]="/(".unichr("1031").")?(".unichr("103C").")?([".unichr("1000")."-".unichr("1021")."])".unichr("108D")."/u";
	
	$replacement[$j] = unichr("1064")."$1$2$3".unichr("1036");
	
	$j++;
	///////////////////
	
	$pattern[$j]="/".unichr("105A")."/u";
	$replacement[$j] = $tallAA.$asat;
	
	$j++;
	
	$pattern[$j]="/".unichr("108E")."/u";
	$replacement[$j] = $vi.$ans;
	
	$j++;
	
	$pattern[$j]="/".unichr("1033")."/u";
	$replacement[$j] = $u;
	
	$j++;
	
	$pattern[$j]="/".unichr("1034")."/u";
	$replacement[$j] = $uu;
	
	$j++;
	
	$pattern[$j]="/".unichr("1088")."/u";
	$replacement[$j] = $ha.$u;
	
	$j++;
	
	$pattern[$j]="/".unichr("1089")."/u";
	$replacement[$j] = $ha.$uu;
	
	$j++;
	
	/////////////////
	
	$pattern[$j]="/".unichr("1039")."/u";
	$replacement[$j] = unichr("103A");
	
	$j++;
	
	$pattern[$j]="/(".unichr("1094")."|".unichr("1095").")/u";
	$replacement[$j] = $db;

	$j++;
	
	/////////////
	/* pasint order , human error */
	
	
	//////////////
	$txt=preg_replace($pattern, $replacement, $txt);
	
	return $txt;
	
}
$str="ျမန္";
echo "<font style='font-family:zawgyi-one'>".$str."</font><br/>";
echo zg_uni($str);
?>