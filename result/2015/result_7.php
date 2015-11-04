<!-- result.php -->
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
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">●2015年　7月　〜競技結果〜</h3>
  <!--
    result_start(年、月、日、曜日、大会名、種目、タグ);
    result_schema(); 見出し出力
    result_list(組,人数、氏名、学年、タイム、順位、フラグ); pb sb 入賞
    result_list_sub(氏名、学年、タイム、順位、フラグ);
    result_end();
  -->
  <?php
    result_start(2015,7,12,"日","第28回ユニバーシアード競技会","ハーフマラソン","univer");
    echo "<br><pb><font size='3'>団体の部優勝</font><pb>";
    result_schema();
    result_list("決勝",2,"小椋　裕介",4,"1:04:41",1,"優勝");
      result_list_sub("一色　恭志",3,"1:04:52",2,"準優勝");
    result_end();
  ?>
  <?php
    result_start(2015,7,4,"土","第3回世田谷長距離競技会","5000m","setagaya");
    result_schema();
    //10組
    result_list(10,3,"小関　一輝",3,"14:58.21",18,"");
      result_list_sub("小野塚　久弥",1,"15:00.97",22,"sb");
      result_list_sub("大杉　修平",2,"15:28.65",31,"");
    //11組
    result_list(11,1,"伊藤　雅一",2,"14:49.22",15,"sb");
    //13組
    result_list(13,2,"松田　岳大",1,"14:50.88",20,"");
     result_list_sub("桂川　直也",1,"15:25.95",24,"");
    //14組
    result_list(14,4,"森田　歩希",1,"14:31.67",16,"sb");
      result_list_sub("山田　滉介",1,"14:35.02",18,"sb");
      result_list_sub("鈴木　悠日",3,"14:50.94",30,"");
      result_list_sub("小田　俊平",2,"14:57.15",33,"");
    //15組
    result_list(15,7,"小野田　勇次",1,"14:15.83",2,"sb");
      result_list_sub("村井　駿",4,"14:16.98",4,"sb");
      result_list_sub("近藤　修一郎",2,"14:20.57",8,"sb");
      result_list_sub("橋詰　大慧",1,"14:20.90",10,"sb");
      result_list_sub("小野塚　隆珠",3,"14:33.49",16,"sb");
      result_list_sub("石川　優作",2,"14:44.61",26,"");
      result_list_sub("松島　良太",4,"14:44.97",27,"");
    //17組
    result_list(17,13,"伊藤　弘毅",4,"13:48.38",2,"pb");
      result_list_sub("秋山　雄飛",3,"13:53.76",4,"pb");
      result_list_sub("中村　祐紀",2,"13:58.72",6,"");
      result_list_sub("渡邉　心",4,"13:58.99",7,"pb");
      result_list_sub("吉永　竜聖",2,"14:00.00",8,"pb");
      result_list_sub("山村　隼",4,"14:00.06",9,"pb");
      result_list_sub("梶谷　瑠哉",1,"14:00.30",10,"sb");
      result_list_sub("田村　和希",2,"14:00.61",11,"pb");
      result_list_sub("下田　裕太",2,"14:06.85",16,"pb");
      result_list_sub("渡邉　利典",4,"14:09.65",18,"pb");
      result_list_sub("橋本　崚",4,"14:10.98",20,"pb");
      result_list_sub("茂木　亮太",3,"14:11.98",21,"");
      result_list_sub("田村　健人",3,"14:13.57",24,"");
  ?>
  <?php result_end();?>
  
  <font size="+1"><a href="result_6.php">2015年6月競技結果へ</a>　　　<a href="result_9.php">2015年9月競技結果へ</a></font>
  <!-- ここまで編集可能 -->

  <hr>
  <div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
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