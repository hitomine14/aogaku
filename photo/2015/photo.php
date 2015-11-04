<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/form/form_photo.php");  ?>
  <?php form_metadata();  ?>  
</head>
<body id="hpb-template-03-05-01" class="hpb-layoutset-02">
<div id="hpb-container"><!-- container -->
  <!-- header -->
  <?php form_header(); ?>
  <!-- header end -->
  <div id="hpb-inner"><!-- inner -->
    <div id="hpb-wrapper"><!-- wrapper -->
      <div id="hpb-title"><!-- page title -->
        <h2><span class="ja">写真館</span><span class="en">Photo studio</span></h2>
      </div><!-- page title end -->
      <div id="hpb-main"><!-- main -->
        <div id="facilities"><!-- facilities -->
          <h3>2015年度　〜ラインナップ〜</h3>
          <table border="1" width="100%" cellpadding="0" cellspacing="0" class="hpb-lay-ftable">
            <tbody>
              <tr>
                <td bgcolor="#CCFF99" style="text-align : center;" align="center">日付</td>
                <td bgcolor="#CCFF99" style="text-align : center;" align="center">試合名・行事名</td>
                <td bgcolor="#CCFF99" style="text-align : center;" align="center">場所</td>
                <td bgcolor="#CCFF99" style="text-align : center;" align="center">備考</td>
              </tr>
              <tr>
                <td style="text-align : center;" align="center">3月8日・9日</td>
                <td  style="text-align : center;" align="center">入寮式・公開練習会</td>
                <td  style="text-align : center;" align="center">町田寮<br>
                相模原キャンパス</td>
                <td  style="text-align : center;" align="center"><u><a href="">詳細</a></u></td>
              </tr>
              <tr>
                <td style="text-align : center;" align="center">4月4日</td>
                <td  style="text-align : center;" align="center">世田谷記録会</td>
                <td  style="text-align : center;" align="center">世田谷<br>
                <td  style="text-align : center;" align="center"><u><a href="">詳細</a></u></td>
              </tr>
              <tr>
                <td style="text-align : center;" align="center">8月1～12日</td>
                <td  style="text-align : center;" align="center">夏季１次全体合宿</td>
                <td  style="text-align : center;" align="center">菅平・妙高<br>
                <td  style="text-align : center;" align="center"><u><a href="kaki1/index.php">詳細</a></u></td>
              </tr>

            </tbody>
          </table>
          <hr>
            <?php form_toppage(); ?>
        </div><!-- facilities end -->
      </div><!-- main end -->
    </div><!-- wrapper end -->
    <!-- navi -->
      <?php form_navi(); ?>
    <!-- navi end -->
    <!-- aside -->
      <?php form_photo_aside(); ?>
    <!-- aside end -->
  </div><!-- inner end -->
  <!-- footer -->
    <?php form_footer(); ?>
  <!-- footer end -->
</div><!-- container end -->
</body>
</html>