<?php
include("form.php");

function result_start($y,$m,$d,$w,$name,$kind,$tag){
  echo"
    <a name='${d}_${tag}'></a>
    <table>
    <tbody>
    <tr>
    <td bgcolor='#CCFF99' style='font-size:140%;'width='599'><b>●${y}年${m}月${d}日(${w})　${name}</b></td>
    </tr>
    <tr>
    <td width='599'>
    <font size='3'>＜${kind}:結果＞</font>
    <table border='1'> ";
}

function result_end(){
  echo"
    </table>";
  form_toppage();
  echo"
    </td>
    </tr>
    </tbody>
    </table> ";
}

function result_schema(){
  echo '
    <tr>
    <td align="center" style="font-size : 110%; text-align : center">組</td>
    <td align="center" style="font-size : 110%; text-align : center">氏名</td>
    <td align="center" style="font-size : 110%; text-align : center">学年</td>
    <td align="center" style="font-size : 110%;text-align : center;">記録</td>
    <td align="center" style="font-size : 110%;text-align : center;">順位</td>
    <td align="center" style="font-size : 110%;text-align : center;">備考</td>
    </tr>
  ';
}

function result_list($kumi,$num,$name,$grade,$time,$place,$flag){
  echo "
    <tr>
    <td align='center' style='font-size : 110%;text-align : center' rowspan='${num}'>${kumi}</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${name}</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${grade}年</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${time}</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${place}位</td>
    <td align='center' style='font-size : 110%;text-align : center;'> ";
  if($flag == "pb"){
    echo "<pb>PB!!</pb>";
  }else if($flag == "sb"){
    echo "<sb>SB!</sb>";
  }else if($flag == "入賞"){
    echo "<sb>入賞!</sb>";
  }else if($flag == "入賞 pb"){
    echo "<sb>入賞!</sb><br><pb>PB!!</pb>";
  }else if($flag == "入賞 sb"){
    echo "<sb>入賞!<br>SB!</sb>";
  }else if($flag == "優勝"){
    echo "<pb>優勝!!</pb>";
  }else if($flag == "優勝 sb"){
    echo "<pb>優勝</pb><br><sb>SB!</sb>";
  }else if($flag == "決勝進出"){
    echo "${flag}";
  }else if($flag == "初レース"){
    echo "<sb>初レース</sb>";
  }else{
    echo "<pb>${flag}</pb>";
  }
  echo "
    </td>
    </tr> "; 
}
function result_list_sub($name,$grade,$time,$place,$flag){
  echo"
    <td align='center' style='font-size : 110%;text-align : center;'>${name}</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${grade}年</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${time}</td>
    <td align='center' style='font-size : 110%;text-align : center;'>${place}位</td>
    <td align='center' style='font-size : 110%;text-align : center;'> ";
  if($flag == "pb"){
    echo "<pb>PB!!</pb>";
  }else if($flag == "sb"){
    echo "<sb>SB!</sb>";
  }else if($flag == "入賞"){
    echo "<sb>入賞!</sb>";
  }else if($flag == "入賞 pb"){
    echo "<sb>入賞!</sb><br><pb>PB!!</pb>";
  }else if($flag == "入賞 sb"){
    echo "<sb>入賞!<br>SB!</sb>";
  }else if($flag == "優勝"){
    echo "<pb>優勝!!</pb>";
  }else if($flag == "優勝 sb"){
    echo "<pb>優勝</pb><br><sb>SB!</sb>";
  }else if($flag == "決勝進出"){
    echo "${flag}";
  }else if($flag == "初レース"){
    echo "<sb>初レース</sb>";
  }else{
    echo "<pb>${flag}</pb>";
  }
  echo "
    </td>
    </tr> "; 
}

function result_link($year,$month){
  extract($GLOBALS);
    echo'
    <table border="0" cellpadding="2" cellspacing="0" class="hpb-colm1">
    <tbody>
    <tr>
    <td height="16" align="center" valign="middle" class="hpb-colm1-cell1" bgcolor="#CCFF99" style="font-size : 16px;color : rgb(51, 51, 51);text-align : center;border-top-width : 1px;border-left-width : 1px;border-right-width : 1px;border-top-style : solid;border-left-style : solid;border-color : black;" width="201"><b>'.$year.'年　'.$month.'月</b></td>
    </tr>
    <tr>
    <td align="left" valign="middle" class="hpb-colm1-cell2" style="font-size : 125%;" width="201" height="80"> ';
}
function result_link_list($year,$month,$day,$title,$flag){
  extract($GLOBALS);
  $link = "${root}/result/$year/result_$month.php";
  echo'
    <img src="'.$root.'/Image/img_o024.gif" width="16" height="16" border="0"><font size="3">  '.$day.'日 　<a href="'.$link.'#'.$flag.'">'.$title.'</font></a><br> ';
  }
function result_link_end(){
  extract($GLOBALS);
  echo'
    </td>
    </tbody>
    </table> ';
}

function form_result_aside(){
  extract($GLOBALS);
  //11月結果
  result_link(2015,11);
  result_link_list(2015,11,21,"学連10000m","21_gakuren");
  result_link_list(2015,11,1,"全日本大学駅伝","1_alljapan");
  result_link_end();
  //10月結果
  result_link(2015,10);
  result_link_list(2015,10,12,"出雲駅伝","12_izumo");
  result_link_list(2015,10,3,"世田谷5000m","3_setagaya");
  result_link_end();
  //9月結果
  result_link(2015,9);
  result_link_list(2015,9,"11-12","全日本インカレ","9_alljapan");
  result_link_end();
  //7月結果
  result_link(2015,7);
  result_link_list(2015,7,12,"ﾕﾆﾊﾞｰｼｱｰﾄﾞ ﾊｰﾌﾏﾗｿﾝ","12_univer");
  result_link_list(2015,7,4,"世田谷5000m","4_setagaya");
  result_link_end();
  //6月結果
  result_link(2015,6);
  result_link_list(2015,6,29,"函館ハーフ","29_hakodate");
  result_link_list(2015,6,13,"個人選手権","13_kojin");
  result_link_list(2015,6,7,"日体大5000m","7_nittai");
  result_link_end();
  //5月結果
  result_link(2015,5);
  result_link_list(2015,5,30,"世田谷5000m","30_setagaya");
  result_link_list(2015,5,24,"東北学院戦","24_tohoku");
  result_link_list(2015,5,17,"ぎふ清流ハーフ","17_gifu");
  result_link_list(2015,5,"14-17","関東ｲﾝｶﾚ","kankare");
  result_link_list(2015,5,10,"仙台ハーフ","10_sendai");
  result_link_end();
  //4月結果  
  result_link(2015,4);
  result_link_list(2015,4,26,"ｱｼｯｸｽ10000m","26_asics");
  result_link_list(2015,4,26,"日体大5000m","26_nittai");
  result_link_list(2015,4,25,"<font size='2'>相模原3000mSC</font>","25_sagamihara");
  result_link_list(2015,4,26,"ｱｼｯｸｽ10000m","25_asics");
  result_link_list(2015,4,25,"日体大記録会","25_nittai");
  result_link_list(2015,4,18,"織田記念5000m","12_oda");
  result_link_list(2015,4,12,"焼津マラソン","12_yaidu");
  result_link_list(2015,4,5,"日本平マラソン","05_nihondaira");
  result_link_list(2015,4,4,"世田谷5000m","4_setagaya");
  result_link_end();
}


?>