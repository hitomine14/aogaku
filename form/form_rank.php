<?php 
	include("form.php");

function form_rank_aside(){
	extract($GLOBALS);
	echo '
    <div id="hpb-aside">
      <div id="banner" style="text-align : center;" align="center">
        <table width="100%" class="hpb-lay-ftable">
          <tbody>
            <tr>
              <td bgcolor="#228b22" style="text-align : center;"><font color="#ffffff" face="HGｺﾞｼｯｸE" style="font-size : 150%;">青学記録・ランキング</font></td>
            </tr>
          </tbody>
        </table>
        <h3 class="hpb-c-index">バナースペース</h3>
        <ul>
          <li><a href="'.$rank_track.'#5000m" style="font-size : 150%;text-align : center;">5000m</a>
          <li><a href="r'.$rank_track.'#10000m" style="font-size : 150%;text-align : center;">10000m</a>
          <li><a href="'.$rank_track.'#ha-fu" style="font-size : 150%;text-align : center;">ハーフマラソン</a>
          <li><a href="'.$rank_road.'#hakone" style="font-size : 150%;text-align : center;">箱根駅伝</a>
	        <li><a href="'.$rank_road.'#izumo" style="font-size : 150%;text-align : center;">出雲駅伝</a>
          <li><a href="'.$rank_road.'#zennnihonn" style="font-size : 150%;text-align : center;">全日本大学駅伝</a>
        </ul>
      </div><!-- banner end -->
    </div>
	';
}

function ranking_start($title){
  echo"
    <a name={$title}></a>
    <h3 class='hpb-parts-hl-08 hpb-parts-hl-style'>ランキング　〜{$title}〜</h3>
    <table border='0'>
    <tbody>
  ";
}
function ranking_schema(){
  echo"
    <tr>
    <td bgcolor='#CCFF99' align='center' style='font-size : 110%;text-align : center;'>順位</td>
    <td bgcolor='#CCFF99' align='center' style='font-size : 110%;text-align : center;'>氏名</td>
    <td bgcolor='#CCFF99' align='center' style='font-size : 110%;text-align : center;'>学年</td>
    <td bgcolor='#CCFF99' align='center' style='font-size : 110%;text-align : center;'>記録</td>
    <td bgcolor='#CCFF99' align='center' style='font-size : 110%;text-align : center;'>備考</td>
    </tr>
  ";
}
function ranking_list($place,$name,$grade,$time,$year,$month,$color){
  echo"
    <tr>
    <td align='center' style='font-size : 110%;text-align : center;'><$color>{$place}位</$color></td>
    <td align='center' style='font-size : 110%;text-align : center;'><$color>{$name}</$color></td>
    <td align='center' style='font-size : 110%;text-align : center;'><$color>{$grade}</$color></td>
    <td align='center' style='font-size : 110%;text-align : center;'><$color>{$time}</$color></td>
    <td align='center' style='font-size : 110%;text-align : center;'><$color>{$year}・{$month}</$color></td>
    </tr>
  ";
}
function ranking_end(){
  echo'
    </tbody>
    </table>
  ';
}
?>