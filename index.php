<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include($_SERVER['DOCUMENT_ROOT']."/form/form_index.php"); ?>
  <?php form_metadata(); ?>
</head>
<body id="hpb-template-03-05-01" class="hpb-layoutset-01">
  <div id="hpb-container"><!-- container -->
    <!-- header -->
    <?php form_header(); ?>
    <!-- header end -->
    <div id="hpb-inner"><!-- inner -->
      <div id="hpb-wrapper"><!-- wrapper -->
        <div id="hpb-title" class="hpb-top-image"><!-- page title -->
          <h2 style="background-image : url(Image/2013top1.jpg);">青山学院大学体育会陸上競技部　短距離　長距離　駅伝　跳躍</h2>
        </div><!-- page title end -->
        <div id="hpb-main"><!-- main -->
          <div id="toppage"><!-- toppage -->
            <div id="toppage-text"></div>
            <!--       ここから変更       -->
            <!--      
            入力例（リンク）
            form_topic_result(大会年,月,日,大会名,フラグ);  試合結果
            form_topic_yotei(更新年,月,日,大会名,大会月);
            form_topic_onrei(更新年,月,日);
            form_topic_free(更新年,月,日,文章,フラグ) 試合予定
            -->
            <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">トピック・お知らせ</h3>
            <?php
            form_topic_free(2015,12,29,"第92回東京箱根間往復大学駅伝競走のチームエントリーを掲載しました。",1);
            form_topic_onrei(2015,12,29);
            form_topic_result(2015,12,13,"国士舘記録会","kokushikan");
            ?>
            <b>
              <font size="4">＜2015年度 『その一瞬を楽しめ』〜最強への徹底〜＞
              <br>『まだ王者じゃ、ない』</font>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8dArQQsAST8" frameborder="0" allowfullscreen></iframe>
            <!--       ここまで変更       -->
            <?php form_toppage(); ?>
          </div><!-- toppage end -->
        </div><!-- main end -->
      </div><!-- wrapper end -->
      <!-- navi -->
        <?php form_navi(); ?>
      <!-- navi end -->
      <!-- aside -->
        <?php form_aside(); ?>
      <!-- aside end -->
    </div><!-- inner end -->
    <!-- footer -->
      <?php form_footer(); ?>
    <!-- footer end -->
  </div><!-- container end -->
</body>

  </html>