<?php
include("form.php");
function form_yotei_schema(){
	echo '
		<tr>
		<td bgcolor="#CCFF99" valign="middle" style="text-align : center;" align="center">月</td>
		<td bgcolor="#CCFF99" valign="middle" style="text-align : center;" align="center">日</td>
		<td bgcolor="#CCFF99" valign="middle" style="text-align : center;" align="center" width="169">予定</td>
		<td bgcolor="#CCFF99" valign="middle" style="text-align : center;" align="center" width="147">場所</td>
		<td bgcolor="#CCFF99" valign="middle" style="text-align : center;" align="center" width="37"><a href=""><u></u></a></td>
		</tr>
	';
}
function form_yotei_content_month($counter,$counter2,$y,$m,$d,$name,$place,$tag,$flag){
	extract($GLOBALS);
	$link = "$root/yotei/$y/yotei_$m.php#${d}_$tag";
	echo "
		<tr>
		<td valign='middle' style='text-align : center;' align='center' rowspan='${counter}'>${m}月</td>
		<td valign='middle' style='text-align : center;' align='center' rowspan='${counter2}'>${d}日</td>
		<td valign='middle' style='text-align : center;' align='center' width='169'>${name}</td>
		<td valign='middle' style='text-align : center;' align='center' width='147'>${place}</td>
		<td valign='middle' style='text-align : center;' align=''center' width='37'><a href='$link'><u>${flag}</u></a></td>
		</tr>
	";	
}

function form_yotei_content_day($counter,$y,$m,$d,$name,$place,$tag,$flag){
	extract($GLOBALS);
	$link = "$root/yotei/$y/yotei_$m.php#${d}_$tag";
	echo "
		<tr>
		<td valign='middle' style='text-align : center;' align='center' rowspan='${counter}'>${d}日</td>
		<td valign='middle' style='text-align : center;' align='center' width='169'>${name}</td>
		<td valign='middle' style='text-align : center;' align='center' width='147'>${place}</td>
		<td valign='middle' style='text-align : center;' align=''center' width='37'><a href='$link'><u>${flag}</u></a></td>
		</tr>
	";	
}

function form_yotei_content_sub($y,$m,$d,$name,$place,$tag,$flag){
	extract($GLOBALS);
	$link = "$root/yotei/$y/yotei_$m.php#${d}_$tag";
	echo "
		<tr>
		<td valign='middle' style='text-align : center;' align='center' width='169'>${name}</td>
		<td valign='middle' style='text-align : center;' align='center' width='147'>${place}</td>
		<td valign='middle' style='text-align : center;' align=''center' width='37'><a href='$link'><u>${flag}</u></a></td>
		</tr>
	";	
}

function form_yotei_aside(){
	extract($GLOBALS);
	echo "
		<div id='hpb-aside'>
		<div id='banner' style='text-align : center;' align=center>
		<table width=100% class=hpb-lay-ftable>
		<tbody>
			<tr>
			<td bgcolor=#228b22 style='text-align : center;'><font color=#ffffff face=HGｺﾞｼｯｸE style='font-size : 150%;'>過去の予定</font></td>
			</tr>
		</tbody>
		</table>
		<h3 class=hpb-c-index>バナースペース</h3>
		<ul>
			<li><a href=".$yotei_2015." style='font-size : 150%;text-align : center;'>2015年度</a>
		</ul>
		</div>
	";
}

?>