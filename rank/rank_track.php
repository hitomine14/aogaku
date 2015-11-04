<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include ($_SERVER["DOCUMENT_ROOT"]."/form/form_rank.php"); ?>
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
  
  <h2><span class="ja">青学記録</span><span class="en">Aoyama record</span></h2>
  </div><!-- page title end -->
  <div id="hpb-main"><!-- main -->
  <div id="access"><!-- access -->
  
  <!--  ここから編集  -->
    <?php
      ranking_start("5000m");
        ranking_schema();
        ranking_list(1,"一色　恭志",3,"13:40.93",15, 9,"blue");
        ranking_list(2,"伊藤　弘毅",4,"13:48.38",15,7,"blue");
        ranking_list(3,"久保田和真",4,"13:49.27",15,4,"blue");
        ranking_list(4,"秋山　雄飛",3,"13:53.76",15,7,"blue");
        ranking_list(5,"小椋　裕介",4,"13:55.97",15,4,"blue");
        ranking_list(6,"中村　祐紀",2,"13:57.40",15,4,"blue");
        ranking_list(7,"安藤　悠哉",3,"13:57.75",15,4,"blue");
        ranking_list(8,"梶谷　瑠哉",1,"13:57.81","","","black");
        ranking_list(9,"富田　浩之",1,"13:58.17","","","black");
        ranking_list(10,"渡邉　　心",4,"13:58.99",14,5,"blue");
      ranking_end();
    ?>
    <?php
      ranking_start("10000m");
        ranking_schema();
        ranking_list(1,"一色　恭志",3,"28:23.40",14,7,"black");
        ranking_list(2,"小椋　裕介",4,"28:27.73",14,7,"black");
        ranking_list(3,"久保田和真",4,"28:30.78",14,11,"black");
        ranking_list(4,"神野　大地",4,"28:41.48",13,11,"black");
        ranking_list(5,"渡邉　　心",4,"28:57.21",15,9,"blue");
        ranking_list(6,"秋山　雄飛",3,"28:58.93",14,7,"black");
        ranking_list(7,"中村　祐紀",2,"29:02.88",15,4,"blule");
        ranking_list(8,"安藤　悠哉",3,"29:03.25",15,4,"blue");
        ranking_list(9,"渡邉　利典",4,"29:05.19",15,4,"blue");
        ranking_list(10,"池田　生成",3,"29:06.16",15,4,"blue");
        ranking_end();
      ?>
      <?php
        ranking_start("ハーフマラソン");
        ranking_schema();
        ranking_list(1,"神野　大地",4,"1:01:21",15,2,"blue");
        ranking_list(2,"小椋　裕介",4,"1:02:03",15,2,"blue");
        ranking_list(3,"一色　恭志",3,"1:02:09",15,2,"blue");
        ranking_list(4,"田村　和希",2,"1:02:22",15,3,"blue");
        ranking_list(5,"下田　裕太",2,"1:02:22",15,3,"blue");
        ranking_list(6,"渡邉　　心",4,"1:03:07",15,3,"blue");
        ranking_list(7,"渡邉　利典",4,"1:03:13",15,3,"blue");
        ranking_list(8,"安藤　悠哉",3,"1:03:37",15,2,"blue");
        ranking_list(9,"山村　　隼",4,"1:03:38",14,2,"black");
        ranking_list(10,"松島　良太",4,"1:03:48",15,3,"blue");
        ranking_end();
      ?>
      
      <!--  ここまで編集  -->
  <br>
  <br>
  ※<sb>青文字</sb>は本年度達成記録です
  <hr>
  <?php form_toppage(); ?>
  </div><!-- access end -->
  </div><!-- main end -->
  </div><!-- wrapper end -->
  <!-- navi -->
    <?php form_navi(); ?>
  <!-- navi end -->
  <!-- aside -->
    <?php form_rank_aside(); ?>
  <!-- aside end -->
  </div><!-- inner end -->
  <!-- footer -->
    <?php form_footer(); ?>
  <!-- footer end -->
  </div><!-- container end -->
</body>
</html>