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
	$pattern[$j]="/([".unichr("1000")."-".unichr("1021")."])([".unichr("102C").unichr("102D").unichr("102E").unichr("1032").unichr("1036")."]){1,2}([".unichr("1060").unichr("1061").unichr("1062").unichr("1063").unichr("1065").unichr("1066").unichr("1067").unichr("1068").unichr("1069").unichr("1070").unichr("1071").unichr("1072").unichr("1073").unichr("1074").unichr("1075").unichr("1076").unichr("1077").unichr("1078").unichr("1079").unichr("107A").unichr("107B").unichr("107C").unichr("1085")."])/u";
	$replacement[$j] = "$1$3$2";

	$j++;
	
	//////////////
	
	$pattern[$j]="/".unichr("1064")."/u";
	$replacement[$j] = unichr("1004").unichr("103A").unichr("1039");
	
	$j++;
	
	$pattern[$j]="/".unichr("104E")."/u";
	$replacement[$j] = unichr("104E").unichr("1004").unichr("103A").unichr("1038");
	
	$j++;

	$pattern[$j]="/".unichr("1086")."/u";
	$replacement[$j] = unichr("103F");
	
	$j++;
	

   	$pattern[$j]="/".unichr("1060")."/u";
	$replacement[$j] = unichr("1039").unichr("1000");
	
	$j++;

   	$pattern[$j]="/".unichr("1061")."/u";
	$replacement[$j] = unichr("1039").unichr("1001");
	
	$j++;
	
	$pattern[$j]="/".unichr("1062")."/u";
	$replacement[$j] = unichr("1039").unichr("1002");
	
	$j++;
	
	$pattern[$j]="/".unichr("1063")."/u";
	$replacement[$j] = unichr("1039").unichr("1003");
	
	$j++;
	
	$pattern[$j]="/".unichr("1065")."/u";
	$replacement[$j] = unichr("1039").unichr("1005");
	
	$j++;
	
	$pattern[$j]="/[".unichr("1066").unichr("1067")."]/u";
	$replacement[$j] = unichr("1039").unichr("1006");
	
	$j++;
	
	$pattern[$j]="/".unichr("1068")."/u";
	$replacement[$j] = unichr("1039").unichr("1007");
	
	$j++;
	
	$pattern[$j]="/".unichr("1069")."/u";
	$replacement[$j] = unichr("1039").unichr("1008");
	
	$j++;
	
	$pattern[$j]="/".unichr("106C")."/u";
	$replacement[$j] = unichr("1039").unichr("100B");
	
	$j++;
	
	$pattern[$j]="/".unichr("1070")."/u";
	$replacement[$j] = unichr("1039").unichr("100F");
	
	$j++;
	
	$pattern[$j]="/[".unichr("1071").unichr("1072")."]/u";
	$replacement[$j] = unichr("1039").unichr("1010");
	
	$j++;
	
	$pattern[$j]="/[".unichr("1073").unichr("1074")."]/u";
	$replacement[$j] = unichr("1039").unichr("1011");
	
	$j++;
	
	$pattern[$j]="/".unichr("1075")."/u";
	$replacement[$j] = unichr("1039").unichr("1012");
	
	$j++;
	
	
	$pattern[$j]="/".unichr("1076")."/u";
	$replacement[$j] = unichr("1039").unichr("1013");
	
	$j++;
	
	$pattern[$j]="/".unichr("1077")."/u";
	$replacement[$j] = unichr("1039").unichr("1014");
	
	$j++;
	
	$pattern[$j]="/".unichr("1078")."/u";
	$replacement[$j] = unichr("1039").unichr("1015");
	
	$j++;
	
	$pattern[$j]="/".unichr("1079")."/u";
	$replacement[$j] = unichr("1039").unichr("1016");
	
	$j++;
	
	$pattern[$j]="/".unichr("107A")."/u";
	$replacement[$j] = unichr("1039").unichr("1017");
	
	$j++;
	
	$pattern[$j]="/".unichr("107B")."/u";
	$replacement[$j] = unichr("1039").unichr("1018");
	
	$j++;
	
	$pattern[$j]="/".unichr("107C")."/u";
	$replacement[$j] = unichr("1039").unichr("1019");
	
	$j++;
	
	$pattern[$j]="/".unichr("1085")."/u";
	$replacement[$j] = unichr("1039").unichr("101C");
	
	$j++;
	
	$pattern[$j]="/".unichr("106D")."/u";
	$replacement[$j] = unichr("1039").unichr("100C");
	
	$j++;
	
	$pattern[$j]="/".unichr("1091")."/u";
	$replacement[$j] = unichr("100F").unichr("1039").unichr("100D");
	
	$j++;
	
	$pattern[$j]="/".unichr("1092")."/u";
	$replacement[$j] = unichr("100B").unichr("1039").unichr("100C");
	
	$j++;
	
	$pattern[$j]="/".unichr("1097")."/u";
	$replacement[$j] = unichr("100B").unichr("1039").unichr("100B");
	
	$j++;
	
	$pattern[$j]="/".unichr("106F")."/u";
	$replacement[$j] = unichr("100E").unichr("1039").unichr("100D");
	
	$j++;
	
	$pattern[$j]="/".unichr("106E")."/u";
	$replacement[$j] = unichr("100D").unichr("1039").unichr("100D");
	
	$j++;


	$pattern[$j]="/(".unichr("103C").")([".unichr("1000")."-".unichr("1021")."])(".unichr("1039")."[".unichr("1000")."-".unichr("1021")."])/u";
	$replacement[$j] = "$2$3$1";
	
	$j++;
	
	
	$pattern[$j]="/(".unichr("103E").")?(".unichr("103D").")?([".unichr("103B").unichr("103C")."])/u";
	$replacement[$j] = "$3$2$1";
	
	$j++;
	
	
	$pattern[$j]="/(".unichr("103E").")(".unichr("103D").")([".unichr("103B").unichr("103C")."])/u";
	$replacement[$j] = unichr("100D").unichr("1039").unichr("100D");
	
	$j++;
	
	
	$pattern[$j]="/(".unichr("103E").")([".unichr("103B").unichr("103C")."])/u";
	$replacement[$j] = "$2$1";
	
	$j++;
	
	$pattern[$j]="/(".unichr("103D").")([".unichr("103B").unichr("103C")."])/u";
	$replacement[$j] = "$2$1";
	
	$j++;
	
	
	//need to add 0 or wa
	
	// need to add 7 or ra
	
	//storage order rediner
	$pattern[$j]="/(".unichr("1031").")?([".unichr("1000")."-".unichr("1021")."])(".unichr("1039")."[".unichr("1000")."-".unichr("1021")."])?([".unichr("102D").unichr("102E").unichr("1032")."])?([".unichr("1036").unichr("1037").unichr("1038")."]{0,2})([".unichr("103B")."-".unichr("103E")."]{0,3})([".unichr("102F").unichr("1030")."])?([".unichr("1036").unichr("1037").unichr("1038")."]{0,2})([".unichr("102D").unichr("102E").unichr("1032")."])?/u";
	$replacement[$j] ="$2$3$6$1$4$9$7$5$8";
	
	$j++;
	
	$pattern[$j]="/".$ans.$u."/u";
	$replacement[$j] = $u.$ans;
	
	$j++;

	$pattern[$j]="/(".unichr("103A").")(".unichr("1037").")/u";
	$replacement[$j] = "$2$1";
	
	$j++;

   ///
	$txt=preg_replace($pattern, $replacement, $txt);
	
	return $txt;
	
}
$str="သကၠရာဇ္ဆိုသည္မွာ အခ်ိန္ကာလကို အမွတ္အသား တစ္ခုအေနျဖင့္ သတ္မွတ္ထားေသာ စံတစ္ခုျဖစ္ေပသည္။ အခ်ိန္(၂၄)နာရီကို တစ္ရက္အျဖစ္ သတ္မွတ္ၿပီး ရက္ေပါင္း (၃၆၅)ရက္ကို တစ္ႏွစ္ဟု သတ္မွတ္သည္။ တစ္ႏွစ္ကို သကၠရာဇ္တစ္ဟု သတ္မွတ္ၾကသည္။ ကမၻာမွာ သကၠရာဇ္မ်ားကို ေလ့လာလ်င္ သကၠရာဇ္ ငါးမ်ိဳး ရွိေၾကာင္း ေတြ႕ရပါသည္။
မဟာသကၠရာဇ္ = ေဂါတမဘုရားရွင္၏ ဘိုးေတာ္ (သီရိမဟာ မာယာေဒဝီ၏ ခမည္းေတာ္) ေဒဝဒဟ ျပည့္ရွင္ဘုရင္ အဥၥနမင္းႀကီးသည္ ဒိဗၺစကၡဳအဘိညာဥ္ရ ေဒဝီလရေသ့ႏွင့္ တိုင္ပင္ၿပီး မိမိလက္ထက္၌ ေရာက္ဆဲျဖစ္ေသာ သကၠရာဇ္ (၈၆၄၅)ခုကို ထိုႏွစ္ တေပါင္းလကြယ္ စေနေန႔ အထိ ၿဖိဳၿပီးလၽွင္ တန္ခူးလဆန္း(၁)ရက္ တနဂၤေႏြေန႔ကို အစျပဳ၍ သကၠရာဇ္တစ္ခု ထားေလသည္။ ထိုသကၠရာဇ္ကို မဟာသကၠရာဇ္ဟု ေခၚတြင္ေလသည္။ ထိုအခ်ိန္သည္ ျမတ္စြာဘုရား ဖြားေတာ္မမူမီ (၆၈)ႏွစ္ အလိုျဖစ္သည္။ ေဂါတမဘုရားရွင္၏ သက္ေတာ္ (၈၀)ႏွင့္ေပါင္းေသာ မဟာသကၠရာဇ္၏ သက္တမ္းမွာ (၁၄၈)ႏွစ္သာ ရွိသည္။ ထို ၁၄၈-ႏွစ္ကို ၿဖိဳၿပီး သာသနာသကၠရာဇ္ကို စ၍တြက္သည္။
သာသနာသကၠရာဇ္ = မဟာသကၠရာဇ္၏ သက္တမ္းမွာ (၁၄၈)ႏွစ္သို႔ ေရာက္ေသာအခါ ေဂါတမဘုရားရွင္သည္ ပရိနိဗၺာန္ စံေတာ္မူသည္။ သာသနာေတာ္ အႏွစ္ (၅၀၀၀)ကိုလည္း ထားေတာ္မူခဲ့သည္။ ပရိနိဗၺာန္ စံေတာ္မူၿပီး ေလးလအၾကာ ရာဇၿဂိဳဟ္ျပည့္ရွင္ဘုရင္ အဇာတသတ္မင္း ႀကီးၾကပ္၍ ပထမသဂၤါယနာ တင္ေတာ္မူၿပီးေနာက္ သကၠရာဇ္ (၁၄၈)ကို ၿဖိဳခြင္းၿပီး သာသနာႏွစ္ သကၠရာဇ္(၁)ခု ႂကြင္းထားခဲ့သည္။ ထိုမွစ၍ သာသနာသကၠရာဇ္ ေပၚေပါက္လာသည္။
ေကာဇာ (ေဂါဇာ)သကၠရာဇ္၊ ျမန္မာသကၠရာဇ္ = သေရေခတၱရာမင္းဆက္ သုမုႏၵရီမင္း လက္ထက္မွ စ၍ ေရတြက္သည္။ (လက္ရွိ ျမန္မာ ျပကၡဒိန္)
ခရစ္သကၠရာဇ္ (ဘီစီ) = ခရစ္ေတာ္ မေပၚမီကာလ ေနာက္ကို ေရတြက္ရေသာ ႏွစ္မ်ားျဖစ္သည္။
ခရစ္သကၠရာဇ္ (ေအဒီ) = ခရစ္ေတာ္ ေပၚၿပီးႏွစ္မွစ၍ အစဥ္အတိုင္း ေရတြက္ရေသာ ႏွစ္မ်ားျဖစ္သည္။ (လက္ရွိ အဂၤလိပ္ ျပကၡဒိန္)";

echo "<font style='font-family:zawgyi-one'>".$str."</font><br/>";
echo "<h3>converted</h3>";
echo zg_uni($str);
?>