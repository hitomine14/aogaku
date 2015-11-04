<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/form/form.php");  ?>
  <?php form_metadata();  ?>
</head>
<body id="hpb-template-03-05-01" class="hpb-layoutset-02">
<div id="hpb-container"><!-- container -->
  <!-- header -->
    <?php form_header();  ?>
  <!-- header end -->
  <div id="hpb-inner"><!-- inner -->
    <div id="hpb-wrapper"><!-- wrapper -->
      <div id="hpb-title"><!-- page title -->
        <h2><span class="ja">関連サイト</span><span class="en">link</span></h2>
      </div><!-- page title end -->
      <div id="hpb-main"><br><!-- main -->
        <div id="info"><!-- info -->
          <h3><a href="http://www.aoyama.ac.jp/"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"> <font color="#198219">青山学院大学</font></a></h3>
          <h5>大学情報他、各種大会等でのニュースを掲載！！</h5>
          <br>
          <h3><a href="http://www.obiogi.com/obog.php?cid=1000"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"> <font color="#198219">青山学院大学陸上競技部OB会</font></a></h3>
          <h5>各種大会情報、青学記録、写真、OB情報、また短距離ブロックの情報を掲載！！<br>
          </h5>
          <h3><a href="http://aogaku-ekiden.com/"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"> <font color="#198219">青山学院大学校友会 「箱根駅伝を応援する会」</font></a></h3>
          <h5>箱根駅伝出場選手、校友会応援場所、コラム等箱根駅伝情報を多く掲載！！<br>
          </h5>
          <h3><a href="http://univ.nikkansports.com/press/aoyama/ "><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"> <font color="#198219">青山スポーツ</font></a></h3>
          <h5>青山学院大学の体育会の情報を掲載！！<br>
          </h5>
          <h3><a href="https://pazeas2010.wordpress.com"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"><font color="#198219">吉見治療院PAZEAS</font></a></h3>
          <h5>合宿等帯同して頂いています！！<br></h5>
          <h3><a href="http://www.kgrr.org/"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"><font color="#198219">関東学生陸上競技連盟</font></a></h3>
          <h5>箱根駅伝、関東インカレなどの大会情報を掲載！！</h5>
          <h3><a href="http://www.izumo-ekiden.jp/"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"><img src="Image/top_banner_izumo1.jpg" width="141" height="30" border="0" align="middle"></a></h3>
          <h5>大学駅伝最速の戦い、出雲駅伝の情報を掲載！！<br>
          </h5>
          <h3><a href="http://daigaku-ekiden.com/"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"><img src="Image/top_banner_ise.jpg" width="143" height="35" border="0" align="middle"></a></h3>
          <h5>大学日本一決定戦全日本大学駅伝の情報を掲載！！<br>
          </h5>
          <h3><a href="http://www.hakone-ekiden.jp/"><img src="Image/img_o0591.gif" width="16" height="16" border="0" align="middle"><img src="Image/top_banner_hakone.jpg" width="96" height="40" border="0" align="middle"></a></h3>
          <h5>箱根駅伝の情報を掲載！！<br></h5>

          <hr>
          <div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
        </div><!-- info end -->
      </div><!-- main end -->
    </div><!-- wrapper end -->
    <!-- navi -->
      <?php form_navi(); ?>
    <!-- navi end -->
    <!-- aside -->
    <?php
      echo '
    <div id="hpb-aside">
      <div id="banner"><!-- banner -->
        <h3 class="hpb-c-index">バナースペース</h3>
        <ul>
          <li><a href="'.$rank_road.'" id="banner-time" style="font-size : 150%;">青学記録・ランキング</a>
          <li><a href="'.$best_4.'" style="font-size : 150%;">自己ベスト</a>
          <li><a href="http://www.style-21.jp/bbs/agutf/" style="font-size : 150%;">応援ページ・掲示板</a>
          <li><a href="'.$link.'" style="font-size : 150%;">関連サイト・リンク</a>
        </ul>
      </div><!-- banner end -->
      </div>
        ';
       ?>
      <!-- aside end -->
    </div><!-- inner end -->
  <!-- footer -->
    <?php form_footer(); ?>
  <!-- footer end -->
</div><!-- container end -->
</body>
</html>