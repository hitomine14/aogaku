<?php
	
include("form.php");
function form_best_aside(){
  extract($GLOBALS);
	echo"
      <div id='banner'' style='text-align : center;'' align='center'><!-- baneer -->
        <table width='100%'' class='hpb-lay-ftable'>
          <tbody>
            <tr>
              <td bgcolor='#228b22'' style='text-align : center;'><font color='#ffffff'' face='HGｺﾞｼｯｸE'' style='font-size : 150%;'>各学年のベスト</font></td>
            </tr>
          </tbody>
        </table>
        <h3 class='hpb-c-index'>バナースペース</h3>
        <ul>
          <li><a href='".$best_4."' style='font-size : 150%;text-align : center;'>4年生</a></li>
          <li><a href='".$best_3."' style='font-size : 150%;text-align : center;'>3年生</a></li>
          <li><a href='".$best_2."' style='font-size : 150%;text-align : center;'>2年生</a></li>
          <li><a href='".$best_1."' style='font-size : 150%;text-align : center;'>1年生</a></li>
        </ul>
      </div><!-- banner end -->	
	";
}
?>



