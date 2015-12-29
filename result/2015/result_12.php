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
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">●2015年　12月　〜競技結果〜</h3>
  <!--
  result_start(年、月、日、曜日、大会名、種目、タグ);
  result_schema(); 見出し出力
  result_list(組,人数、氏名、学年、タイム、順位、フラグ); pb sb 入賞
  result_list_sub(氏名、学年、タイム、順位、フラグ);
  result_end();
  -->
  <?php
    result_start(2015,12,13,"日","国士舘記録会","5000m","jokushikan");
    result_schema();
      result_list("12組",2,"伊藤　雅一",2,"14:44.04",1,"sb");
        result_list_sub("大杉 柊平",2,"15:08.39",10,"");
      result_list("16組",8,"内田　翼",3,"14:38.17",1,"");
        result_list_sub("小野塚隆珠",3,"14:39.67",2,"");
        result_list_sub("小田　俊平",2,"14:42.38",3,"");
        result_list_sub("橋間　貴弥",1,"14:43.57",6,"");
        result_list_sub("松島　良太",4,"14:45.52",7,"");
        result_list_sub("小野塚久弥",1,"14:54.74",11,"");
        result_list_sub("鈴木　悠日",3,"14:56.46",13,"");
        result_list_sub("林　　奎介",1,"15:00.65",16,"");
      result_list("17組",4,"石川　優作",2,"14:24.42",2,"");
        result_list_sub("橋詰　大慧",1,"14:31.32",3,"");
        result_list_sub("山田　滉介",1,"14:37.65",8,"");
        result_list_sub("松田　岳大",1,"14:57.03",23,"");
      result_list("18組",4,"伊藤　弘毅",4,"14:07.61",1,"");
        result_list_sub("大越　望　",2,"14:20.52",6,"");
        result_list_sub("森田　歩希",1,"14:21.81",8,"sb");
        result_list_sub("近藤　修一郎",2,"15:04.46",28,"");
    result_end();
  ?>

    <br>
    <div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
    </td>
    </tr>
  </tbody>
  </table>

  <font size="+1"><a href="result_11.php">2015年11月競技結果へ</a></font>　　　<!-- <a href="result_1.php">2016年1月競技結果へ</a> -->
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