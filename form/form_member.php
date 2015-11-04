<?php
include("form.php");
function form_member_aside(){
  extract($GLOBALS);
	echo '
	    <div id="hpb-aside">
      <div id="banner" style="text-align : center;" align="center"><!-- banner -->
        <table width="100%" class="hpb-lay-ftable">
          <tbody>
            <tr>
              <td bgcolor="#228b22" style="text-align : center;"><font color="#ffffff" face="HGｺﾞｼｯｸE" style="font-size : 150%;">長距離ブロック</font></td>
            </tr>
          </tbody>
        </table>
        <h3 class="hpb-c-index">バナースペース</h3>
        <ul>
          <li><a href="'.$member.'" style="font-size : 165%;text-align : center;">部員一覧</a>
          <li><a href="'.$member_staff.'" style="font-size : 165%;text-align : center;">スタッフ</a>
          <li><a href="'.$member_4.'" style="font-size : 170%;text-align : center;">4年生</a>
          <li><a href="'.$member_3.'" style="font-size : 170%;text-align : center;">3年生</a>
          <li><a href="'.$member_2.'" style="font-size : 170%;text-align : center;">2年生</a>
          <li><a href="'.$member_1.'" style="font-size : 170%;text-align : center;">1年生</a>
          <li><a href="'.$member_mane.'" style="font-size : 165%;text-align : center;">マネージャー</a>
        </ul>
      </div><!-- banner end -->
    </div>
	';
}

?>