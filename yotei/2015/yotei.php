<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include($_SERVER['DOCUMENT_ROOT']."/form/form_yotei.php") ?>
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
  <h2><span class="ja">競技日程</span><span class="en">yotei</span></h2>
  </div><!-- page title end -->
  <div id="hpb-main"><!-- main -->
  <div id="info"><!-- info -->

  <!-- ここから編集  -->
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">2015年度　～競技日程～</h3>
  <table border="2">
  <tbody>
    <!--  記入例
    form_yotei_schema();
    form_yotei_content_month(試合数(月間),試合数(日間)、年、月、日、大会名、場所、タグ、フラグ);
    form_yotei_content_day(試合数(日間),年、月、日、大会名、場所、タグ、フラグ);
    form_yotei_content_day(年、月、日、大会名、場所、タグ、フラグ);
    -->
    <?php form_yotei_schema(); ?>
    <!-- 4月のレース -->
    <?php form_yotei_content_month(8,1,2015,4,4,"世田谷記録会(5000m)","世田谷区立<br>総合運動場","setagaya","詳細"); ?>
    <?php form_yotei_content_day(1,2015,4,5,"日本平桜マラソン","静岡県","nihondaira","詳細"); ?>
    <?php form_yotei_content_day(1,2015,4,12,"焼津ハーフマラソン","焼津","yaizu","詳細"); ?>
    <?php form_yotei_content_day(1,2015,4,18,"織田記念陸上5000m","広島","odakinen","詳細"); ?>
    <?php form_yotei_content_day(3,2015,4,25,"ｱｼｯｸｽチャレンジ1万","神戸","asice","詳細"); ?>
    <?php form_yotei_content_sub(2015,4,25,"日体大競技会(1500m・10000m)","日体大<br>健志台競技場","nittaidai","詳細"); ?>
    <?php form_yotei_content_sub(2015,4,25,"相模原競技会(3000mSC)","相模原","sagamihara","詳細"); ?>
    <?php form_yotei_content_day(1,2015,4,26,"日体大競技会(5000m)","日体大<br>健志台競技場","nittaidai","詳細"); ?>
    <!-- 5月のレース -->
    <?php form_yotei_content_month(5,1,2015,5,10,"仙台国際ハーフマラソン","仙台","","詳細"); ?>
    <?php form_yotei_content_day(1,2015,5,"14-17","関東インカレ","新横浜日産競技場","kankare","詳細"); ?>
    <?php form_yotei_content_day(1,2015,5,17,"岐阜清流ハーフマラソン","岐阜","gifu","詳細"); ?>
    <?php form_yotei_content_day(1,2015,5,24,"東北学院定期対抗戦","仙台市","tohoku","詳細"); ?>
    <?php form_yotei_content_day(1,2015,5,30,"世田谷記録会","世田谷区立<br>総合運動場","setagaya","詳細"); ?>
    <!-- 6月のレース -->
    <?php form_yotei_content_month(2,1,2015,6,7,"日体大記録会(5000m)","日体大<br>健志台競技場","nittai","詳細"); ?>
    <?php form_yotei_content_day(1,2015,6,13,"全日本学生個人選手権","平塚競技場","kojin","詳細"); ?>
    <!-- 7月のレース -->
    <?php form_yotei_content_month(2,1,2015,7,4,"世田谷記録会(5000m)","世田谷区立<br>総合運動場","seragaya","詳細"); ?>
    <?php form_yotei_content_day(1,2015,7,"3-14","ユニバーシアード","韓国・光州","univer","詳細"); ?>
    <!-- 8月のレース -->
    <?php form_yotei_content_month(2,1,2015,8,"1-12","夏季全体強化合宿1","長野県菅平<br>新潟県妙高","",""); ?>
    <?php form_yotei_content_day(1,2015,8,"19-28","夏季全体強化合宿2","御嶽・乗鞍","",""); ?>
    <!-- 9月のレース -->
    <?php form_yotei_content_month(2,2,2015,9,"10-16","夏季選抜合宿","新潟県妙高","",""); ?>
    <?php form_yotei_content_sub(2015,9,"10-16","夏季チャレンジ合宿","長野県菅平","",""); ?>
    <!-- 10月のレース -->
    <?php form_yotei_content_month(2,1,2015,10,3,"世田谷記録会(5000m)","世田谷区立<br>総合運動場","setagaya","詳細"); ?>
    <?php form_yotei_content_day(1,2015,10,12,"出雲全日本選抜駅伝","出雲","izumo","詳細"); ?>
    <!-- 11月のレース -->
    <?php form_yotei_content_month(5,1,2015,11,1,"全日本大学駅伝","熱田神宮～伊勢神宮","zennihon","詳細"); ?>
    <?php form_yotei_content_day(1,2015,11,8,"世田谷246ハーフマラソン","世田谷","setagaya246",""); ?>
    <?php form_yotei_content_day(1,2015,11,14,"日体大記録会(10000m)","日体大<br>健志台競技場","nittaidai",""); ?>
    <?php form_yotei_content_day(1,2015,11,15,"日体大記録会(5000m)","日体大<br>健志台競技場","nittaidai",""); ?>
    <?php form_yotei_content_day(1,2015,11,21,"学連10000m挑戦記録会","未定","gakuren",""); ?>
    <!-- 12月のレース -->
    <?php form_yotei_content_month(3,1,2015,12,"2-6","箱根駅伝選抜強化合宿","千葉県富津","",""); ?>
    <?php form_yotei_content_day(1,2015,12,5,"日体大記録会(10000m)","日体大<br>健志台競技場","nittaidai",""); ?>
    <?php form_yotei_content_day(1,2015,11,6,"日体大記録会(5000m)","日体大<br>健志台競技場","nittaidai",""); ?>
    <!-- 1月のレース -->
    <?php form_yotei_content_month(3,1,2016,1,"2-3","箱根駅伝","大手町→箱根","hakone",""); ?>
    <?php form_yotei_content_day(1,2016,1,10,"高根沢ハーフマラソン","栃木県<br>高根沢町","takanezawa",""); ?>
    <?php form_yotei_content_day(1,2016,1,24,"都道府県対抗広島男子駅伝","広島","todouhuken",""); ?>
    <!-- 2月のレース -->
    <?php form_yotei_content_month(5,2,2016,2,7,"神奈川マラソン","神奈川県磯子","kanagawa",""); ?>
    <?php form_yotei_content_sub(2016,2,7,"丸亀国際ハーフマラソン","香川県丸亀","marugame",""); ?>
    <?php form_yotei_content_day(1,2016,2,"9-21","冬季全体強化合宿","未定","",""); ?>
    <?php form_yotei_content_day(1,2016,2,14,"千葉国際クロスカントリー","千葉","chiba",""); ?>
    <?php form_yotei_content_day(1,2016,2,27,"福岡国際クロスカントリー","福岡","fukuoka",""); ?>
    <!-- 3月のレース -->
    <?php form_yotei_content_month(2,1,2016,3,6,"日本学生ハーフマラソン","立川","tachikawa",""); ?>
    <?php form_yotei_content_day(1,2016,3,"10-20","春季全体強化合宿","未定","",""); ?>
  </tbody>
  </table>
  <!-- ここまで編集 -->

  ＊予定は随時変更されますのでご了承下さい。<br>
  ＊新たな予定が分かり次第更新致します。<br>
  <?php form_toppage(); ?>
  </div><!-- info end -->
  </div><!-- main end -->
  </div><!-- wrapper end -->
  <!-- navi -->
  <?php form_navi(); ?>
  <!-- navi end -->
  <!-- aside -->
  <?php form_yotei_aside(); ?>
  <!-- aside end -->
  </div><!-- inner end -->
  <!-- footer -->
  <?php form_footer(); ?>
  <!-- footer end -->
  </div><!-- container end -->
</body>
</html>