<?php
	include("form.php");
	function form_onrei_aside(){
		extract($GLOBALS);
		echo '
		<div id="hpb-aside">
					<div id="banner">
						<h3 class="hpb-c-index">バナースペース</h3>
						<ul>
							<li><a href="'.$rank_road.'" id="banner-time" style="font-size : 150%;">青学記録・ランキング</a>
							<li><a href="'.$best_4.'" style="font-size : 150%;">自己ベスト</a>
							<li><a href="http://www.style-21.jp/bbs/agutf/" style="font-size : 150%;">応援ページ・掲示板</a>
							<li><a href="'.$link.'" style="font-size : 150%;">関連サイト・リンク</a>
							<br>
							<li><a href="'.$onrei_2015.'" style="font-size : 150%;text-align : center; background-image : url('.$root.'/Image/banner_3E1.png);">2015年度 御礼</a>
							<li><a href="'.$onrei_2014.'" style="font-size : 150%;text-align : center; background-image : url('.$root.'/Image/banner_3E1.png);">2014年度 御礼</a>
							<li><a href="'.$onrei_2013.'" style="font-size : 150%;text-align : center; background-image : url('.$root.'/Image/banner_3E1.png);">2013年度 御礼</a>
							<li><a href="'.$onrei_2012.'" style="font-size : 150%;text-align : center; background-image : url('.$root.'/Image/banner_3E1.png);">2012年度 御礼</a>
							<li><a href="'.$onrei_2011.'" style="font-size : 150%;text-align : center; background-image : url('.$root.'/Image/banner_3E1.png);">2011年度 御礼</a>
						</ul>
					</div><!-- banner end -->
        </div>
		';
	}

function form_onrei_parent($tag,$name,$grade,$item,$photo_member,$long){
	if($long=="width"){
		echo '
			<tr>
				<td bgcolor="#CCFF99" style="text-align : center;" align="center"><a href="images/'.$tag.'" rel="lightbox[onrei]" title="-"><img src="images/'.$tag.'" width="273" height="203" alt="準備中" title="-"></a></td>
			';
	}else if($long=="height"){
		echo '
			<tr>
				<td bgcolor="#CCFF99" style="text-align : center;" align="center"><a href="images/'.$tag.'" rel="lightbox[onrei]" title="-"><img src="images/'.$tag.'" width="203" height="270" alt="準備中" title="-"></a></td>
		';
	}
	echo '
				<td bgcolor="#CCFF99" style="text-align : left;" align="left" width="254" valign="middle">
			先日、'.$name.'（'.$grade.'年）の保護者より、'.$item.'の差し入れを頂きました。<br>
			<br>
			この度は、誠にありがとうございました。<br>
			<br>
			写真は、'.$photo_member.'です。
			</td>
		</tr>
	';
}
function form_onrei_free($tag,$name,$item,$photo_member,$long){
	if($long=="width"){
		echo '
			<tr>
				<td bgcolor="#CCFF99" style="text-align : center;" align="center"><a href="images/'.$tag.'" rel="lightbox[onrei]" title="-"><img src="images/'.$tag.'" width="273" height="203" alt="準備中" title="-"></a></td>
		';
	}else if($long=="height"){
		echo '
			<tr>
				<td bgcolor="#CCFF99" style="text-align : center;" align="center"><a href="images/'.$tag.'" rel="lightbox[onrei]" title="-"><img src="images/'.$tag.'" width="203" height="270" alt="準備中" title="-"></a></td>
		';
	}
	echo '
				<td bgcolor="#CCFF99" style="text-align : left;" align="left" width="254" valign="middle">
			先日、'.$name.'より、'.$item.'の差し入れを頂きました。<br>
			<br>
			この度は、誠にありがとうございました。<br>
			<br>
			写真は、'.$photo_member.'です。
			</td>
		</tr>
	';
}

?>