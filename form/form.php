<?php 
  include("path.php");
function form_metadata(){
  extract($GLOBALS);
  echo '
    <meta charset="UTF-8">
    <title>青山学院大学陸上競技部</title>
    <script src="'.$root.'/frame.js"></script>
    <link rel="stylesheet" href="'.$root.'/hpbparts.css">
    <link rel="stylesheet" href="'.$root.'/container_3E_2c_top.css">
    <link rel="stylesheet" href="'.$root.'/main_3E_2c.css">
    <link rel="stylesheet" href="'.$root.'/user.css">
  ';
    }

function form_header(){
  extract($GLOBALS);
  echo'
    <div id="hpb-header">
      <div id="hpb-headerMain">
        <h1>青山学院大学体育会陸上競技部(長距離ブロック）公式ホームページ</h1>
      </div>
      <div id="hpb-headerLogo">
        <a href="'.$index.'">青山学院大学陸上競技部</a>
      </div>
      <div id="hpb-headerExtra1">
        <p class="tel">
        <span id="120" style="font-size : 65%;">このページは青山学院大学陸上競技部が
        <br>管理・運営を行っています。</span>
        </p>
      </div>
    </div>
  ';
}

function form_navi(){
  extract($GLOBALS);
  echo'
    <div id="hpb-nav">
      <h3 class="hpb-c-index">ナビゲーション</h3>
      <ul>
        <li id="nav-toppage">
          <a href="'.$index.'"><span class="ja">トップページ</span><span class="en">top&nbsp;page</span></a>
        </li>
        <li id="nav-guide">
          <a href="'.$member_4.'"><span class="ja">部員紹介</span><span class="en">buinn&nbsp;syoukai</span></a>
        </li>
        <li id="nav-info">
          <a href="'.$yotei_2015.'"><span class="ja">今後の予定</span><span class="en">future&nbsp;schedule</span></a>
        </li>
        <li id="nav-policy">
          <a href="'.$result_2015.'"><span class="ja">競技結果</span><span class="en">race&amp;result</span></a>
        </li>
        <li id="nav-facilities">
          <a href="'.$photo_2015.'"><span class="ja">写真館</span><span class="en">photo</span></a>
        </li>
        <li id="nav-access">
          <a href="'.$onrei_2015.'"><span class="ja">御礼ページ</span><span class="en">orei</span></a>
        </li>
      </ul>
    </div>
  ';
}

function form_footer(){
  echo'
    <div id="hpb-footer">
      <div id="hpb-footerMain">
        <p>copyright&copy;2012 青山学院大学陸上競技部 all rights reserved.</p>
      </div>
    </div>
  ';
}

function form_toppage(){
  echo'
    <div id="pagetop">
      <a href="#hpb-container">このページの先頭へ</a>
    </div>
  ';
}
?>
