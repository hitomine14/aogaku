<!DOCTYPE HTML>
<html lang="ja">
<head>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/form/form_photo.php");  ?>
  <?php form_metadata();  ?>  
    
  <?php 
    function pictureList($num,$link){
      echo '
        <table border="1" width="100%" cellpadding="0" cellspacing="0" align="center" class="hpb-lay-ftable">
        <tbody >
      ';
      for($i=1;$i<=$num;$i=$i+2){
        $path = "{$link}/{$i}.JPG";
        $j=$i+1;
        $path2 = "{$link}/{$j}.JPG";
       echo'
       
      <tr>
        <td bgcolor="#CCFF99" style="text-align : center;" align="center"><a href='.$path.' rel="lightbox[onrei]"><img src='.$path.' width="270" height="180"></a>
        </td>
        <td bgcolor="#CCFF99" style="text-align : center;" align="center"><a href='.$path2.' rel="lightbox[onrei]"><img src='.$path2.' width="270" height="180"></a>
        </td>
      </tr>    
        ';
       }
       echo'
          </tbody>
        </table>
      ';					
    }
  ?>
</head>
<body id="hpb-template-03-05-01" class="hpb-layoutset-02">
<div id="hpb-container"><!-- container -->
  <!-- header -->
  <?php form_header(); ?>
  <!-- header end -->
  <div id="hpb-inner"><!-- inner -->
    <div id="hpb-wrapper"><!-- wrapper -->
      <div id="hpb-title"><!-- page title -->
        <h2><span class="ja">写真館</span><span class="en">Photo studio</span></h2>
      </div><!-- page title end -->      
      <div id="hpb-main"><!-- main -->
        <div id="facilities"><!-- facilities -->
          <h3>夏季１次全体合宿 in菅平・妙高　～フォトスナップ～</h3>
          <h4>1日目</h4>
					<?php pictureList(12,"image"); ?>
          <br>
          <h4>2日目</h4>
					<?php pictureList(24,"image2"); ?>
       <script>
        
        var i=1;
        var num=12;
        for(i=1;i<=num;i++){
          if(document.getElementById("8gekirei").width > document.getElementById("8gekirei").height){
            document.getElementById(i).width=270;
            document.getElementById(i).height=document.getElementById(i).height*270/document.getElementById(i).width;
          }else{
            document.getElementById(i).width=document.getElementById(i).width*270/document.getElementById(i).height;
            document.getElementById(i).height=270;
          }
        }  
       </script>
          <hr>
            <?php form_toppage(); ?>
        </div><!-- facilities end -->
      </div><!-- main end -->
    </div><!-- wrapper end -->
    <!-- navi -->
      <?php form_navi(); ?>
    <!-- navi end -->
    <!-- aside -->
      <?php form_photo_aside(); ?>
    <!-- aside end -->
  </div><!-- inner end -->
  <!-- footer -->
    <?php form_footer(); ?>
  <!-- footer end -->
</div><!-- container end -->
</body>
</html>