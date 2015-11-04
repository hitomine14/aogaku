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
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">●2015年　6月　〜競技結果〜</h3>  
  <!--
    result_start(年、月、日、曜日、大会名、種目、タグ);
    result_schema(); 見出し出力
    result_list(組,人数、氏名、学年、タイム、順位、フラグ); "pb" "sb" "優勝" "入賞" "優勝 pb" "優勝 sb"
    result_list_sub(氏名、学年、タイム、順位、フラグ);
    result_end();
  -->
  <?php
    result_start(2015,6,29,"月","函館ハーフマラソン","ハーフマラソン","hakodate");
    result_schema();
      result_list("決勝",1,"田村　健人",4,"1:04:02",14,"pb");
    result_end();
  ?>
  <?php
    result_start(2015,6,13,"土","2015 日本学生陸上個人選手権大会","5000m","kojin");
    result_schema();
      result_list("タイム<br>レース",21,"中村　祐紀",2,"14:04.22",1,"優勝");
        result_list_sub("秋山　雄飛",3,"14:09.54",4,"");
        result_list_sub("田村　和希",2,"14:10.53",5,"");
        result_list_sub("吉永　竜聖",2,"14:10.69",6,"");
        result_list_sub("下田　裕太",2,"14:10.81",7,"");
        result_list_sub("渡邉　心",4,"14:10.82",8,"");
        result_list_sub("安藤　悠哉",3,"14:11.60",9,"");
        result_list_sub("神野　大地",4,"14:13.98",12,"");
        result_list_sub("橋本　崚",4,"14:14.58",13,"");
        result_list_sub("田村　健人",3,"14:15.89",15,"");
        result_list_sub("梶谷　瑠哉",1,"14:18.34",17,"");
        result_list_sub("茂木　亮太",3,"14:20.54",18,"");
        result_list_sub("小野田　勇次",1,"14:20.62",19,"");
        result_list_sub("山村　隼",4,"14:21.37",22,"");
        result_list_sub("伊藤　弘毅",4,"14:23.46",24,"");
        result_list_sub("渡邉　利典",4,"14:30.04",27,"");
        result_list_sub("松島　良太",4,"14:33.67",30,"");
        result_list_sub("富田　浩之",1,"14:37.18",32,"");
        result_list_sub("村井　駿",4,"14:37.96",33,"");
        result_list_sub("近藤　修一郎",2,"14:39.40",35,"");
        result_list_sub("橋詰　大慧",1,"15:01.35",41,"");
    result_end();
  ?>
  <?php
    result_start(2015,6,7,"日","日本体育大学長距離競技会","5000m","nittai");
    result_schema();
      result_list(23,2,"桂川　直也",1,"14:37.02",2,"pb");
        result_list_sub("小野塚　久弥",1,"15:31.61",38,"");
      result_list(24,2,"大杉　柊平",2,"15:17.23",34,"");
        result_list_sub("伊藤　雅一",2,"15:35.25",38,"");
      result_list(26,7,"林　奎介",1,"14:41.22",9,"sb");
        result_list_sub("森田　歩希",1,"14:45.82",10,"");
        result_list_sub("松田　岳大",1,"14:48.11",14,"sb");
        result_list_sub("鈴木　悠日",3,"14:48.32",15,"");
        result_list_sub("小田　俊平",2,"14:58.02",27,"");
        result_list_sub("小関　一輝",3,"15:01.56",30,"");
        result_list_sub("山田　滉介",1,"15:07.95",32,"");
      result_list(28,2,"石川　優作",2,"14:29.38",21,"sb");
        result_list_sub("小野塚　久弥",3,"15:05.58",34,"");
    result_end();
  ?>
  
  <font size="+1"><a href="result_5.php">2015年5月競技結果へ</a>　　　<a href="result_7.php">2015年7月競技結果へ</a></font>
  <!-- ここまで編集  -->
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