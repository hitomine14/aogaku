<?php
include("form.php");

function form_photo_aside(){
  extract($GLOBALS);
	echo '
	<div id="hpb-aside">
      <div id="banner" style="text-align : center;" align="center"><!-- banner -->
        <table width="100%" class="hpb-lay-ftable">
          <tbody>
            <tr>
              <td bgcolor="#228b22" style="text-align : center;"><font color="#ffffff" face="HGｺﾞｼｯｸE" style="font-size : 150%;">過去の写真</font></td>
            </tr>
          </tbody>
        </table>
        <h3 class="hpb-c-index">バナースペース</h3>
        <ul>
			<li><a href="'.$photo_2015.'" style="font-size : 150%;text-align : center;">2015年度</a>
			<li><a href="'.$photo_2014.'" style="font-size : 150%;text-align : center;">2014年度</a>
        </ul>
      </div><!-- banner end -->
    </div>
	';
}



?>