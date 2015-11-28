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
  <h3 class="hpb-parts-hl-08 hpb-parts-hl-style">●2015年　11月　〜競技結果〜</h3>
  <!--
  result_start(年、月、日、曜日、大会名、種目、タグ);
  result_schema(); 見出し出力
  result_list(組,人数、氏名、学年、タイム、順位、フラグ); pb sb 入賞
  result_list_sub(氏名、学年、タイム、順位、フラグ);
  result_end();
  -->
  <?php
    result_start(2015,11,29,"日","東海大学長距離競技会","5000m","tokai");
    result_schema();
      result_list("13組",4,"",0,"",0,"");
        result_list_sub("小野塚　久弥",1,"",0,"");
        result_list_sub("木村　光佑",1,"",0,"");
        result_list_sub("大杉　柊平",2,"",0,"");
        // result_list_sub("伊藤　雅一",2,"",0,"");
      result_list("13組",13,"",0,"",0,"");
        result_list_sub("鈴木　悠日",3,"",0,"");
        result_list_sub("小田　俊平",2,"",0,"");
        result_list_sub("石川　優作",2,"",0,"");
        result_list_sub("森田　歩希",1,"",0,"");
        result_list_sub("松島　良太",4,"",0,"");
        result_list_sub("林　　奎介",1,"",0,"");
        result_list_sub("小野塚隆珠",3,"",0,"");
        result_list_sub("山田　滉介",1,"",0,"");
        result_list_sub("大越　望　",2,"",0,"");
        result_list_sub("松田　岳大",1,"",0,"");
        result_list_sub("桂川　直也",1,"",0,"");
        result_list_sub("橋間　貴弥",1,"",0,"");
        // result_list_sub("橋詰　大慧",1,"",0,"");
    result_end();
  ?>


  <?php
    result_start(2015,11,21,"土","10000m記録挑戦競技会","10000m","gakuren");
    result_schema();
      result_list("2組",3,"大杉　柊平",2,"30:58.66",4,"初レース");
        result_list_sub("伊藤　雅一",2,"31:34.79",11,"");
        result_list_sub("小野塚久弥",1,"31:43.16",14,"初レース");
      result_list("7組",9,"森田　歩希",1,"29:58.37",3,"初レース");
        result_list_sub("小野塚隆珠",3,"30:05.68",4,"pb");
        result_list_sub("小田　俊平",2,"30:14.89",6,"pb");
        result_list_sub("松田　岳大",1,"30:31.26",11,"初レース");
        result_list_sub("鈴木　悠日",3,"31:19.01",18,"");
        result_list_sub("大越　望　",2,"32:04.65",23,"");
        result_list_sub("林　　奎介",1,"32:07.31",24,"初レース");
        result_list_sub("木村　光佑",1,"32:38.99",26,"初レース");
        result_list_sub("橋間　貴弥",1,"33:02.92",27,"初レース");
      result_list("10組",7,"貞永　隆佑",2,"29:02.52",8,"初レース");
        result_list_sub("松島　良太",4,"30:07.75",26,"");
        result_list_sub("田村　健人",3,"30:21.09",27,"");
        result_list_sub("橋詰　大慧",1,"30:44.69",28,"初レース");
        result_list_sub("桂川　直也",1,"30:46,34",29,"初レース");
        result_list_sub("石川　優作",2,"30:50.82",30,"pb");
        result_list_sub("山田　滉介",1,"31:14.85",31,"初レース");
      result_list("11組",15,"久保田和真",4,"28:24.50",1,"pb");
        result_list_sub("下田　裕太",2,"28:33.77",4,"pb");
        result_list_sub("中村　祐紀",2,"28:34.66",5,"pb");
        result_list_sub("渡邉　利典",4,"28:35.05",6,"pb");
        result_list_sub("一色　恭志",3,"28:35.55",7,"sb");
        result_list_sub("渡邉　心　",4,"28:37.38",9,"pb");
        result_list_sub("田村　和希",2,"28:46.81",12,"pb");
        result_list_sub("池田　生成",3,"28:51.31",13,"pb");
        result_list_sub("茂木　亮太",3,"29:00.67",15,"pb");
        result_list_sub("橋本　崚　",4,"29:11.17",20,"");
        result_list_sub("小椋　裕介",4,"29:13.64",21,"");
        result_list_sub("山村　隼 ",4,"29:25.92",24,"");
        result_list_sub("安藤　悠哉",3,"29:31.60",25,"");
        result_list_sub("秋山　雄飛",3,"29:53.83",27,"");
        result_list_sub("近藤修一郎",2,"31:15.95",31,"");
    result_end();
  ?>  
  <a name="8_miyako"></a>
  <table>
  <tbody>
    <tr>
    <td bgcolor="#CCFF99" style="font-size : 140%;" width="599"><b>●2015年11月8日(日)　第29回　宮古サーモンハーフマラソン</b></td>
    </tr>
    <tr>
    <td width="599">
    ＜10kmの部＞
    <table border="1">
    <tbody>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">氏名</td>
    <td align="center" style="font-size : 110%;text-align : center;">学年</td>
    <td align="center" style="font-size : 110%;text-align : center;">記録</td>
    <td align="center" style="font-size : 110%;text-align : center;">順位</td>
    <td align="center" style="font-size : 110%;text-align : center;">備考</td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">森田　歩希</td>
    <td align="center" style="font-size : 110%;text-align : center;">1年</td>
    <td align="center" style="font-size : 110%;text-align : center;">29:47</td>
    <td align="center" style="font-size : 110%;text-align : center;">2位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">貞永　隆佑</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">30:21</td>
    <td align="center" style="font-size : 110%;text-align : center;">3位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">内田　翼</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">30:23</td>
    <td align="center" style="font-size : 110%;text-align : center;">4位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">松田　岳大</td>
    <td align="center" style="font-size : 110%;text-align : center;">1年</td>
    <td align="center" style="font-size : 110%;text-align : center;">30:27</td>
    <td align="center" style="font-size : 110%;text-align : center;">5位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">橋間　貴弥</td>
    <td align="center" style="font-size : 110%;text-align : center;">1年</td>
    <td align="center" style="font-size : 110%;text-align : center;">30:29</td>
    <td align="center" style="font-size : 110%;text-align : center;">6位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    </tbody>
    </table>
    <br>＜ハーフ部＞
    <table border="1">
    <tbody>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">氏名</td>
    <td align="center" style="font-size : 110%;text-align : center;">学年</td>
    <td align="center" style="font-size : 110%;text-align : center;">記録</td>
    <td align="center" style="font-size : 110%;text-align : center;">順位</td>
    <td align="center" style="font-size : 110%;text-align : center;">備考</td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">石川　優作</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:06:03</td>
    <td align="center" style="font-size : 110%;text-align : center;">1位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></font></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">大越　望</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:08:11</td>
    <td align="center" style="font-size : 110%;text-align : center;">2位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></font></td>
    </tr>
    </tbody>
    </table>
    <br>
    <div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
    </td>
    </tr>
  </tbody>
  </table>


<!-- 世田谷246ハーフマラソン -->
  <a name="8_setagaya"></a>
  <table>
  <tbody>
    <tr>
    <td bgcolor="#CCFF99" style="font-size : 140%;" width="599"><b>●2015年11月8日(日)　第10回　世田谷246ハーフマラソン</b></td>
    </tr>
    <tr>
    <td width="599">
    <table border="1">
    <tbody>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">氏名</td>
    <td align="center" style="font-size : 110%;text-align : center;">学年</td>
    <td align="center" style="font-size : 110%;text-align : center;">記録</td>
    <td align="center" style="font-size : 110%;text-align : center;">順位</td>
    <td align="center" style="font-size : 110%;text-align : center;">備考</td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">中村　祐紀</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:03:28</td>
    <td align="center" style="font-size : 110%;text-align : center;">1位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><font color="#f00">PB!!<br>優勝!</font></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">渡邉　利典</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:03:54</td>
    <td align="center" style="font-size : 110%;text-align : center;">2位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">秋山　雄飛</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:00</td>
    <td align="center" style="font-size : 110%;text-align : center;">3位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><pb>PB!!</pb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">池田　生成</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:08</td>
    <td align="center" style="font-size : 110%;text-align : center;">4位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><pb>PB!!</pb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">梶谷　瑠哉</td>
    <td align="center" style="font-size : 110%;text-align : center;">1年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:12</td>
    <td align="center" style="font-size : 110%;text-align : center;">5位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>初レース</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">吉永　竜聖</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:22</td>
    <td align="center" style="font-size : 110%;text-align : center;">7位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">渡邉　心</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:29</td>
    <td align="center" style="font-size : 110%;text-align : center;">8位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">近藤修一郎</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:46</td>
    <td align="center" style="font-size : 110%;text-align : center;">9位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">茂木　亮太</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:04:49</td>
    <td align="center" style="font-size : 110%;text-align : center;">10位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">山村　隼</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:05:29</td>
    <td align="center" style="font-size : 110%;text-align : center;">12位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">小野塚隆珠</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:05:53</td>
    <td align="center" style="font-size : 110%;text-align : center;">15位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">田村　健人</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:05:58</td>
    <td align="center" style="font-size : 110%;text-align : center;">16位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">下田　裕太</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:05:59</td>
    <td align="center" style="font-size : 110%;text-align : center;">17位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">小椋　裕介</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:05:59</td>
    <td align="center" style="font-size : 110%;text-align : center;">18位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">安藤　悠哉</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:05:59</td>
    <td align="center" style="font-size : 110%;text-align : center;">19位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">松島　良太</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:06:48</td>
    <td align="center" style="font-size : 110%;text-align : center;">24位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">鈴木　悠日</td>
    <td align="center" style="font-size : 110%;text-align : center;">3年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:06:51</td>
    <td align="center" style="font-size : 110%;text-align : center;">25位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">山田　滉介</td>
    <td align="center" style="font-size : 110%;text-align : center;">1年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:07:17</td>
    <td align="center" style="font-size : 110%;text-align : center;">30位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>初レース</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">伊藤　弘毅</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:08:17</td>
    <td align="center" style="font-size : 110%;text-align : center;">41位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">田村　和希</td>
    <td align="center" style="font-size : 110%;text-align : center;">2年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:12:59</td>
    <td align="center" style="font-size : 110%;text-align : center;">69位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">橋本　崚</td>
    <td align="center" style="font-size : 110%;text-align : center;">4年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:12:59</td>
    <td align="center" style="font-size : 110%;text-align : center;">70位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">桂川　直也</td>
    <td align="center" style="font-size : 110%;text-align : center;">1年</td>
    <td align="center" style="font-size : 110%;text-align : center;">1:14:16</td>
    <td align="center" style="font-size : 110%;text-align : center;">79位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>初レース</sb></td>
    </tr>
    </tbody>
    </table>
    <br>
    <div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
    </td>
    </tr>
  </tbody>
  </table>
<!-- 全日本大学駅伝  -->
  <a name="1_alljapan"></a>
  <table>
  <tbody>
    <tr>
    <td bgcolor="#CCFF99" style="font-size : 140%;" width="599"><b>●2015年　11月1日（日） <br>第47回 秩父宮賜杯 全日本大学駅伝対校選手権大会</b></td>
    </tr>
    <tr>
    <td width="599">
    <table border="1">
    <tbody>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">区間</td>
    <td align="center" style="font-size : 110%;text-align : center;">氏名</td>
    <td align="center" style="font-size : 110%;text-align : center;">記録</td>
    <td align="center" style="font-size : 110%;text-align : center;">区間順位</td>
    <td align="center" style="font-size : 110%;text-align : center;">備考</td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">1区</td>
    <td align="center" style="font-size : 110%;text-align : center;">一色　恭志</td>
    <td align="center" style="font-size : 110%;text-align : center;">43:11</td>
    <td align="center" style="font-size : 110%;text-align : center;">2位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>青学記録!!</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">2区</td>
    <td align="center" style="font-size : 110%;text-align : center;">小椋　裕介</td>
    <td align="center" style="font-size : 110%;text-align : center;">38:09</td>
    <td align="center" style="font-size : 110%;text-align : center;">5位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">3区</td>
    <td align="center" style="font-size : 110%;text-align : center;">田村　和希</td>
    <td align="center" style="font-size : 110%;text-align : center;">26:59</td>
    <td align="center" style="font-size : 110%;text-align : center;">2位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>青学記録!!</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">4区</td>
    <td align="center" style="font-size : 110%;text-align : center;">久保田和真</td>
    <td align="center" style="font-size : 110%;text-align : center;">40:33</td>
    <td align="center" style="font-size : 110%;text-align : center;"><pb>区間賞!!</pb></td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>青学記録!!</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">5区</td>
    <td align="center" style="font-size : 110%;text-align : center;">下田　裕太</td>
    <td align="center" style="font-size : 110%;text-align : center;">33:46</td>
    <td align="center" style="font-size : 110%;text-align : center;"><pb>区間賞!!</pb></td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>青学記録!!</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">6区</td>
    <td align="center" style="font-size : 110%;text-align : center;">渡邉　心</td>
    <td align="center" style="font-size : 110%;text-align : center;">36:18</td>
    <td align="center" style="font-size : 110%;text-align : center;">4位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">7区</td>
    <td align="center" style="font-size : 110%;text-align : center;">橋本　崚</td>
    <td align="center" style="font-size : 110%;text-align : center;">35:27</td>
    <td align="center" style="font-size : 110%;text-align : center;">3位</td>
    <td align="center" style="font-size : 110%;text-align : center;"><sb>青学記録!!</sb></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;">8区</td>
    <td align="center" style="font-size : 110%;text-align : center;">神野　大地</td>
    <td align="center" style="font-size : 110%;text-align : center;">59:45</td>
    <td align="center" style="font-size : 110%;text-align : center;">8位</td>
    <td align="center" style="font-size : 110%;text-align : center;"></td>
    </tr>
    <tr>
    <td align="center" style="font-size : 110%;text-align : center;" colspan="2"><font color="#333333">総合結果</font></td>
    <td align="center" style="font-size : 110%;text-align : center;" colspan="2">5:14:08</td>
    <td align="center" style="font-size : 110%;text-align : center;">2位<br><sb>青学記録!!</sb></td>
    </tr>
    </tbody>
    </table>
    <br>
<!--
    <table border="0" width="100%" cellpadding="0" cellspacing="0" class="hpb-lay-ftable">
    <tbody>
    <tr>
    <td bgcolor="#CCFF99">選手コメント<br>
    <br>
    1区　小椋裕介（4年）<br>
    区間賞をとれなかった悔しさはありますが、歴代4位ということで、一区の役割は果たせたと思います。三冠の1つ目を達成できたので、残る二つの駅伝へ向けて、練習していきます。<br>
    応援ありがとうございました。<br>
    <br>
    2区　中村祐紀（2年）<br>
    応援ありがとうございました。初大学駅伝でしたが、強い先輩方に支えられ自分の走りに集中できました。全日本、箱根駅伝も引き続き応援よろしくお願いします。<br>
    <br>
    3区　久保田和真（4年）<br>
    応援ありがとうございました。久保田スマイルだけでなく青学スマイル見ていただけたでしょうか！あと二つもっと弾けるようなとびきりスマイルお届けできるように頑張ります！<br>
    <br>
    4区　下田裕太（2年）<br>
    初駅伝で緊張もありましたが自分の役割を果たす走りは出来たと思います。<br>
    内容にはかなり課題がありますのでしっかりと全日本箱根に繋げていきたいです。<br>
    応援ありがとうございました。<br>
    <br>
    5区　山村隼（4年）<br>
    今回の出雲駅伝では3区の久保田と一緒に走って優勝することができて満足です。しかし、これは青学の三冠への挑戦の序章であるので、
    すぐに切り替えて来月に控えた全日本大学駅伝に向けてさらに練習を積んでいきたいと思います。応援ありがとうございました。<br>
    <br>
    6区　一色恭志（3年）<br>
    沿道、またはテレビの前からの応援ありがとうございました。責任重大なアンカーでヒヤヒヤしましたが、なんとか優勝することが出来ました。<br>
    まだこれから全日本大学駅伝、箱根駅伝と続くので三冠達成に向けて気を引き締めて練習に取り組んでいきます。
    <br><br>
    </td>
    </tr>
    </tbody>
    </table>
    -->
    <br>
    <div id="pagetop"><a href="#hpb-container">このページの先頭へ</a></div>
    </td>
    </tr>
  </tbody>
  </table>

  <font size="+1"><a href="result_10.php">2015年10月競技結果へ</a></font>　　　<!-- <a href="result_12.php">2015年12月競技結果へ</a> -->
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