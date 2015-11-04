<!DOCTYPE HTML>
<html lang="ja">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/form/form_result.php"); ?>
	<?php form_metadata(); ?>
</head>
<body id="hpb-template-03-05-01" class="hpb-layoutset-02">
	<div id="hpb-container"><!-- container -->
	<!-- header -->
		<?php form_header(); ?>
	<!-- header end -->
	<div id="hpb-inner"><!-- inner -->
	<div id="hpb-wrapper"><!-- wrapper -->
	<div id="hpb-title"><!-- page title -->
		<h2><span class="ja">競技結果</span><span class="en">Race result</span></h2>
	</div><!-- page title end -->
	<div id="hpb-main"><!-- main -->
	<div id="policy" align="center"><!-- policy -->

	<!--  ここから編集  -->
	<h3 class="hpb-parts-hl-08 hpb-parts-hl-style">●2015年　5月　〜競技結果〜</h3>
  <!--
		result_start(年、月、日、曜日、大会名、種目、タグ);
		result_schema(); 見出し出力
			result_list(組,人数、氏名、学年、タイム、順位、フラグ); pb sb 入賞
			result_list_sub(氏名、学年、タイム、珠に、フラグ);
		result_end();
  -->
	<?php
		result_start(2015,5,30,"土","第2回世田谷長距離競技会","5000m","setagaya");
		result_schema();
		result_list(8,6,"鈴木　悠日",3,"14:14.32",11,"sb");
			result_list_sub("小田　俊平",2,"14:56.53",21,"sb");
			result_list_sub("小関　一輝",3,"14:56.60",22,"sb");
			result_list_sub("山田　滉介",1,"14:57.27",23,"");
			result_list_sub("小野塚　久弥",1,"15:23.53",32,"");
			result_list_sub("大杉　柊平",2,"15:27.64",33,"");
		result_list(10,9,"富田　浩之",1,"14:22.30",4,"sb");
			result_list_sub("村井　駿",4,"14:23.85",7,"");
			result_list_sub("近藤　修一郎",2,"14:34.57",16,"sb");
			result_list_sub("小野塚　隆珠",3,"14:35.46",17,"sb");
			result_list_sub("小野田　勇次",1,"14:41.46",22,"sb");
			result_list_sub("石川　優作",2,"14:42.26",23,"sb");
			result_list_sub("橋詰　大慧",1,"14:46.57",28,"");
			result_list_sub("木村　光佑",1,"15:06.11",35,"");
			result_list_sub("松田　岳大",1,"15:21.80",36,"");
		result_list(11,17,"一色　恭志",3,"13:57.47",1,"");
			result_list_sub("秋山　雄飛",3,"13:58.76",2,"pb");
			result_list_sub("田村　和希",2,"14:03.44",5,"pb");
			result_list_sub("渡邉　心",4,"14:03.44",6,"sb");
			result_list_sub("吉永　竜聖",2,"14:07.40",7,"pb");
			result_list_sub("小椋　裕介",4,"14:07.85",8,"");
			result_list_sub("田村　健人",3,"14:08.75",8,"pb");
			result_list_sub("下田　裕太",2,"14:09.31",10,"pb");
			result_list_sub("山村　隼",4,"14:12.37",12,"");
			result_list_sub("梶谷　瑠哉",1,"14:13.58",14,"sb");
			result_list_sub("橋本　崚",4,"14:14.40",15,"pb");
			result_list_sub("中村　祐紀",2,"14:17.63",16,"");
			result_list_sub("伊藤　弘毅",4,"14:19.47",18,"");
			result_list_sub("松島　良太",4,"14:24.68",22,"sb");
			result_list_sub("茂木　亮太",3,"14:25.08",23,"");
			result_list_sub("安藤　悠哉",3,"14:38.26",29,"");
			result_list_sub("大越　望",2,"15:28.07",32,"");
		result_end();
	?>
	<?php
		result_start(2015,5,24,"日","第66回　青山学院対東北学院大学　陸上競技定期戦","5000m・800m","tohoku");
		result_schema();
		result_list("5000m<br>対校",2,"秋山　雄飛",3,"14:58.13",1,"優勝");
			result_list_sub("大越　望",2,"14:58.37",2,"");
		result_list("800m<br>オープン",2,"秋山　雄飛",3,"1:59.35",1,"優勝");
			result_list_sub("大越　望",2,"2:04.81",3,"");
		result_end();
	?>
	<?php
		result_start(2015,5,17,"日","ぎふ清流ハーフマラソン","ハーフマラソン","gifu");
		result_schema();
		result_list("決勝",4,"松島　良太",4,"1:04:08",10,"");
			result_list_sub("渡邉　心",4,"1:04:53",13,"");
			result_list_sub("橋本　崚",4,"1:05:25",19,"");
			result_list_sub("村井　駿",4,"1:05:35",21,"");
		result_end();
	?>

	<a name="kankare"></a>
	<table>
	<tbody>
		<tr>
		<td bgcolor="#CCFF99" style="font-size : 140%;" width="599"><b>●2015年5月14日(木)-17日(日)　第94回　関東学生陸上競技対校選手権大会</b></td>
		</tr>
		<tr>
		<td width="599">
		<font size="3">4日目<br>＜ハーフマラソン決勝：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list("決勝",3,"池田　生成",3,"1:04:37",1,"優勝");
				result_list_sub("下田　裕太",2,"1:04:50",4,"入賞");
				result_list_sub("田村　健人",3,"1:06:19",12,"");
		?>
		</tbody>
		</table><br>
		<font size="3">3日目<br>＜3000mSC決勝：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list("決勝",1,"山村　隼",4,"8:56.08",3,"");
		?>
		</tbody>
		</table><br>
		<font size="3">2日目<br>＜5000m決勝：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list("決勝",3,"一色　恭志",3,"13:59.38",3,"入賞");
				result_list_sub("伊藤　弘毅",4,"14:07.66",4,"入賞");
				result_list_sub("小椋　裕介",4,"14:12,62",9,"");
		?>
		</tbody>
		</table><br>
		<font size="3">2日目<br>＜1500m決勝：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list("決勝",3,"茂木　亮太",3,"3:48.31",2,"入賞");
				result_list_sub("吉永　竜聖",2,"3:48.40",3,"入賞");
				result_list_sub("梶谷　瑠哉",1,"3:48.90",4,"入賞");
		?>
		</tbody>
		</table><br>
		<font size="3">＜3000mSCm予選：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list(1,1,"山村　隼",4,"9:02.14",2,"決勝進出");
			result_list(2,1,"木村　光佑",1,"9:15.16",6,"pb");
			result_list(3,1,"小野塚　久弥",1,"9:28.07",12,"");
		?>
		</tbody>
		</table>
		<br><br>
		<font size="3">1日目<br>＜1500m予選：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list(1,1,"茂木　亮太",3,"3:52.23",1,"決勝進出");
			result_list(2,1,"梶谷　瑠哉",1,"3:52.46",3,"決勝進出");
			result_list(3,1,"吉永　竜聖",2,"3:53.66",1,"決勝進出");
		?>
		</tbody>
		</table><br>
		<font size="3">＜10000m決勝：結果＞</font>
		<table border="1">
		<tbody>
		<?php
			result_schema();
			result_list("決勝",3,"中村　祐紀",2,"29:30.48",6,"入賞");
				result_list_sub("安藤　悠哉",3,"30:06.83",21,"");
				result_list_sub("田村　和希",2,"30:53.71",31,"");
		?>
	</tbody>
	</table>
	<div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
	</td>
	</tr>
	</tbody>
	</table>
	<?php
		result_start(2015,5,10,"日","仙台ハーフマラソン","ハーフマラソン","sendai");
		result_schema();
		result_list("決勝",1,"渡邉　利典",4,"1:04:54",9,"");
		result_end();
	?>
	
	<font size="+1"><a href="result_4.php">2015年4月競技結果へ</a>　　　<a href="result_6.php">2015年6月競技結果へ</a></font>
	<hr>
	</div><!-- policy end -->
	</div><!-- main end -->
	</div><!-- wrapper end -->
	<!-- navi -->
		<?php form_navi(); ?>
	<!-- navi end -->
	<!-- aside -->
		<?php form_result_aside(); ?>
	<!-- aside end -->
	</div><!-- inner end -->
	<!-- footer -->
		<?php form_footer(); ?>
	<!-- footer end -->
	</div><!-- container end -->
</body>
</html>