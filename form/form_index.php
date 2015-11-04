<?php
include("form.php");
function form_topic_result($y,$m,$d,$name,$tag){
    extract($GLOBALS);
	echo"
		<ul>
		<li>
			<h4>${y}年${m}月${d}日</h4>
			<a href='".$root."/result/${y}/result_${m}.php#${d}_${tag}'><b>${name}の結果をアップしました！</b></a>
		</li>
		</ul>
	";
}
function form_topic_yotei($y,$m,$d,$name,$tag){
    global $root;
	echo"
		<ul>
		<li>
			<h4>${y}年${m}月${d}日</h4>
			<a href='".$root."/yotei/${y}/yotei_${tag}.php'><b>${name}の出場予定選手をアップしました！</b></a>
		</li>
		</ul>
	";
}
function form_topic_onrei($y,$m,$d){
    global $root;
	echo"
		<ul>
		<li>
			<h4>${y}年${m}月${d}日</h4>
			<a href='".$root."/onrei/".$y."/onrei.php'><b>御礼ページを更新しました！</b></a>
		</li>
		</ul>
	";
}
function form_topic_free($y,$m,$d,$name,$tag){
    global $root;
	echo"
		<ul>
		<li>
			<h4>${y}年${m}月${d}日</h4>
			<a href='".$root."/yotei/${y}/yotei_${tag}.php'><b>${name}</b></a>
		</li>
		</ul>
	";
}
function form_aside(){
    extract($GLOBALS);
    echo '
        <div id="hpb-aside">
          <!-- aside -->
          <div id="banner">
            <h3 class="hpb-c-index">バナースペース</h3>
            <ul>
              <li>
                <a href="'.$rank_road.'" id="banner-time" style="font-size : 150%;">青学記録・ランキング</a>
              </li>
              <li>
                <a href="'.$best_4.'" style="font-size : 150%;">自己ベスト</a>
              </li>
              <li>
                <a href="'.$link.'" style="font-size : 150%;">関連サイト・リンク</a>
              </li>
            </ul>
            <script type="text/javascript" src="http://www.sashiire.jp/button/js/button3.js.php?w=235&h=50&cid=11" charset="utf-8"></script>
            <br>
            <br>
            <img src="'.$root.'/Image/image.jpg" border="0" style="border-top-width : 0px;border-left-width : 0px;border-right-width : 0px;border-bottom-width : 0px;"
            width="235" height="50">
            <br>
            <br>
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Faogaku.teamekiden&amp;width=235&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true&amp;appId=175934935934691"
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:235px; height:395px;" allowtransparency="true"></iframe>
            <ul style="margin:0;padding:0">
              <li style="display:inline;background-image:none;padding:2px 1px 1px;border:0">
                <a href="http://twitter.com/share" class="twitter-share-button" data-text="#aogaku" data-count="horizontal" data-lang="ja">Tweet</a>
                <script type="text/javascript" src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </li>
            </ul>累計アクセス：
            <img src="http://users079.lolipop.jp/cnt/accnt.php?cnt_id=2037337&ac_id=LAA0627537&mode=total">
            <br>本日：
            <img src="http://users079.lolipop.jp/cnt/accnt.php?cnt_id=2037337&ac_id=LAA0627537&mode=today">昨日：
            <img src="http://users079.lolipop.jp/cnt/accnt.php?cnt_id=2037337&ac_id=LAA0627537&mode=yesterday">            
          </div>
          <!-- banner -->
        </div>';
}
?>