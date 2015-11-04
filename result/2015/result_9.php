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

  <!-- ここから編集可能 -->
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">●2015年　9月　〜競技結果〜</h3>
  <!--
  result_start(年、月、日、曜日、大会名、種目、タグ);
  result_schema(); 見出し出力
  result_list(組,人数、氏名、学年、タイム、順位、フラグ); pb sb 入賞
  result_list_sub(氏名、学年、タイム、順位、フラグ);
  result_end();
  -->
  <?php
    result_start(2015,9,12,"土","天皇賜盃杯第84回日本学生陸上競技対校選手権","5000m","alljapan");
    result_schema();
      result_list("決勝",3,"一色　恭志",3,"13:40:93",4,"入賞 PB!!");
      result_list_sub("小椋　裕介",4,"14:10.25",13,"");
      result_list_sub("久保田　和真",4,"14:16.79",14,"");
    result_end();
  ?>  
  <?php
    result_start(2015,9,11,"金","天皇賜盃杯第84回日本学生陸上競技対校選手権","10000m","alljapan");
    result_schema();
      result_list("決勝",1,"渡邉　心",4,"28:57:21",7,"入賞 PB!!");
    result_end();
  ?>
  <font size="+1"><a href="result_7.php">2015年7月競技結果へ</a>　　　 <a href="result_10.php">2015年10月競技結果へ</a> </font>
  <!-- ここまで編集可能 -->

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