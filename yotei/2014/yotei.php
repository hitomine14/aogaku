<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include($_SERVER['DOCUMENT_ROOT']."/form/form_yotei.php"); ?>
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
    <h2><span class="ja">今後の予定</span><span class="en">future schedule</span></h2>
  </div><!-- page title end -->
  <div id="hpb-main"><!-- main -->
  <div id="info"><!-- info -->
 
  <!--  ここから編集  -->
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">2014年度　～競技日程～</h3>
  <table border="2">
  <tbody>
    <!--  記入例
    form_yotei_schema();
    form_yotei_content_month(試合数(月間),試合数(日間)、年、月、日、大会名、場所、タグ、フラグ);
    form_yotei_content_day(試合数(日間),年、月、日、大会名、場所、タグ、フラグ);
    form_yotei_content_day(年、月、日、大会名、場所、タグ、フラグ);
    -->
    <?php form_yotei_schema();
    // 4月レース  
    form_yotei_content_month(9,2,2014,4,5,"世田谷記録会(5000m)","世田谷区立<br>総合運動場","setagaya","詳細");
    form_yotei_content_sub(2014,4,5,"金栗選抜中長距離選手権","熊本県民総合運動公園陸上競技場","kanaguri","詳細");
    form_yotei_content_day(1,2014,4,6,"日本平桜マラソン","静岡県日本平","nihondaira","詳細");
    form_yotei_content_day(1,2014,4,12,"日体大記録会(1万・1500m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(2,2014,4,13,"日体大記録会(5000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_sub(2014,4,13,"焼津マラソン","焼津","yaizu","詳細");
    form_yotei_content_day(1,2014,4,20,"兵庫リレーカーニバル","兵庫","hyogo","詳細");
    form_yotei_content_day(1,2014,4,21,"かすみがうら10マイル","茨城県土浦市","kasumigaura","詳細");
    form_yotei_content_day(1,2014,4,27,"日体大記録会(5000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    // 5月レース  
    form_yotei_content_month(6,1,2014,5,16,"関東インカレ(1日目)","熊谷スポーツ文化公園陸上競技場","kankare","詳細");
    form_yotei_content_day(1,2014,5,17,"関東インカレ(2日目)","熊谷スポーツ文化公園陸上競技場","kankare","詳細");
    form_yotei_content_day(1,2014,5,18,"岐阜清流ハーフマラソン","岐阜市長良福光大野","gifu","詳細");
    form_yotei_content_day(1,2014,5,24,"関東インカレ(3日目)","熊谷スポーツ文化公園陸上競技場","kankare","詳細");
    form_yotei_content_day(1,2014,5,25,"関東インカレ(4日目)","熊谷スポーツ文化公園陸上競技場","kankare","詳細");
    form_yotei_content_day(1,2014,4,31,"世田谷記録会(5000m)","世田谷区立<br>総合運動場","setagaya","詳細");
    // 6月レース  
    form_yotei_content_month(6,1,2014,6,14,"日体大競技会(10000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(1,2014,6,15,"日体大競技会(5000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(1,2014,5,20,"全日本学生個人選手権","平塚競技場","kojin","詳細");
    form_yotei_content_day(1,2014,5,25,"ホクレンディスタンス1万m","北海道士別","shibetsu","詳細");
    form_yotei_content_day(1,2014,5,28,"ホクレンディスタンス5000m","北海道深川","fukagawa","詳細");
    form_yotei_content_day(1,2014,5,29,"東北学院定期対抗戦","町田市営競技場","tohoku","詳細");
    // 7月レース  
    form_yotei_content_month(1,1,2014,7,5,"世田谷競技会(5000m)","世田谷区立<br>総合運動場","setagaya","詳細");
    // 8月合宿  
    form_yotei_content_month(2,1,2014,8,"5-13","夏季全体合宿1","長野県菅平・新潟県妙高","","");
    form_yotei_content_day(1,2014,8,"5-9月1","夏季全体合宿2","御嶽・乗鞍","","");
    // 9月レース  
    form_yotei_content_month(2,1,2014,9,"5-7","全日本インカレ","熊谷競技場","kumagaya","詳細");
    form_yotei_content_day(1,2014,9,"12-18","夏季選抜合宿","新潟県・妙高","","");
    // 10月レース  
    form_yotei_content_month(6,1,2014,10,4,"世田谷競技会(5000m)","世田谷区立<br>総合運動場","setagaya","詳細");
    form_yotei_content_day(1,2014,10,5,"International Half Marathon - Incheon","韓国","incheon","詳細");
    form_yotei_content_day(2,2014,10,13,"第25回出雲全日本選抜駅伝","島根県出雲市","izumo","詳細");
    form_yotei_content_sub(2014,10,13,"出雲市記録会","島根県出雲市","izumo","詳細");
    form_yotei_content_day(1,2014,10,28,"日体大競技会(10000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(1,2014,10,29,"日体大競技会(5000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    // 11月レース  
    form_yotei_content_month(6,1,2014,11,2,"全日本大学駅伝","熱田神宮～伊勢神宮","zennihon","詳細");
    form_yotei_content_day(2,2014,11,9,"世田谷246ハーフマラソン","世田谷区","setagaya246","詳細");
    form_yotei_content_sub(2014,11,9,"第28回宮古サーモンハーフマラソン","岩手県","salmon","詳細");
    form_yotei_content_day(1,2014,11,16,"日体大競技会(10000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(1,2014,11,23,"10000m記録挑戦会","ー","gakuren","詳細");
    form_yotei_content_day(1,2014,11,24,"国際千葉駅伝","千葉","chiba","詳細");
    // 12月レース  
    form_yotei_content_month(3,1,2014,12,6,"日体大競技会(10000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(1,2014,12,7,"日体大競技会(5000m)","日体大<br>健志台キャンパス","nittaidai","詳細");
    form_yotei_content_day(1,2014,12,20,"合同記者会見","相模原キャンパスB棟","","詳細");
    // 1月レース  
    form_yotei_content_month(4,1,2015,1,2,"第91回箱根駅伝（往路）","東京大手町→箱根芦ノ湖","","1次ｴﾝﾄﾘｰ");
    form_yotei_content_day(1,2015,1,3,"第91回箱根駅伝（復路）","箱根芦ノ湖→東京大手町","","");
    form_yotei_content_day(1,2015,1,11,"高根沢ハーフマラソン","栃木県高根沢町","takanezawa","詳細");
    form_yotei_content_day(1,2015,1,18,"都道府県対抗広島男子駅伝","広島","todouhuken","詳細");
    // 2月レース  
    form_yotei_content_month(2,2,2015,2,1,"神奈川マラソン(ハーフ)","神奈川県磯子","kanagawa","詳細");
    form_yotei_content_sub(2015,2,2,"丸亀国際ハーフマラソン","香川県丸亀市","marugame","詳細");
    // 3月レース  
    form_yotei_content_month(1,1,2015,3,1,"日本学生ハーフマラソン","東京都立川市","gakusei","詳細"); ?>
  </tbody>
  </table>
  <!--  ここまで編集  -->
  
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